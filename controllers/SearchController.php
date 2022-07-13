<?php
	//include file model vào đây
	include "models/SearchModel.php";
	class SearchController extends Controller{
		//kế thừa class SearchModel
		use SearchModel;
		public function name(){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			//quy định một số bản ghi trên 1 trang
			$recordPerPage = 20;
			//tính số trang
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			//lấy dữ liệu từ model
			$data = $this->modelRead($recordPerPage);
			//gọi view, truyền dữ liệu ra view
			$this->loadView("SearchNameView.php",["data"=>$data,"numPage"=>$numPage, "key"=>$key]);
		}
		public function ajaxSearch(){
			$data = $this->modelAjaxSearch();
			$strResult = "";
			foreach($data as $rows){
				$strResult = $strResult."<li><img src='http://dev.doan.vn/assets/upload/products/{$rows->photo}'> <a href='index.php?controller=products&action=detail&id={$rows->id}'>{$rows->name}</a></li>";
			}
			echo $strResult;
		}
		public function price(){
			$fromPrice = isset($_GET["fromPrice"]) ? $_GET["fromPrice"] : 0;
			$toPrice = isset($_GET["toPrice"]) ? $_GET["toPrice"] : 0;
			//quy định một số bản ghi trên 1 trang
			$recordPerPage = 20;
			//tính số trang
			$numPage = ceil($this->modelTotalRecordSearchPrice()/$recordPerPage);
			//lấy dữ liệu từ model
			$data = $this->modelReadSearchPrice($recordPerPage);
			//gọi view, truyền dữ liệu ra view
			$this->loadView("SearchPriceView.php",["data"=>$data,"numPage"=>$numPage, "fromPrice"=>$fromPrice, "toPrice"=>$toPrice]);
		}
	}
?>
