<!DOCTYPE html>
<html lang="en">
<head>
    <!-- đặt lại đường dẫn root -->
    <base href="http://dev.doan.vn">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh mục</title>
    <!-- fontawesome -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<!-- bootstrap 4 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<!-- style css -->
	<link rel="stylesheet" type="text/css" href="assets/frontend/css/style_danhmuc.css">
    <script type="text/javascript" src="assets/admin/ckeditor/ckeditor.js"></script>
</head>
<body>
<?php
    include "views/HeaderView.php";
?>
    <!-- <div class="container-fluid menu">
        <div class="container p-0" id="menu1">
            <ul class="d-flex justify-content-start m-0">
                <li class="cha">
                    <a href="danhmuc.html" class="text-uppercase font-weight-bold text-light actived">
                        <i class="fas fa-bars"></i>
                        danh mục sản phẩm
                    </a>
                    <ul class="con">
                        <li class="menu1_1">
                            <a href="danhmuc.html" class="title text-uppercase fw-bolder p-3">Thời trang nữ</a>
                            <ul class="menu1_2">
                                <li><a href="#">&#8226; Đầm váy nữ đẹp</a></li>
                                <li><a href="#">&#8226; Quần đùi jean nữ ngắn</a></li>
                                <li><a href="#">&#8226; Bộ đồ nữ mặc nhà</a></li>
                                <li><a href="#">&#8226; Áo sơ mi nữ đẹp</a></li>
                                <li><a href="#">&#8226; Quần jean nữ đẹp</a></li>
                                <li><a href="#">&#8226; Áo khoác nữ đẹp</a></li>
                                <li><a href="#">&#8226; Áo thun nữ đẹp</a></li>
                                <li><a href="#">&#8226; Quần thể thao nữ</a></li>
                                <li><a href="#">&#8226; Quần áo yếm jean nữ đẹp</a></li>
                                <li><a href="#">&#8226; Áo dài cách tân đẹp</a></li>
                            </ul>
                        </li>
                        <li class="menu2_1">
                            <a href="danhmuc.html" class="title text-uppercase fw-bolder p-3">Thời trang nam</a>
                            <ul class="menu2_2">
                                <li><a href="#">&#8226; Áo khoác nam đẹp</a></li>
                                <li><a href="#">&#8226; Áo sơ mi nam đẹp</a></li>
                                <li><a href="#">&#8226; Áo thun nam đẹp</a></li>
                                <li><a href="#">&#8226; Quần jean nam đẹp</a></li>
                                <li><a href="#">&#8226; Quần đùi short jean nam</a></li>
                                <li><a href="#">&#8226; Bộ quần áo nam - Đồ bộ nam</a></li>
                            </ul>
                        </li>
                        <li class="menu3_1">
                            <a href="danhmuc.html" class="title text-uppercase fw-bolder p-3">Quần áo cặp đôi</a>
                            <ul class="menu3_2">
                                <li><a href="#">&#8226; Áo khoác cặp đôi nam nữ</a></li>
                                <li><a href="#">&#8226; Áo thun cặp đôi đẹp</a></li>
                                <li><a href="#">&#8226; Áo sơ mi cặp đôi đẹp</a></li>
                            </ul>
                        </li>
                        <li class="menu4_1">
                            <a href="danhmuc.html" class="title text-uppercase fw-bolder p-3">Giày nữ đẹp</a>
                            <ul class="menu4_2">
                                <li><a href="#">&#8226; Giày thể thao nữ đẹp</a></li>
                                <li><a href="#">&#8226; Giày cao gót nữ ngắn</a></li>
                                <li><a href="#">&#8226; Giày dép sandal nữ</a></li>
                            </ul>
                        </li>
                        <li class="menu5"><a href="danhmuc.html" class="title text-uppercase fw-bolder p-3">Túi xách nữ thời trang</a></li>
                        <li class="menu6"><a href="danhmuc.html" class="title text-uppercase fw-bolder p-3">Kính mắt thời trang nam nữ</a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="title text-uppercase fw-bolder">Tin tức</span></a></li>
                <li><a href="#"><span class="title text-uppercase fw-bolder">Khuyến mãi</span></a></li>
                <li><a href="#"><span class="title text-uppercase fw-bolder">Liên hệ</span></a></li>
            </ul>
        </div>
    </div> -->
    <div class="container">
        <div class="row mt-5 d-flex justify-content-between">
            <div class="col-3 p-0">
                <div class="row border border-dark rounded">
                    <!-- end support -->
                    <div class="col-12 bg-info text-light">
                        <h3>Hỗ trợ trực tuyến</h3>
                    </div>
                    <div class="col-12 block-content text-center">
                        <div class="sp_1">
                            <p class="text-secondary"><i class="fas fa-phone-volume text-success pt-1" style="font-size: 25px;"></i> Tư vấn bán hàng 1</p>
                            <p>Mrs. Dung: (04) 3786 8904</p>
                        </div>
                        <div class="sp_1">
                            <p class="text-secondary"><i class="fas fa-phone-volume text-success pt-1" style="font-size: 25px;"></i> Tư vấn bán hàng 2</p>
                            <p>Mr. Tuấn: (04) 3786 8904</p>
                        </div>
                        <div class="sp_1">
                            <p class="text-secondary"><i class="fas fa-phone-volume text-success pt-1" style="font-size: 25px;"></i> Email liên hệ</p>
                            <p>support@mail.com</p>
                        </div>
                    </div>
                    <!-- end support online -->
                </div>
                <div class="row mt-3">
                    <!-- box search -->
                    <div class="col-12 p-0">
                        <div class="bg-success p-2 border border-info rounded-top text-light"> Tìm theo mức giá </div>
                        <div class="bg-light border border-info rounded-bottom p-3">
                            <ul class="list-group" style="border:0px;">
                            <li class="list-group-item" style="border:0px;">Giá từ &nbsp;&nbsp;
                                <input type="number" min="0" value="0" id="fromPrice" class="form-control" />
                            </li>
                            <li class="list-group-item" style="border:0px;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="number" min="0" value="0" id="toPrice" class="form-control"/>
                            </li>
                            <li class="list-group-item" style="border:0px; text-align:center">
                                <input type="button" class="btn btn-warning" value="Tìm mức giá" onclick="location.href = 'index.php?controller=search&action=price&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
                            </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end box search -->
                </div>
                <div class="row mt-3">
                    <!-- box search -->
                    <div class="col-12 p-0">
                        <div class="bg-success p-2 border border-info rounded-top text-light"> Tìm theo mức giá </div>
                        <div class="bg-light border border-info rounded-bottom p-3">
                            <ul class="list-group" style="border:0px;">
                            <li class="list-group-item" style="border:0px;">
                                <input type="checkbox" id="gia1" onclick="location.href='index.php?controller=search&action=price&fromPrice=0&toPrice=100000';"> <label for="gia1"> Dưới 100 nghìn</label>
                            </li>
                            <li class="list-group-item" style="border:0px;">
                                <input type="checkbox" id="gia2" onclick="location.href='index.php?controller=search&action=price&fromPrice=100000&toPrice=200000';"> <label for="gia2">Từ 100 nghìn đến 200 nghìn</label>
                            </li>
                            <li class="list-group-item" style="border:0px;">
                                <input type="checkbox" id="gia3" onclick="location.href='index.php?controller=search&action=price&fromPrice=200000&toPrice=400000';"> <label for="gia3">Từ 200 nghìn đến 400 nghìn</label>
                            </li>
                            <li class="list-group-item" style="border:0px;">
                                <input type="checkbox" id="gia4" onclick="location.href='index.php?controller=search&action=price&fromPrice=400000&toPrice=1000000';"> <label for="gia4">Từ 400 nghìn đến 1 triệu</label>
                            </li>
                            <li class="list-group-item" style="border:0px; text-align:center">
                                <input type="button" class="btn btn-warning" value="Tìm mức giá" onclick="location.href = 'index.php?controller=search&action=price&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
                            </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end box search -->
                </div>
            </div>
            <?php echo $this->view; ?>
        </div>
    </div>
    <div class="container-fluid footer mt-5">
        <div class="container">
            <div class="row pt-3">
                <div class="col-3">
                    <a href="#" class="text-uppercase"><h5>Thời trang nữ</h5></a>
                    <ul>
                        <li><a href="#">&#8226; Đầm váy nữ đẹp</a></li>
                        <li><a href="#">&#8226; Quần đùi jean nữ ngắn</a></li>
                        <li><a href="#">&#8226; Bộ đồ nữ mặc nhà</a></li>
                        <li><a href="#">&#8226; Áo sơ mi nữ đẹp</a></li>
                        <li><a href="#">&#8226; Quần jean nữ đẹp</a></li>
                        <li><a href="#">&#8226; Áo khoác nữ đẹp</a></li>
                        <li><a href="#">&#8226; Áo thun nữ đẹp</a></li>
                        <li><a href="#">&#8226; Quần thể thao nữ</a></li>
                        <li><a href="#">&#8226; Quần áo yếm jean nữ đẹp</a></li>
                        <li><a href="#">&#8226; Áo dài cách tân đẹp</a></li>
                    </ul>
                </div>
                <div class="col-2">
                    <a href="#" class="text-uppercase"><h5>Thời trang nam</h5></a>
                    <ul>
                        <li><a href="#">&#8226; Áo khoác nam đẹp</a></li>
                        <li><a href="#">&#8226; Áo sơ mi nam đẹp</a></li>
                        <li><a href="#">&#8226; Áo thun nam đẹp</a></li>
                        <li><a href="#">&#8226; Quần jean nam đẹp</a></li>
                        <li><a href="#">&#8226; Quần đùi short jean nam</a></li>
                        <li><a href="#">&#8226; Bộ quần áo nam - Đồ bộ nam</a></li>
                    </ul>
                </div>
                <div class="col-2">
                    <a href="#" class="text-uppercase"><h5>Giày nữ đẹp</h5></a>
                    <ul>
                        <li><a href="#">&#8226; Giày thể thao nữ đẹp</a></li>
                        <li><a href="#">&#8226; Giày cao gót nữ ngắn</a></li>
                        <li><a href="#">&#8226; Giày dép sandal nữ</a></li>
                    </ul>
                </div>
                <div class="col-2">
                    <a href="#" class="text-uppercase"><h5>Quần áo cặp đôi</h5></a>
                    <ul>
                        <li><a href="#">&#8226; Áo khoác cặp đôi nam nữ</a></li>
                        <li><a href="#">&#8226; Áo thun cặp đôi đẹp</a></li>
                        <li><a href="#">&#8226; Áo sơ mi cặp đôi đẹp</a></li>
                    </ul>
                </div>
                <div class="col-3">
                    <a href="#" class="text-uppercase"><h5>Túi xách nữ thời trang</h5></a>
                    <a href="#" class="text-uppercase"><h5>Kính mát thời trang nam nữ</h5></a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-4" style="border-right: 1px solid black">
                    <h4>Shop Thời trang - Ngày nay</h4>
                    <p><u>ĐC</u>:9/1A Đăng Văn Bi, Phường Trường Thọ, Quận Thủ Đức, TP.HCM</p>
                    <p><u>Mobile</u>:012.6746.1772 - 090.600.647</p>
                    <p class="text-info"><b>Email: thoitrangngaynay@gmail.com</b></p>
                    <p class="text-primary"><b>Zalo: 01267461772</b></p>
                    <p><b>Thời gian làm việc:</b></p>
                    <p>Thứ 2 - Chủ nhật: <br>
                        Sáng: 08h - 12h <br>
                        Chiều: 13h - 23h</p>
                </div>
                <div class="col-3" style="border-right: 1px solid black">
                    <h4>HỖ TRỢ KHÁCH HÀNG</h4>
                    <p><a href="">Hướng dẫn mua hàng</a></p>
                    <p><a href="">Thời trang quần áo giá sỉ rẻ</a></p>
                    <p><a href="">Phương thức thanh toán</a></p>
                    <p><a href="">Cách đo size sản phẩm</a></p>
                    <p><a href="">Phí giao hàng</a></p>
                </div>
                <div class="col-3" style="border-right: 1px solid black">
                    <h4>DANH MỤC</h4>
                    <p><a href="">Trang chủ</a></p>
                    <p><a href="">Tin tức</a></p>
                    <p><a href="">Khuyến mãi</a></p>
                    <p><a href="">Liên hệ</a></p>
                </div>
            </div>
        </div>
    </div>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/613c98dbd326717cb680eb8f/1ffaba75c';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
<script src="http://dev.doan.vn/assets/frontend/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://dev.doan.vn/assets/frontend/js/script.js"></script>
</html>
