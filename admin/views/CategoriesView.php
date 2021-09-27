<?php 
    //load file Layout.php vao day
    $this->fileLayout = "Layout.php";
 ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=categories&action=create" class="btn btn-primary">Add category</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading p-2 bg-info border border-info rounded-top text-light">List User</div>
        <div class="panel-body bg-light border border-info rounded-bottom p-3">
            <table class="table table-bordered table-hover">
                <tr>
                    <th class="text-uppercase text-danger">Categories</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach ($data as $rows): ?>
                <tr>
                    <td class="font-weight-bold"><?php echo $rows->name; ?></td>
                    <td style="text-align:center;">
                        <a style="font-size: 14px; text-decoration: none;"  href="index.php?controller=categories&action=update&id=<?php echo $rows->id; ?>">Edit</a>&nbsp;
                        <a style="font-size: 14px; text-decoration: none;"  href="index.php?controller=categories&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
                <?php 
                	$categoriesSub = $this->modelCategoriesSub($rows->id)
                 ?>
                 <?php foreach($categoriesSub as $rowsSub): ?>
                 	<tr>
	                    <td style="padding-left: 20px;"><?php echo $rowsSub->name; ?></td>
	                    <td style="text-align:center;">
	                        <a style="font-size: 14px; text-decoration: none;"  href="index.php?controller=categories&action=update&id=<?php echo $rowsSub->id; ?>">Edit</a>&nbsp;
	                        <a style="font-size: 14px; text-decoration: none;"  href="index.php?controller=categories&action=delete&id=<?php echo $rowsSub->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
	                    </td>
	                </tr>
                 <?php endforeach; ?>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item"><a href="index.php?controller=categories&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>