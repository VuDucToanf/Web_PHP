<?php 
	trait AccountModel{
		public function modelRegister(){
			$name = $_POST["name"];
			$email = $_POST["email"];
			$address = $_POST["address"];
			$phone = $_POST["phone"];
			$password = $_POST["password"];
			//mã hóa password
			$password = md5($password);
			//---
			$conn = Connection::getInstance();
			//kiểm tra nếu email chưa tồn tại thì insert bản ghi
			$queryCheck = $conn->prepare("select email from customers where email=:var_email");
			$queryCheck->execute(["var_email"=>$email]);
			if($queryCheck->rowCount() > 0)
				header("location:index.php?controller=account&action=register&notify=error");
			else{
				//insert bản ghi
				$query = $conn->prepare("insert into customers set name = :var_name, email = :var_email, address = :var_address, phone = :var_phone, password = :var_password");
				$query->execute(["var_name"=>$name, "var_email"=>$email, "var_address"=>$address, "var_phone"=>$phone, "var_password"=>$password]);
				header("location:index.php?controller=account&action=login");
			}
			//---
		}

		public function modelLogin(){
			$email = $_POST["email"];
			$password = $_POST["password"];
			//mã hóa password
			$password = md5($password);
			//---
			$conn = Connection::getInstance();
			$query = $conn->prepare("select id, email, password from customers where email=:var_email");
			$query->execute(["var_email"=>$email]);
			if($query->rowCount() > 0){
				//lấy một bản ghi
				$result = $query->fetch();
				if($password == $result->password){
					$_SESSION['customer_id'] = $result->id;
					$_SESSION['customer_email'] = $result->email;
					header("location:index.php");
				}
                else{
					header("location:index.php?controller=account&action=login");
				}
			}
			//---
		}
		public function modelLogout(){
			//hủy các biến session
			unset($_SESSION["customer_id"]);
			unset($_SESSION["customer_email"]);
			header("location:index.php?controller=account&action=login");
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
	}
 ?>