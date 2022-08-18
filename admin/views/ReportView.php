<?php
//load file Layout.php vao day
$this->fileLayout = "Layout.php";
?>
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading p-2 bg-info border border-info rounded-top text-light">
            Thống kê đơn hàng
            <?php
                if(!empty($status)) {
                    echo 'thành công';
                } else {
                    echo 'chưa giao';
                }
            ?>
        </div>
        <div class="panel-body bg-light border border-info rounded-bottom p-3">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Ngày thống kê</th>
                    <th>Doanh thu</th>
                </tr>
                <?php foreach ($data as $rows): ?>
                    <tr>
                        <td><?php echo date("d/m/Y", strtotime($rows->date)); ?></td>
                        <td><?php echo number_format($rows->price); ?> VNĐ</td>
                        <td style="text-align:center;">
                            <a href="index.php?controller=report&action=detail&date=<?php echo $rows->date; ?>&status=<?php echo $rows->status; ?>" class="btn btn-success badge">Chi tiết</a>
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
                    <li class="page-item"><a href="index.php?controller=report&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>
