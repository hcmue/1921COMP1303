<!-- Article --><div class="article">
<h2><span><a href="admin.php?mod=Category&act=Edit&id=<?php echo $id; ?>">Chỉnh sửa thề loại</a></span></h2>
     <p>
<form action="admin.php?mod=Category&act=Edit&id=<?php echo $id; ?>" method="post" class="form">
	<p><label>Tên thể loại</label><input type="text" name="txtCategoryName" id="txtCategoryName" value="<?php echo $row['TenLoai']; ?>"/></p>    
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" /></p>
</form>
</p>
</div>