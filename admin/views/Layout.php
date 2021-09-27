<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trang chủ admin</title>
	<!-- fontawesome -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap 4 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<!-- style css -->
	<link rel="stylesheet" type="text/css" href="../assets/admin/css/style_admin.css">
	<script type="text/javascript" src="../assets/admin/ckeditor/ckeditor.js"></script>
</head>
<body>
<div class="container-fluid">
	<div class="row d-flex justify-content-between">
		<div class="col-2">
			<div class="row" style="background-color: #F8F9FA;">
				<div class="logo">
					<a href="index.php">
						<img src="../assets/admin/images/admin.png" width="70" height="70">
						<span class="text-danger" style="font-size: 30px;">Trang chủ</span>
					</a>
				</div>
			</div>
		</div>
		<div class="content col-10 ml-0 p-0">
			<div class="row info d-flex justify-content-between m-0" style="background-color: #F8F9FA;">
				<div class="navbar navbar-light bg-light form_search float-left">
					<form class="form-inline">
				    	<input class="form-control mr-sm-2" type="search" placeholder="Nhập từ khóa" aria-label="Search" style="width: 600px;">
				    	<button type="submit" class="btn btn-info">
				    		<i class="fas fa-search"></i>
				    	</button>
				  	</form>
				</div>
				<div>
					<div class="user mt-2" style="height: 50px;">
						<button class="btn_account">
							<img src="../assets/admin/images/xie.jpg" alt="" width="100" height="30"> &nbsp; Admin 
							<i class="fas fa-angle-down page_down2" style="font-size: 10px;"></i>
							<i class="fas fa-angle-up page_up2" style="font-size: 10px;"></i>
							<div class="sub_menu" id="submenu_account">
								<ul>
									<li>
										<a href="#">Profile 
											<i class="fas fa-user"></i>
										</a>
									</li>
									<li>
										<a href="#">Reset password
											<i class="fas fa-key"></i>
										</a>
									</li>
									<li>
										<a href="#">Setting
											<i class="fas fa-cog"></i>
										</a>
									</li>
									<li>
										<a href="index.php?controller=login&action=logout">Logout
											<i class="fas fa-sign-out-alt"></i>
										</a>
									</li>
								</ul>
							</div>
						</button>
					</div>
					<div class="notification mt-2">
						<button class="btn_notify">
							<i class="fas fa-bell"></i> &nbsp; 
							<i class="fas fa-angle-down page_down2" style="font-size: 10px;"></i>
							<i class="fas fa-angle-up page_up2" style="font-size: 10px;"></i>
							<div class="menu_notify" id="menu_notify">
								<ul>
									<li>
										<a href="#">New Messages 
											<i class="fas fa-sms"></i>
										</a>
									</li>
									<li>
										<a href="#">New Followers
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li>
										<a href="#">Messages Sent
											<i class="fas fa-envelope"></i>
										</a>
									</li>
								</ul>
							</div>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row d-flex justify-content-between">
		<div class="menu col-2 p-0 bg-dark">
			<div class="row mt-3">
				<div class="col-4">
					<i class="fas fa-user-tie text-light" style="padding: 10px; font-size: 50px;"></i>	</div>
				<div class="col-8">
					<div class="row">
						<span class="text-warning" style="font-size: 20px;">&nbsp; Your name </span>
					</div>
					<div class="row text-success ml-1">
						<span class="border border-success rounded-circle bg-success mt-2" style="width: 10px; height: 10px;"></span>
						&nbsp;
						<span>Online</span>
					</div>
				</div>
			</div>
			<span class="text-uppercase p-2" style="color: #406457; background-color: #1A2226; display: block;">layout admin</span>
			<ul>
				<li><a href="index.php?controller=categories"><i class="fa fa-th"></i> &nbsp; Danh mục sản phẩm</a></li>
				<li><a href="index.php?controller=products"><i class="fas fa-toolbox"></i> &nbsp; Sản phẩm</a></li>
				<li><a href="index.php?controller=users"><i class="fas fa-users"></i> &nbsp; Quản lý users</a></li>
				<li><a href="index.php?controller=orders"><i class="fas fa-luggage-cart"></i> &nbsp; Đơn hàng</a></li>
				<li><a href="index.php?controller=news"><i class="fas fa-newspaper"></i> &nbsp; Tin tức</a></li>
			</ul>
		</div>
		<div class="content col-10 mx-0 p-2">
			<div class="row m-0 mb-5" style="min-height: 100vh; width: 100%; display: block;">
				<section class="m-2">
					<?php echo $this->view; ?>
				</section>
			</div>
			<div class="footer bg-light mx-0 p-2">
				<strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights reserved.
			</div>
		</div>
	</div>
</div>
</body>
<script src="../assets/admin/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../assets/admin/js/script_admin.js"></script>
</html>