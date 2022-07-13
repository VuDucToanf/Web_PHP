<?php
	//load file Layout.php vào đây
	$this->fileLayout = "LayoutTrangTrong.php";
 ?>
<div class="col-8 p-0">
    <div class="row" style="border: 1px solid #ebebeb; background-color: #F7F7F7;">
        <div class="col-5 mt-2">
            <a href="index.php" style="color: black;">&ensp;
                <i class="fas fa-home"></i>
            </a> &rsaquo; &ensp;
            <a href="#" class="text-uppercase" style="color: black;">
                <?php
                    $category = $this->modelGetCategory($id);
                    echo isset($category->name) ? $category->name : "";
                ?>
            </a>
        </div>
        <div class="col-7 text-right p-0">
            <div class="col-lg-3 p-0" style="float: right;">
                <?php
                    $order = isset($_GET["order"]) ? $_GET["order"] : "";
                 ?>
                <select class="form-control" onchange="location.href = 'index.php?controller=products&action=category&id=<?php echo $id; ?>&order='+this.value;">
                    <option value="0">Sắp xếp</option>
                    <option <?php if($order == "priceAsc"): ?> selected <?php endif; ?> value="priceAsc">Giá tăng dần</option>
                    <option <?php if($order == "priceDesc"): ?> selected <?php endif; ?> value="priceDesc">Giá giảm dần</option>
                    <option <?php if($order == "nameAsc"): ?> selected <?php endif; ?> value="nameAsc">Sắp xếp A-Z</option>
                    <option <?php if($order == "nameDesc"): ?> selected <?php endif; ?> value="nameDesc">Sắp xếp Z-A</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12">
            <div class="row link-sp d-flex justify-content-between">
                <?php foreach($data as $rows): ?>
                <!-- box product -->
                <div class="col-3 mt-4" style="overflow: hidden;">
                    <!-- discount -->
                    <div class="discount"><?php echo $rows->discount ?>%</div>
                    <!-- end discount -->
                    <a href="#">
                        <img class="sp" src="http://dev.doan.vn/assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" height="200">
                    </a>
                    <p class="price-box">
                        <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1">
                            <img src="http://dev.doan.vn/assets/frontend/images/star.jpg">
                        </a>
                        <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2">
                            <img src="http://dev.doan.vn/assets/frontend/images/star.jpg">
                        </a>
                        <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3">
                            <img src="http://dev.doan.vn/assets/frontend/images/star.jpg">
                        </a>
                        <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4">
                            <img src="http://dev.doan.vn/assets/frontend/images/star.jpg">
                        </a>
                        <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5">
                            <img src="http://dev.doan.vn/assets/frontend/images/star.jpg">
                        </a>
                    </p>
                    <hr>
                    <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" class="text-uppercase"><?php echo $rows->name; ?></a>
                    <span class="old_price ml-5"><?php echo number_format($rows->price); ?></span>
                    <span class="new_price font-weight-bold"> <?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?><sup>đ</sup></span>
                    <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="btn btn-light rounded-pill border border-dark btn_addToCart">Add to cart</a>
                </div>
                <?php endforeach; ?>
                <!-- end box product -->

            </div>
            <!-- paging -->
            <div class="row mt-5">
                <style type="text/css">
                    .pagination{font-size: 13px;}
                    .pagination li a{color: black; display: block; background-color: #ebebeb;}
                </style>
                <ul class="pagination">
                    <li class="page-item"><span class="page-link">Trang</span></li>
                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                    <li class="page-item"><a href="index.php?controller=users&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                    <?php endfor; ?>
                </ul>
            </div>
            <!-- end paging -->
        </div>
    </div>
</div>
