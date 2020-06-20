<?php
	session_start();
	ob_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin</title>
<style>
#menuright{float:right; width:200px;}
#content{float:left;}
#myfooter{clear:both;}
</style>
</head>

<body>
<div id="container">

    <!-- Content -->
    <div id="content">
    <?php
            if(isset($_GET["mod"]))
            {
                include_once("Controller/".$_GET['mod']."/".$_GET['act'].'.php');
            }
            else
            {
                include_once("Controller/Flower/QuanLy.php");
            }
    ?>
    </div> <!-- /content -->
    
    <!-- Right column -->
    <div id="menuright" class="noprint">
        <div id="col-in">            
            <!-- Archive -->
            <h3><span>Danh mục quản lý</span></h3>
            <ul id="archive">
                <li><a href="admin.php?mod=Flower&act=QuanLy">Quản lý sản phẩm</a></li>
                <li><a href="admin.php?mod=user&act=QuanLy">Quản lý thành viên</a></li>
                <li><a href="admin.php?mod=Category&act=Manage">Quản lý thể loại</a></li>
                <li><a href="admin.php?mod=Nhom&act=QuanLy">Quản lý nhóm</a></li>
                <li><a href="admin.php?mod=HoaDon&act=QuanLy">Quản lý hóa đơn</a></li>
            </ul>            
        </div> <!-- /col-in -->
    </div> <!-- /col -->
    
    <footer id="myfooter">
    	Bản quyền thuộc về
    </footer>
</div>        
</body>
</html>