<div class="container mt-2">
    <div class="row px-0 d-flex justify-content-around m-0" style="width: 100%">
        <div class="col-sm-2 col-md-2 col-lg-1 p-0 mt-lg-1">
            <a href="home" style="display: block;"><i class="fas fa-tshirt" id="logo"></i>
                <p id="logo1" class="text-info">Thời trang</p>
            </a>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-6 p-0 mt-md-3 mt-lg-3">
            <div>
                <form>
                    <input class="p-1 border border-danger input-control" type="text" name="search" id="key" placeholder="Từ khóa tìm kiếm..." autocomplete="off">
                </form>
            </div>
            <button type="submit" id="btnSearch" class="border border-danger py-1">
                <i class="fas fa-search"></i>
            </button>
            <div class="smart-search">
                <ul>
                </ul>
            </div>
        </div>
        <?php if(isset($_SESSION['customer_email'])): ?>
        <div class="col-sm-4 col-md-4 col-lg-4 mt-md-3 mt-lg-2" style="height: 50px">
            <div>
                <div class="user mt-2" style="height: 50px;">
                    <button class="btn_account">
                        <img src="assets/admin/images/xie.jpg" alt="" width="100" height="30"> &nbsp;
                        <?php echo $_SESSION['customer_email']; ?>
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
                                    <a href="index.php?controller=account&action=logout">Logout
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
                        <i class="fas fa-angle-down page_down" style="font-size: 10px;"></i>
                        <i class="fas fa-angle-up page_up" style="font-size: 10px;"></i>
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
        <?php else: ?>
            <div class="col-sm-4 col-md-4 col-lg-4 mt-md-3 mt-lg-3 d-flex justify-content-around">
                <a href="index.php?controller=account&action=login" class="text-dark" style="display: block; height: 35px; text-decoration: none">
                    Đăng nhập
                </a>
                <a href="index.php?controller=account&action=register" class="text-dark" style="display: block; height: 35px; text-decoration: none">
                    Đăng ký
                </a>
            </div>
        <?php endif; ?>
        <?php
            $ProductNumberInCart = 0;
            if(isset($_SESSION['cart']) != NULL)
            foreach($_SESSION['cart'] as $product)
                $ProductNumberInCart++;
        ?>
        <div class="col-sm-2 col-md-2 col-lg-1 mt-md-3 mt-lg-1">
            <div class="wrapper-mini-cart pb-2">
                <span id="cart">
                    <i class="fa fa-shopping-cart"></i>
                </span>
                <br>
                <a href="cart" style="font-size: 10px;">
                    <span class="mini-cart-count"> <?php echo $ProductNumberInCart; ?> </span> sản phẩm
                </a>
                <div class="content-mini-cart border border-info text-center">
                    <div class="has-items">
                        <ul class="list-unstyled mt-1">
                            <?php if(isset($_SESSION['cart'])): ?>
                                <?php foreach($_SESSION['cart'] as $product): ?>
                                <li class="clearfix d-flex justify-content-between mt-2" id="item-1853038">
                                    <div class="image ml-1">
                                        <a href="index.php?controller=products&action=detail&id=<?php echo $product["id"]; ?>">
                                            <img style="width: 100px" alt="<?php echo $product["name"]; ?>" src="http://dev.doan.vn/assets/upload/products/<?php echo $product["photo"]; ?>" title="<?php echo $product["name"]; ?>" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="info text-left ml-2">
                                        <h3>
                                            <a class="text-decoration-none text-info" style="font-size: 12px;" href="index.php?controller=products&action=detail&id=<?php echo $product["id"]; ?>"><?php echo $product["name"]; ?></a>
                                        </h3>
                                        <p style="font-size: 12px;">
                                            <?php echo $product["number"]; ?> x <?php echo number_format($product["price"]); ?>
                                            ₫
                                        </p>
                                    </div>
                                    <div>
                                        <a href="index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>">
                                            <i class="fa fa-times text-danger mr-1"></i>
                                        </a>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                        <hr>
                        <?php if(isset($_SESSION['cart'])): ?>
                        <a href="index.php?controller=cart&action=checkout" class="btn btn-success mb-2">
                            Thanh toán
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="menu">
    <div class="container">
        <div class="row" id="banner">
            <div class="col-3 py-1 active">
                <div id="cha" class="text-uppercase fw-bolder">
                    <span class="title">
                        <i class="fas fa-bars"></i>
                        Danh mục sản phẩm
                    </span>
                    <ul id="danhmuc">
                        <?php
                            $categoriesP = $this->modelCategoriesParentHome();
                        ?>
                        <?php foreach($categoriesP as $itemCategoriesP): ?>
                        <li class="menu1"><a href="products/category/<?php echo $itemCategoriesP->id; ?>/<?php echo $itemCategoriesP->name; ?>" class="title text-uppercase fw-bolder p-3"><?php echo $itemCategoriesP->name; ?></a>
                            <ul class="menu1_2">
                                <?php
                                    $categoriesSub = $this->modelCategoriesSub($itemCategoriesP->id);
                                ?>
                                <?php foreach($categoriesSub as $rowsSub): ?>
                                <li><a href="products/category/<?php echo $rowsSub->id; ?>/<?php echo $rowsSub->name; ?>" class="text-uppercase pl-3"><?php echo $rowsSub->name; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-1 py-1">
                <a href="news"><span class="title text-uppercase fw-bolder">Tin tức</span></a>
            </div>
            <div class="col-1 py-1 px-1 text-center">
                <a href="cart"><span class="title text-uppercase fw-bolder">Giỏ hàng</span></a>
            </div>
            <div class="col-1 py-1">
                <a href="contact"><span class="title text-uppercase fw-bolder">Liên hệ</span></a>
            </div>
        </div>
        <div class="row" id="img_banner">
            <img src="http://dev.doan.vn/assets/frontend/images/banner/banner.jpg" height="312" width="850">
        </div>
    </div>
</div>
