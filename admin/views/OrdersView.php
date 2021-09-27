<?php 
    //load file Layout.php vao day
    $this->fileLayout = "Layout.php";
 ?>
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading p-2 bg-info border border-info rounded-top text-light">List Orders</div>
        <div class="panel-body bg-light border border-info rounded-bottom p-3">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Họ và tên</th>
                    <th>Địa chỉ</th>
                    <th>Điện thoại</th>
                    <th>Ngày mua</th>
                    <th>Giá</th>
                    <th style="width:150px;">Trạng thái</th>
                    <th style="width:200px;"></th>
                </tr>
                <?php foreach ($data as $rows): ?>
                <?php 
                	$customer = $this->modelGetCustomer($rows->customer_id);
                 ?>
                <tr>
                    <td><?php echo isset($customer->name)?$customer->name:""; ?></td>
                    <td><?php echo isset($customer->address)?$customer->address:""; ?></td>
                    <td><?php echo isset($customer->phone)?$customer->phone:""; ?></td>
                    <td><?php echo date("d/m/Y", strtotime($rows->date)); ?></td>
                    <td><?php echo number_format($rows->price); ?> VNĐ</td>
                    <td>
                    	<?php if($rows->status == 1): ?>
                    		<div class="">Đã giao hàng</div>
                    	<?php else: ?>
                    		<div class="">Chưa giao hàng</div>
                    	<?php endif; ?>
                    </td>
                    <td style="text-align:center;">
                    	<?php if($rows->status == 0): ?>
                        	<a href="index.php?controller=orders&action=delivery&id=<?php echo $rows->id; ?>" class="btn btn-info badge">Giao hàng</a>
                    	&nbsp; &nbsp;
                    	<?php endif; ?>
                        <a href="index.php?controller=orders&action=detail&id=<?php echo $rows->id; ?>" class="btn btn-success badge">Chi tiết</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item"><a href="index.php?controller=orders&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>