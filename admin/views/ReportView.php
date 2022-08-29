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
        <label for="" class="mt-3 bg-secondary px-4 text-white">Lọc dữ liệu theo thời gian</label>
        <form action="index.php" method="get" class="d-flex justify-content-start mb-3">
            <input type="text" name="controller" value="report" hidden>
            <input type="text" name="status" value="1" hidden>
            <input type="date" class="mr-2 px-2" id="date_from" name="date_from">
            <input type="date" class="mx-2 px-2" id="date_to" name="date_to">
            <input type="submit" class="mx-2 btn btn-info" value="Xác nhận">
        </form>
        <div class="my-3">
            <label for="">Tổng doanh thu theo bộ lọc: </label> <span class="font-weight-bold"><?php echo !empty($total[0]->total) ? number_format($total[0]->total) : 0; ?> đ</span>
        </div>
        <div class="panel-body bg-light border border-info rounded-bottom p-3">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Ngày thống kê</th>
                    <th>Doanh thu</th>
                    <th></th>
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
<script>
document.getElementById("date_from").defaultValue = '<?php echo !empty($_GET['date_from']) ? $_GET['date_from'] : null ?>';
document.getElementById("date_to").defaultValue = '<?php echo !empty($_GET['date_to']) ? $_GET['date_to'] : null ?>';
</script>
