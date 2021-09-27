<?php 
  //load file LayoutTrangChu.php
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>
<div class="col-8">
	<div class="content_form row d-flex justify-content-around">
		<div class="col-7 bg-light border rounded">
			<h2 class="text-center my-4 text-info">Đăng ký tài khoản</h2>
			<form method='post' action="index.php?controller=account&action=registerPost" class="mt-3 border-top pt-3">
                <div class="form-group">
                    <label>Họ và tên:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email:<b style="color: red;">*</b></label>
                    <input type="text" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Địa chỉ:</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <div class="form-group">
                    <label>Điện thoại:</label>
                    <input type="text" name="phone" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mật khẩu:<b style="color: red;">*</b></label>
                    <input type="password" name="password" class="form-control" required="">
                </div>
		    	<div class="d-flex justify-content-around mb-4">
                    <input type="submit" class="btn btn-primary" value="Đăng ký">
				</div>
			</form>
		</div>
        <div class="col-md-4 bg-light border rounded" style="max-height: 150px;">
              <div class="wrapper-form p-3">
                <p style="font-size: 14px;">Đăng nhập tài khoản nếu bạn đã có tài khoản. Đăng nhập tài khoản để theo dõi đơn đặt hàng, vận chuyển và đặt hàng được thuận lợi.</p>
                <a href="index.php?controller=account&action=login" class="btn btn-success">Đăng nhập</a> </div>
            </div>
	</div>
</div>