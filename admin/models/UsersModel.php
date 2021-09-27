<?php 
	trait UsersModel{
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
			$query = $conn->query("select * from users order by id desc limit $from, $recordPerPage");
			//trả về nhiều bản ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from users");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
		//lấy một bản ghi tương ứng với id truyền vào
		public function modelGetRecord(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuẩn bị truy vấn
			$query = $conn->prepare("select * from users where id = :var_id");
			//thực thi truy vấn, có truyền tham số câu lệnh sql
			$query->execute(["var_id"=>$id]);
			//trả về một bản ghi
			return $query->fetch();
		}
		public function modelUpdate(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuẩn bị truy vấn
			$query = $conn->prepare("update users set name=:var_name, email=:var_email where id=:var_id");
			//thực thi truy vấn, có truyền tham số câu lệnh sql
			$query->execute(["var_id"=>$id, "var_name"=>$name, "var_email"=>$email]);
			//nếu password không rỗng thì update password
			if($password != ""){
				//mã hóa password
				$password = md5($password);
				//chuẩn bị truy vấn
				$query = $conn->prepare("update users set password=:var_password where id=:var_id");
				//thực thi truy vấn, có truyền tham số câu lệnh sql
				$query->execute(["var_id"=>$id, "var_password"=>$password]);
			}
		}
		public function modelCreate(){
			$name = $_POST["name"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			//ma hoa password
			$password = md5($password);
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("insert into users set name=:var_name,email=:var_email,password=:var_password");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_name"=>$name,"var_email"=>$email,"var_password"=>$password]);			
		}
		public function modelDelete(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("delete from users where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
		}
	}
 ?>