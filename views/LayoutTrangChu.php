<!DOCTYPE html>
<html lang="en">
<head>
    <!-- đặt lại đường dẫn root -->
    <base href="http://localhost/test/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thời trang nam nữ</title>
    <!-- fontawesome -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<!-- bootstrap 4 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<!-- style css -->
	<link rel="stylesheet" type="text/css" href="http://dev.doan.vn/assets/frontend/css/style.css">
</head>
<body>
<?php
    include "views/HeaderView.php";
?>
    <div id="them"></div>
    <?php echo $this->view; ?>
    <div class="container-fluid footer mt-5">
        <div class="container">
            <div class="row pt-3">
                <?php
                    $categoriesP = $this->modelCategoriesParentHome();
                ?>
                <?php foreach($categoriesP as $itemCategoriesP): ?>
                <div class="col-2">
                        <a href="index.php?controller=products&action=category&id=<?php echo $itemCategoriesP->id; ?>" class="text-uppercase"><h5><?php echo $itemCategoriesP->name; ?></h5></a>
                    <ul style="list-style-type: circle;">
                        <?php
                            $categoriesSub = $this->modelCategoriesSub($itemCategoriesP->id);
                        ?>
                        <?php foreach($categoriesSub as $rowsSub): ?>
                        <li><a href="index.php?controller=products&action=category&id=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?></a></li>
                        <?php endforeach; ?>
                    </ul>

                </div>
                <?php endforeach; ?>
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
