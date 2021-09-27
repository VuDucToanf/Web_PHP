<?php 
	include "models/ProductsModel.php";
	class ProductsController extends Controller{
		//kế thừa
		use ProductsModel;
		public function category(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//quy định một số bản ghi trên 1 trang
			$recordPerPage = 20;
			//tính số trang
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			//lấy dữ liệu từ model
			$data = $this->modelRead($recordPerPage);
			//gọi view, truyền dữ liệu ra view
			$this->loadView("CategoryProductsView.php",["data"=>$data,"numPage"=>$numPage, "id"=>$id]);
		}
		//chi tiết sản phẩm
		public function detail(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			$record = $this->modelGetProduct($id);
			//quy định một số bản ghi trên 1 trang
			$recordPerPage = 5;
			//tính số trang
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			//lấy dữ liệu từ model
			$data = $this->modelReadComment(5);
			//gọi view, truyền dữ liệu ra view
			$this->loadView("DetailProductsView.php", ["record"=>$record, "id"=>$id,"data"=>$data,"numPage"=>$numPage]);
		}
		//đánh giá số sao
		public function rating(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			$this->modelRating();
			//di chuyen den trang chi tiet san pham
			header("location:index.php?controller=products&action=detail&id=$id");
		}
		//create comment
		public function comment(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//kiểm tra nếu user chưa đăng nhập thì yêu cầu đăng nhập
			if(isset($_SESSION["customer_email"]) == false)
			{
				$_SESSION['action'] = "location:index.php?controller=products&action=comment&id=$id";
				header("location:index.php?controller=account&action=login");
			}
			else{
				$this->modelCreateComment();
				//di chuyen den trang chi tiet san pham
				header("location:index.php?controller=products&action=detail&id=$id");
			}
		}
		//update comment
		public function updateComment(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			$this->modelUpdateComment();
			header("location:index.php?controller=products&action=detail&id=$id");
		}
		//delete comment
		public function deleteComment(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			$this->modelDeleteComment();
			header("location:index.php?controller=products&action=detail&id=$id");
		}
	}
 ?>