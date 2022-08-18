<?php
	trait OrdersModel{
		//lay ve danh sach cac ban ghi
		public function modelRead($recordPerPage){
			//lay bien page truyen tu url
			$page = isset($_GET["p"])&& $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from orders order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
        //tong hop danh sach don hang
        public function modelReport($recordPerPage, $status){
            //lay bien page truyen tu url
            $page = isset($_GET["p"])&& $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
            //lay tu ban ghi nao
            $from = $page * $recordPerPage;
            //---
            //lay bien ket noi csdl
            $conn = Connection::getInstance();
			$query = $conn->query("select * from orders where status = $status group by date limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
        }
		//chi tiet don hang thanh cong theo ngay
		public function modelReportDetail($recordPerPage, $date, $status){
			//lay bien page truyen tu url
			$page = isset($_GET["p"])&& $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from orders 
    			inner join orderdetails on orders.id = orderdetails.order_id 
         		inner join products on orderdetails.product_id = products.id
         		where orders.status = $status and orders.date = '$date' limit $from, $recordPerPage
			");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from orders");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
		//lay ban ghi ho va ten
		public function modelGetCustomer($customer_id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from customers where id=$customer_id");
			//tra ve mot ban ghi
			return $query->fetch();
		}
		//chi tiet don hang
		public function modelOrdersDetail($order_id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from orderdetails where order_id=$order_id");
			//tra ve mot ban ghi
			return $query->fetchAll();
		}
		public function modelGetProduct($product_id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where id=$product_id");
			//tra ve nhieu ban ghi
			return $query->fetch();
		}
		public function modelDelivery($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("update orders set status = 1 where id=$id");
		}
	}
 ?>
