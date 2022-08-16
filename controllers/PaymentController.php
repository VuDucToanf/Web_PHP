<?php

include "models/CartModel.php";
class PaymentController extends Controller
{
    use CartModel;
    public function __construct(){
        //kiểm tra nếu giỏ hàng chưa tồn tại thì khởi tạo nó
        if(isset($_SESSION["cart"]) == false){
            $_SESSION['cart'] = array();
        }
    }

    //hiển thị danh sách các sản phẩm trong giỏ hàng
    public function index(){
        $this->loadView("PaymentView.php");
    }

    //trang thanh toán
    public function payment() {
        if(isset($_SESSION["customer_email"]) == false)
            header("location:index.php?controller=account&action=login");
        else{
            header("location:index.php?controller=payment");
        }
    }

    //xác nhận đơn hàng
    public function execute(){
        $this->cartCheckOut();
        header("location:index.php?controller=cart");
    }
}
