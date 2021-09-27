<?php 
	trait ProductsModel{
		//lay ve danh sach cac ban ghi
		public function modelRead($recordPerPage){
			$category_id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//lay bien page truyen tu url
			$page = isset($_GET["p"])&& $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			$sqlOrder = "";
			$order = isset($_GET["order"]) ? $_GET["order"] : "";
			switch ($order) {
				case 'priceAsc':
					$sqlOrder = "order by price asc";
					break;
				case 'priceDesc':
					$sqlOrder = "order by price desc";
					break;
				case 'nameAsc':
					$sqlOrder = "order by name asc";
					break;
				case 'NameDesc':
					$sqlOrder = "order by name desc";
					break;
				default:
					$sqlOrder = "order by id desc";
					break;
			}
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where category_id=$category_id $sqlOrder limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			$category_id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where category_id=$category_id");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
		//lấy một bản ghi danh mục sản phẩm
		public function modelGetCategory($category_id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from categories where id=$category_id");
			//tra ve so luong ban ghi
			return $query->fetch();
		}
		//lấy một bản ghi danh mục sản phẩm
		public function modelGetProduct($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where id=$id");
			//tra ve so luong ban ghi
			return $query->fetch();
		}
		//đánh số sao sản phẩm
		public function modelRating(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$star = isset($_GET["star"]) ? $_GET["star"] : 0;
			if($star > 0 && $id > 0){
				//lay bien ket noi csdl
				$conn = Connection::getInstance();
				$conn->query("insert into rating(product_id, star) values($id, $star)");
			}
		}
		//lấy số sao để hiển thị
		public function modelGetStar($product_id, $star){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from rating where product_id = $product_id and star = $star");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
		//lấy các danh mục cha Home
		public function modelCategoriesParentHome(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = 0");
			return $query->fetchAll();
		}
		//liệt kê các danh mục cấp 1 (cấp con của cấp cha)
		public function modelCategoriesSub($category_id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = $category_id order by id desc");
			//trả về tất cả các kết quả lấy được
			return $query->fetchAll();
		}
		//tạo commments
		public function modelCreateComment(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$customer_name = $_SESSION['customer_email'];
			$description = isset($_POST["description"]) ? $_POST["description"] : "";
			if($description != "" && $id > 0){
				//lay bien ket noi csdl
				$conn = Connection::getInstance();
				//chuan bi truy van
				$query = $conn->prepare("insert into comments set customer_name=:var_name,description=:var_description,product_id=:var_product_id");
				//thuc thi truy van, co truyen tham so vao cau lenh sql
				$query->execute(["var_name"=>$customer_name,"var_description"=>$description,"var_product_id"=>$id]);
			}
		}
		//lấy comment để hiển thị
		public function modelReadComment($recordPerPage){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//lay bien page truyen tu url
			$page = isset($_GET["p"])&& $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from comments where product_id = $id order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//edit comment
		public function modelUpdateComment(){
			$id = isset($_GET["idComment"]) ? $_GET["idComment"] : 0;
			$description = isset($_POST["description"]) ? $_POST["description"] : "";	
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("update comments set description=:var_description where id = $id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_description"=>$description]);
		}
		//delete comment
		public function modelDeleteComment(){
			$id = isset($_GET["idComment"]) ? $_GET["idComment"] : 0;
			$description = isset($_POST["description"]) ? $_POST["description"] : "";	
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("delete from comments where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
		}
	}
 ?>