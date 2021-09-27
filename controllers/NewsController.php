<?php 
	//include file model vào đây
	include "models/NewsModel.php";
	class NewsController extends Controller{
		//kế thừa class model
		use NewsModel;
		public function index(){
			//quy định một số bản ghi trên 1 trang
			$recordPerPage = 20;
			//tính số trang
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			//lấy dữ liệu từ model
			$data = $this->modelRead($recordPerPage);
			//gọi view, truyền dữ liệu ra view
			$this->loadView("NewsView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		public function detail(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay mot ban ghi
			$record = $this->modelGetRecord();
			//goi view, truyen du lieu ra view
			$this->loadView("NewsDetailView.php",["record"=>$record]);
		}
	}
 ?>