<?php 
	trait CategoriesModel{
		//lấy về danh sách các bản ghi
		public function modelRead($recordPerPage){
			//lấy biến là page truyền từ url
			$page = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lấy từ bản ghi nào
			$from = $page * $recordPerPage;
			//------
			//lấy biến kết nối csdl
			$conn = Connection::getInstance();
			//thực hiện truy vấn
			$query = $conn->query("select * from categories where parent_id = 0 order by id desc limit $from, $recordPerPage");
			//trả về nhiều bản ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from categories where parent_id = 0");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
		//lấy một bản ghi tương ứng với id truyền vào
		public function modelGetRecord(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuẩn bị truy vấn
			$query = $conn->prepare("select * from categories where id = :var_id");
			//thực thi truy vấn, có truyền tham số câu lệnh sql
			$query->execute(["var_id"=>$id]);
			//trả về một bản ghi
			return $query->fetch();
		}
		public function modelUpdate(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			$name = $_POST['name'];
			$parent_id = $_POST['parent_id'];
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuẩn bị truy vấn
			$query = $conn->prepare("update categories set name=:var_name, parent_id=:var_parent_id where id=:var_id");
			//thực thi truy vấn, có truyền tham số câu lệnh sql
			$query->execute(["var_id"=>$id, "var_name"=>$name, "var_parent_id"=>$parent_id]);
		}
		public function modelCreate(){
			$name = $_POST["name"];
			$parent_id = $_POST['parent_id'];
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("insert into categories set name=:var_name, parent_id=:var_parent_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_name"=>$name, "var_parent_id"=>$parent_id]);
		}
		public function modelDelete(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("delete from categories where id=:var_id or parent_id = $id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
		}
		//liệt kê các danh mục cấp 1 (cấp con của cấp cha)
		public function modelCategoriesSub($category_id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = $category_id order by id desc");
			//trả về tất cả các kết quả lấy được
			return $query->fetchAll();
		}
		//liệt kê các danh mục cấp 0 
		public function modelCategories(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = 0 order by id desc");
			//trả về tất cả các kết quả lấy được
			return $query->fetchAll();
		}
	}
 ?>