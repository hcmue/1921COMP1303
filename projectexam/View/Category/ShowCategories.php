<style>
#category li{display:block; margin:5px; }
#category a{color:red;}
</style>
<h3><span>Danh mục thể loại</span></h3>
<ul id="category">
    <?php
    foreach($result as $row)
		{
			echo "<li><a href=\"index.php?mod=Flower&act=DanhSach&MaLoai=$row[MaLoai]\">$row[TenLoai]</a></li>";
		}
	?>
</ul>
<hr class="noscreen">