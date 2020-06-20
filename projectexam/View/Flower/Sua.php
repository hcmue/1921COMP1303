<!-- Article --><div class="article">
<h2><span><a href="admin.php?mod=Flower&act=Sua&id=<?php echo $MaHoa; ?>">Chỉnh sửa sản phẩm</a></span></h2>
     <p>
<form action="admin.php?mod=Flower&act=Sua&id=<?php echo $MaHoa; ?>" method="post" class="form" enctype="multipart/form-data">
	<p><label>Tên hoa</label><input type="text" name="txtTenHoa" id="txtTenHoa" value="<?php echo $row['TenHoa']; ?>"/></p>
    <p><label>Loại (*)</label>
        <select name="cboLoaiHoa">
            <?php
				foreach($cate as $rowmanu)
				{
					if($rowmanu['MaLoai']==$row['MaLoai'])
					{
						echo "<option value=\"$rowmanu[MaLoai]\" selected=\"selected\" >$rowmanu[TenLoai]</option>";
					}
					else
						echo "<option value=\"$rowmanu[MaLoai]\" >$rowmanu[TenLoai]</option>";
				}
			?>
        </select></p>
                
        <p><label>Giá (*)</label><input type="text" name="txtGiaBan" id="txtGiaBan" value="<?php echo $row['GiaBan']; ?>" /></p>
        
        <p><label>Ảnh hiển thị</label>
        <img src="hoa/<?php echo $row['Hinh'] ?>" width="100" />
        <input type="file" name="txtImageUrl" id="txtImageUrl"/>
        	
        </p>
        <p><label>Thành phần</label><textarea name="txtThanhPhan" id="txtThanhPhan"><?php echo $row['ThanhPhan']; ?></textarea></p>
        
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" /></p>
</form>
	<script src="js/nicEdit.js" type="text/javascript"></script>
    <script language="javascript" type="text/javascript">
		bkLib.onDomLoaded(function() {
		new nicEditor({iconsPath : 'js/nicEditorIcons.gif'}).panelInstance('txtThanhPhan');
	});
	</script>
</p>
</div>