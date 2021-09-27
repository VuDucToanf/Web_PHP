<?php 
	//load file LayoutTrangChu.php
	$this->fileLayout= "LayoutTrangTrong.php";
 ?>
 <div class="col-8 mt-4">
    <form action="index.php?controller=cart&action=update" method="post">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Ảnh sản phẩm</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá bán lẻ</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Thành tiền</th>
                <th scope="col">Xóa</th>
            </tr>
        </thead>
        <?php foreach($_SESSION["cart"] as $product): ?>
        <tbody>                  
            <tr>
                <td><img src="assets/upload/products/<?php echo $product["photo"]; ?>" class="img-responsive" style="width: 80px;"/></td>
                <td>
                    <a class="text-dark" style="font-size: 14px;" href="index.php?controller=products&action=detail&id=<?php echo $product["id"]; ?>"><?php echo $product["name"]; ?></a>
                </td>
                <td> <?php echo number_format($product["price"]-($product["price"]*$product["discount"])/100); ?>₫ </td>
                <td><input type="number" id="qty" min="1" class="input-control" value="<?php echo $product["number"]; ?>" name="product_<?php echo $product["id"]; ?>" required="Không thể để trống"></td>
                <td><p><b><?php echo number_format(($product["price"]-($product["price"]*$product["discount"])/100)*$product["number"]); ?>₫</b></p></td>
                <td><a class="text-danger" href="index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>" data-id="2479395"><i class="fas fa-trash-alt"></i></a></td>
            </tr>
        </tbody>
        <?php endforeach; ?>
        <?php if($this->cartNumber() > 0): ?>
        <tfoot>
            <tr>
                <td colspan="3">
                    <a href="index.php?controller=cart&action=destroy" class="btn btn-danger">
                        Xóa toàn bộ
                    </a> 
                </td>
                <td colspan="3" class="text-right">
                    <input type="submit" class="btn btn-success" value="Cập nhật">
                    <a href="index.php" class="btn btn-secondary text-light">
                        Tiếp tục mua hàng
                    </a>
                </td>
            </tr>
        </tfoot>
        <?php endif; ?>
    </table>
    </form>
    <div class="text-right">
        <?php if($this->cartNumber() > 0): ?>
        <div class="text-uppercase font-weight-bold"> Tổng tiền thanh toán:
        <?php echo number_format($this->cartTotal()); ?>₫ <br>
        <a href="index.php?controller=cart&action=checkout" class="btn btn-info text-light">Thanh toán</a> </div>
        <?php endif; ?>
    </div>
</div>