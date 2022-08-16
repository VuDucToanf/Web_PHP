<?php
    $this->fileLayout = "LayoutTrangChu.php";
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-12 border-bot">
            <div class="row">
                <div id="tittle_dm"><a href="danhmuc.html" class="text-uppercase p-2 px-4">Sản phẩm nổi bật</a></div>
                <div class="arrow-right"></div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col p-0">
            <div class="row link-sp d-flex justify-content-between">
                <?php $hotProduct = $this->modelHotProduct(); ?>
                <?php foreach($hotProduct as $rows): ?>
                <div class="col-sm-6 col-md-3 mt-sm-3 mt-md-0" style="overflow: hidden; height: 400px;">
                    <!-- discount -->
                    <div class="discount"><?php echo $rows->discount ?>%</div>
                    <!-- end discount -->
                    <a href="products/detail/<?php echo $rows->id; ?>/<?php echo $rows->name; ?>">
                        <img    class="sp" src="http://dev.doan.vn/assets/upload/products/<?php echo $rows->photo; ?>"
                                title="<?php echo $rows->name; ?>"
                                alt="<?php echo $rows->name; ?>"
                                height="200">
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
                    <a href="products/detail/<?php echo $rows->id; ?>/<?php echo $rows->name; ?>" class="text-uppercase name_sp"><?php echo $rows->name; ?></a>
                    <br>
                    <span class="old_price ml-sm-0 ml-md-5"><?php echo number_format($rows->price); ?></span>
                    <span class="new_price font-weight-bold"> <?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?><sup>đ</sup></span>
                    <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="btn btn-light rounded-pill border border-dark btn_addToCart">Add to cart</a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php
        $categoriesP = $this->modelCategoriesParent();
    ?>
    <?php foreach($categoriesP as $itemCategoriesP): ?>
    <div class="row mt-5">
        <div class="col-12 border-bot">
            <div class="row">
                <div class="row col-sm-6 col-md-4">
                    <div id="tittle_dm"><a href="index.php?controller=products&action=category&id=<?php echo $itemCategoriesP->id; ?>" class="text-uppercase p-2 px-3"><?php echo $itemCategoriesP->name; ?></a></div>
                    <div class="arrow-right"></div>
                </div>
                <div class="col-sm-6 col-md-8" style="text-align: right;"><a href="index.php?controller=products&action=category&id=<?php echo $itemCategoriesP->id; ?>" style="color: red; line-height: 40px; text-decoration: none;">Xem tất cả &rsaquo;&rsaquo;</a></div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-sm-0 col-md-2 p-0">
            <ul class="danhmuc_sp" style="height: 400px;">
                <?php
                    $categoriesSub = $this->modelCategoriesSub($itemCategoriesP->id);
                ?>
                <?php foreach($categoriesSub as $rowsSub): ?>
                <li><a href="index.php?controller=products&action=category&id=<?php echo $rowsSub->id; ?>" class="text-uppercase pl-3"><?php echo $rowsSub->name; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="col-sm-12 col-md-10">
            <div class="row link-sp">
                <?php
                    $products = $this->modelProducts($itemCategoriesP->id);
                ?>
                <?php foreach($products as $rows): ?>
                <div class="col-sm-6 col-md-3 mt-sm-2 mt-md-0" style="overflow: hidden; height: 400px;">
                    <!-- discount -->
                    <div class="discount"><?php echo $rows->discount ?>%</div>
                    <!-- end discount -->
                    <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img class="sp" src="http://dev.doan.vn/assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" height="200"></a>
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
                    <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" class="text-uppercase name_sp"><?php echo $rows->name; ?></a>
                    <br>
                    <span class="old_price ml-md-0 ml-lg-5"><?php echo number_format($rows->price); ?></span>
                    <span class="new_price font-weight-bold"> <?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?><sup>đ</sup></span>
                    <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="btn btn-light rounded-pill border border-dark btn_addToCart">Add to cart</a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <!-- hot news -->
    <div class="row mt-5">
            <div class="col-12">
                <div class="row border border-info border-top-0 border-right-0 border-left-0">
                    <div class="col-3"><h4 style="margin: 8.5px 0;" class="text-uppercase p-2 px-3 text-success font-weight-bold">Tin tức</h4></div>
                    <div class="col-9 text-right">
                        <img class="btn-change" id="prev" src="http://dev.doan.vn/assets/frontend/images/prev.png" alt="" width="30">
                        <img class="btn-change" id="next" src="http://dev.doan.vn/assets/frontend/images/next.png" alt="" width="30">
                    </div>
                </div>
                <div class="row mt-2">
                    <?php
                        $news = $this->modelHotNews();
                        $id = 0;
                    ?>
                    <?php foreach($news as $rows): ?>
                    <div class="col-sm-6 col-md-3 slideNews" idx="<?php echo $id; $id++;?>">
                        <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="image"> <img style="height: 200px;" src="http://dev.doan.vn/assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>" class="img-responsive"> </a>
                        <h5><a class="text-info title_news" href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" style="text-decoration: none;"><?php echo $rows->name; ?></a></h5>
                        <span class="desc_news"><?php echo $rows->description; ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <!-- end hot news -->
</div>
