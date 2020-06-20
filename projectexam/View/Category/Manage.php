 <!-- Article --><div class="article">
<h2><span><a href="admin.php?mod=Category&act=Manage">Quản lý thể loại</a></span></h2>
<p>
	<table width="100%">
    <tr class="title"><td>Mã thể loại</td><td>Tên thể loại</td><td>Xóa</td><td>Sửa</td></tr>
    <?php
	$count = 0;
	foreach($ret as $row)
	{
		$count++;
		if($count%2==0)
		{
			echo "<tr class=\"color\"><td>";
		}
		else
			echo "<tr><td>";
		echo $row['MaLoai']."</td><td>";
		echo $row['TenLoai']."</td><td>";		
		echo "<a href=\"admin.php?mod=Category&act=Delete&id=$row[MaLoai]\" onclick=\"return IsDelete()\"><img src=\"Images/Delete.gif\" /></a></td><td>";
		echo "<a href=\"admin.php?mod=Category&act=Edit&id=$row[MaLoai]\"><img src=\"Images/Edit.png\" /></a>";
		echo "</td></tr>";
	}
	?>
    </table>
</p>
<p class="btn-more box noprint"><strong><a href="admin.php?mod=Category&act=Insert">Thêm</a></strong></p>
</div> <!-- /article --><hr class="noscreen">