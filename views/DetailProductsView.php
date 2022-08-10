<?php
	//load file Layout.php vào đây
	$this->fileLayout = "LayoutTrangTrong.php";
 ?>
<div class="col-8 p-0">
    <div class="row p-2" style="border: 1px solid #ebebeb; background-color: #F7F7F7;">
        <a href="" style="color: black; text-decoration: none;">&ensp;<i class="fas fa-home"></i></a>
        &rsaquo; &ensp;
        <a href="#" class="text-uppercase" style="color: black;">
            <?php
                $category = $this->modelGetCategory($record->category_id);
        		echo isset($category->name) ? $category->name : "";
            ?>
        </a>
            &rsaquo; &ensp;
        <a href="#" class="text-uppercase" style="color: black;">
            <?php
                echo isset($record->name) ? $record->name : "";
            ?>
        </a>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div class="row">
                <div class="col-5">
                    <img src="http://dev.doan.vn/assets/upload/products/<?php echo $record->photo; ?>" width="300">
                </div>
                <div class="col-7">
                    <h3>
                        <?php
                        echo isset($record->name) ? $record->name : "";
                        ?>
                    </h3>
                    <p>Trạng thái: <span class=" font-weight-bold">Còn hàng</span></p>
                    <span class="new_price font-weight-bold"><?php echo number_format($record->price - $record->price * $record->discount/100); ?><sup>đ</sup></span>
                    <span class="old_price"><?php echo number_format($record->price); ?></span>
                    <hr>
                    <input type="button" value="-" inc="-1" field='targetField1'
                           class="qtyChange overflow-hidden relative bg-slate-200 border border-inherit px-2 cursor-pointer text-xl">
                    <input type="text"
                           class="qty text-center" style="width: 40px;"
                           step="1" minValue="1" maxValue="10" name="targetField1" value="1"
                           title="SL" size="4" placeholder="" inputmode="numeric">
                    <input type="button" value="+" inc="+1" field='targetField1'
                           class="qtyChange overflow-hidden relative bg-slate-200 border border-inherit px-2 cursor-pointer text-xl">
                    <i>(Chọn số lượng)</i>
                    <br>
                    <a href="index.php?controller=cart&action=create&id=<?php echo $id; ?>&quantity=1" class="btn btn-success mt-2 btn_addToCart">Thêm vào giỏ</a>
                    <div style="border:1px solid #dddddd; margin-top: 15px;">
                        <h4 style="padding-left: 10px;">Rating</h4>
                        <table style="width: 100%;">
                        <tr>
                            <td style="width: 80%; padding-left: 10px;"><img src="http://dev.doan.vn/assets/frontend/images/star.jpg"></td>
                            <td><span class="label label-primary"><?php echo $this->modelGetStar($record->id,1); ?> vote</span></td>
                        </tr>
                        <tr>
                            <td style="width: 80%; padding-left: 10px;"><img src="http://dev.doan.vn/assets/frontend/images/star.jpg"> <img src="http://dev.doan.vn/assets/frontend/images/star.jpg"></td>
                            <td><span class="label label-warning"><?php echo $this->modelGetStar($record->id,2); ?> vote</span></td>
                        </tr>
                        <tr>
                            <td style="width: 80%; padding-left: 10px;"><img src="http://dev.doan.vn/assets/frontend/images/star.jpg"> <img src="http://dev.doan.vn/assets/frontend/images/star.jpg"> <img src="http://dev.doan.vn/assets/frontend/images/star.jpg"></td>
                            <td><span class="label label-danger"><?php echo $this->modelGetStar($record->id,3); ?> vote</span></td>
                        </tr>
                        <tr>
                            <td style="width: 80%; padding-left: 10px;"><img src="http://dev.doan.vn/assets/frontend/images/star.jpg"> <img src="http://dev.doan.vn/assets/frontend/images/star.jpg"> <img src="http://dev.doan.vn/assets/frontend/images/star.jpg"> <img src="http://dev.doan.vn/assets/frontend/images/star.jpg"></td>
                            <td><span class="label label-info"><?php echo $this->modelGetStar($record->id,4); ?> vote</span></td>
                        </tr>
                        <tr>
                            <td style="width: 80%; padding-left: 10px;"><img src="http://dev.doan.vn/assets/frontend/images/star.jpg"> <img src="http://dev.doan.vn/assets/frontend/images/star.jpg"> <img src="http://dev.doan.vn/assets/frontend/images/star.jpg"> <img src="http://dev.doan.vn/assets/frontend/images/star.jpg"> <img src="http://dev.doan.vn/assets/frontend/images/star.jpg"></td>
                            <td><span class="label label-success"><?php echo $this->modelGetStar($record->id,5); ?> vote</span></td>
                        </tr>
                        </table>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- comments -->
    <div class="row mt-3">
        <div class="col-12">
            <h3>Bình luận sản phẩm</h3>
            <hr>
        </div>
        <div class="col-12">
            <form method="post" enctype="multipart/form-data" action="index.php?controller=products&action=comment&id=<?php echo $_GET['id']; ?>">
            <!-- <form method="post" enctype="multipart/form-data" action=""> -->
                <div class="row d-flex justify-content-between">
                    <div class="col-2">
                        <img src="http://dev.doan.vn/assets/frontend/images/customer.jpg" width="100" alt="">
                        <div><?php echo isset($_SESSION['customer_email']) ?  $_SESSION['customer_email'] : ""?></div>
                    </div>
                    <div class="col-10">
                        <textarea required placeholder="Nhập bình luận của bạn ở đây" name="description" style="width: 100%; padding: 4px;"></textarea>
                        <!-- <script type="text/javascript">CKEDITOR.replace('description');</script> -->
                        <input type="submit" value="Gửi" class="btn btn-primary mt-2">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 mt-5">
            <h5>Những ý kiến khác</h5>
            <hr>
            <?php foreach ($data as $rows): ?>
            <div class="row mt-2">
                <div class="col-1">
                    <img src="http://dev.doan.vn/assets/frontend/images/customer.jpg" width="40" alt="">
                </div>
                <div class="col-11">
                    <b><?php echo $rows->customer_name; ?>:</b>
                    <?php $id = $rows->id; ?>
                    <span id="description<?php echo $id; ?>"><?php echo $rows->description; ?></span>
                    <form id="formDescription<?php echo $id; ?>" method="post" action="index.php?controller=products&action=updateComment&id=<?php echo $_GET['id']; ?>&idComment=<?php echo $id; ?>" style="display: none;">
                        <textarea required placeholder="Nhập bình luận của bạn ở đây" name="description" style="width: 100%; padding: 4px;"><?php echo $rows->description; ?></textarea>
                        <!-- <script type="text/javascript">CKEDITOR.replace('description');</script> -->
                        <input type="submit" value="Cập nhật" class="btn btn-primary mt-2">
                    </form>
                    <br>
                    <div id="edit<?php echo $id; ?>">
                    <?php if($rows->customer_name == (isset($_SESSION['customer_email']) ? $_SESSION['customer_email'] : "")): ?>
                        <a class="btn text-secondary font-weight-bold" style="font-size: 14px; text-decoration: none;" onclick="editComment(<?php echo $id; ?>)">Edit</a>&nbsp;
                        <a class="btn text-secondary font-weight-bold" style="font-size: 14px; text-decoration: none;" href="index.php?controller=products&action=deleteComment&id=<?php echo $_GET['id']; ?>&idComment=<?php echo $id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
    <!-- /comments -->
    <script src="http://dev.doan.vn/assets/frontend/js/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $(".qtyChange").click(function(e) {
          e.preventDefault();
          $(".update_cart").removeClass('opacity-60');
          var fieldName = $(this).attr('field');
          var inc = parseInt($(this).attr('inc'));
          var target = $('input[name=' + fieldName + ']');
          var val = parseInt(target.val());
          var min = parseInt(target.attr('minValue')) || 0;
          var max = parseInt(target.attr('maxValue'));
          val = val + inc;
          if (val > max) val = max;
          if (val < min) val = min;
          target.val(val);
          console.log(val);
          var link = $('.btn_addToCart').attr('href');
          var quantity = link.split("&")[3].split('=')[1];
          console.log(quantity);
        })
      });
        function editComment(id){
            document.getElementById("description" + id).setAttribute('style', 'display: none');
            document.getElementById('edit' + id).setAttribute('style', 'display: none');
            document.getElementById('formDescription' + id).setAttribute('style', 'display: block');
        }
    </script>
</div>
