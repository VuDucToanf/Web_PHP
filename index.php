<?php 
	//start session
	session_start();
	//load file Connection.php
	include "application/Connection.php";
	//load file Controller.php
	include "application/Controller.php";
	//load file Unicode.php để biến tiếng việt có dấu thành không dấu
	include "application/Unicode.php";
 ?>

<?php 
	//load động MVC du vào tham số controller truyền lên url
	$controller = isset($_GET["controller"]) ? $_GET['controller']: "Home";
	$action = isset($_GET["action"]) ? $_GET['action']: "index";
	//tạo đường dẫn vật lý của file controller trong MVC. VD: Controllers/PhongBanController.php
	//Hàm ucfirst(string) sẽ viết hoa ký tự đầu tiên
	$controllerFile = "controllers/".ucfirst($controller)."Controller.php";
	//file_exists(đường dẫn) trả về true nếu file tồn tại, ngược lại trả về false
	if(file_exists($controllerFile)){
		include $controllerFile;
		$controllerClass = $controller."Controller";
		//khởi tạo object của class
		$obj = new $controllerClass();
		//gọi đến action
		$obj->$action();
	}else die("File $controllerFile không tồn tại");
	//Hàm die("chuỗi") xuất ra thông báo chuỗi
 ?>