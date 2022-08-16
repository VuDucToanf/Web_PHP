<?php
//load file LayoutTrangChu.php
$this->fileLayout= "LayoutTrangTrong.php";
?>
<div class="col-8 mt-4">
    <div class="my-4">
        <h3>Thông tin cá nhân</h3>
        <form action="index.php?controller=payment&action=execute" method="post">
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Họ tên</span>
                </div>
                <input type="text" name="name" placeholder="Nhập họ tên của bạn" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
            </div>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Địa chỉ</span>
                </div>
                <input type="text" name="address" placeholder="Chi tiết địa chỉ nhận hàng" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
            </div>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                </div>
                <input type="email" name="email" placeholder="Email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Số điện thoại</span>
                </div>
                <input type="text" name="phone" placeholder="Email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
            </div>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Ảnh sản phẩm</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Giá bán lẻ</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                </tr>
                </thead>
                <?php foreach($_SESSION["cart"] as $product): ?>
                    <tbody>
                    <tr>
                        <td><img src="http://dev.doan.vn/assets/upload/products/<?php echo $product["photo"]; ?>" class="img-responsive" style="width: 80px;"/></td>
                        <td>
                            <a class="text-dark" style="font-size: 14px;" href="index.php?controller=products&action=detail&id=<?php echo $product["id"]; ?>"><?php echo $product["name"]; ?></a>
                        </td>
                        <td> <?php echo number_format($product["price"]-($product["price"]*$product["discount"])/100); ?>₫ </td>
                        <td><input type="number" readonly id="qty" min="1" class="input-control" value="<?php echo $product["number"]; ?>" name="product_<?php echo $product["id"]; ?>" required="Không thể để trống"></td>
                        <td><p><b><?php echo number_format(($product["price"]-($product["price"]*$product["discount"])/100)*$product["number"]); ?>₫</b></p></td>
                    </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>
            <button class="btn btn-info">Xác nhận đơn hàng</button>
        </form>
    </div>

</div>
