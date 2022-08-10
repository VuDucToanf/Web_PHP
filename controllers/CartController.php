<?php
	include "models/CartModel.php";
	class CartController extends Controller{
		use CartModel;
		public function __construct(){
			//kiểm tra nếu giỏ hàng chưa tồn tại thì khởi tạo nó
			if(isset($_SESSION["cart"]) == false){
				$_SESSION['cart'] = array();
			}
		}
		//hiển thị danh sách các sản phẩm trong giỏ hàng
		public function index(){
			$this->loadView("CartView.php");
		}
		//thêm sản phẩm vào giỏ hàng
		public function create(){
			$id = isset($_GET["id"]) ? $_GET['id'] : 0;
            $quantity = isset($_GET["quantity"]) ? $_GET["quantity"] : 0;
			//gọi hàm trong model
			$this->cartAdd($id, $quantity);
			header("location:index.php?controller=cart");
		}
		//xóa sản phẩm khỏi giỏ hàng
		public function delete(){
			$id = isset($_GET["id"]) ? $_GET['id'] : 0;
			//gọi hàm trong model
			$this->cartDelete($id);
			header("location:index.php?controller=cart");
		}
		//xóa tất cả sản phẩm khỏi giỏ hàng
		public function destroy(){
			//gọi hàm trong model
			$this->cartDestroy();
			header("location:index.php?controller=cart");
		}
		//cập nhật số lượng sản phẩm
		public function update(){
			foreach($_SESSION['cart'] as $product){
				$name = "product_".$product["id"];
				$number = $_POST[$name];
				$this->cartUpdate($product["id"], $number);
			}
			header("location:index.php?controller=cart");
		}
		//thanh toán giỏ hàng
		public function checkout(){
			//kiểm tra nếu user chưa đăng nhập thì yêu cầu đăng nhập
			if(isset($_SESSION["customer_email"]) == false)
				header("location:index.php?controller=account&action=login");
			else{
				//gọi hàm checkOut trong model
				$this->cartCheckOut();
				header("location:index.php?controller=cart");
			}
		}

		public function store()
		{
			echo '<pre>';
			print_r($_GET);
			echo '</pre>';die;
		}
	}
 ?>
