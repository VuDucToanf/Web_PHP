<?php 
	//load file Layout.php vào đây
	$this->fileLayout = "LayoutTrangTrong.php";
 ?>
<div class="col-8">
	<div class="content_form row d-flex justify-content-around">
		<div class="col-7 bg-light border rounded">
			<h2 class="text-center my-4 text-info">Đăng nhập tài khoản</h2>
			<form method="post" action="index.php?controller=account&action=loginPost" class="p-3 border-top">
		    	<div class="form-group">
		      		<label for="email" class="font-weight-bold">Email : <b style="color: red;">*</b></label>
		      		<input type="email" class="form-control" name="email" required="">
		    	</div>
		    	<div class="form-group">
		      		<label for="pwd" class="font-weight-bold">Password : <b style="color: red;">*</b></label>
		     	 	<input type="password" class="form-control" name="password" required="">
		    	</div>
		    	<div class="checkbox d-flex justify-content-between">
					<label><input type="checkbox"> Remember me</label>
					<label><a href="#">Forgot password?</a></label>
				</div>
				<div class="d-flex justify-content-around mb-4">
					<!-- <button type="submit" class="btn btn-success">Login</button> -->
                    <input type="submit" class="btn btn-success" value="Đăng nhập">
				</div>
				<div class="form-group d-flex justify-content-around">
					<label><p>Do not you have an account? <a href="index.php?controller=account&action=register" style="color: black; text-decoration: underline;">Sign up</a></p></label>
				</div>
			</form>
		</div>
	</div>
</div>