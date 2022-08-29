<?php
include "models/OrdersModel.php";
class ReportController extends Controller
{
    use OrdersModel;
    public function index() {
        $status = isset($_GET["status"]) ? $_GET["status"] : 1;
        $date_from = isset($_GET["date_from"]) ? $_GET["date_from"] : null;
        $date_to = isset($_GET["date_to"]) ? $_GET["date_to"] : null;
            //quy dinh so ban ghi tren mot trang
        $recordPerPage = 20;
        //tinh so trang
        $numPage = ceil($this->modelTotalRecord()/$recordPerPage);
        $data = $this->modelReport($recordPerPage, $status, $date_from, $date_to);
        $total = $this->modelTotal($recordPerPage, $status, $date_from, $date_to);
        //goi view, truyen du lieu ra view
        $this->loadView("ReportView.php",["data"=>$data,"numPage"=>$numPage,"status"=>$status,"total"=>$total]);
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
