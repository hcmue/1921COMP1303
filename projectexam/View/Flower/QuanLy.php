<!-- Article -->
<div class="article">
	<h2><span><a href="admin.php?mod=Flower&act=QuanLy">Quản lý sản phẩm</a></span></h2>
<p>
<table width="100%">
	<tr class="title"><td>Tên sản phẩm</td><td>Thể loại</td><td>Giá</td><td>Hình</td><td>Xóa</td><td>Sửa</td></tr>
<?php
foreach($ret as $row)
{
	echo "<tr><td>";
	echo $row['TenHoa']."</td><td>";
	echo $row['TenLoai']."</td><td>";
	echo number_format($row["GiaBan"],0)." đ</td><td>";
	echo "<img src=\"hoa/$row[Hinh]\" width=\"50\" /></td><td>";
echo "<a href=\"admin.php?mod=Flower&act=Xoa&id=$row[MaHoa]\" onclick=\"return IsDelete()\"><img src=\"Images/Delete.gif\" /></a></td><td>";
echo "<a href=\"admin.php?mod=Flower&act=Sua&id=$row[MaHoa]\"><img src=\"Images/Edit.png\" /></a>";
echo "</td></tr>";
}
?>
</table>
</p>
<p class="btn-more box noprint"><strong><a href="admin.php?mod=Flower&act=Them">Thêm</a></strong></p>
</div>
<!-- /article -->
<hr class="noscreen">