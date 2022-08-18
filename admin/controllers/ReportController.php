<?php
include "models/OrdersModel.php";
class ReportController extends Controller
{
    use OrdersModel;
    public function index() {
        $status = isset($_GET["status"]) ? $_GET["status"] : 1;
        //quy dinh so ban ghi tren mot trang
        $recordPerPage = 20;
        //tinh so trang
        $numPage = ceil($this->modelTotalRecord()/$recordPerPage);
        $data = $this->modelReport($recordPerPage, $status);
        //goi view, truyen du lieu ra view
        $this->loadView("ReportView.php",["data"=>$data,"numPage"=>$numPage,"status"=>$status]);
    }

    public function detail() {
        $date = isset($_GET["date"]) ? $_GET["date"] : 0;
        $status = isset($_GET["status"]) ? $_GET["status"] : 1;
        //quy dinh so ban ghi tren mot trang
        $recordPerPage = 20;
        //tinh so trang
        $numPage = ceil($this->modelTotalRecord()/$recordPerPage);
        $data = $this->modelReportDetail($recordPerPage, $date, $status);
        //goi view, truyen du lieu ra view
        $this->loadView("ReportDetailView.php",["data"=>$data,"numPage"=>$numPage,"date"=>$date,"status"=>$status]);
    }
}
