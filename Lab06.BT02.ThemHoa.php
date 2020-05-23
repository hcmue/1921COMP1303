<form method="post" enctype="multipart/form-data">
	<h2>THÊM BÓ HOA</h2>
	<table>
		<tr>
			<td>Tên bó hoa</td>
			<td><input name="TenBoHoa" required></td>
		</tr>
		<tr>
			<td>Giá bó hoa</td>
			<td><input name="GiaBoHoa" required></td>
		</tr>
		<tr>
			<td>Hình</td>
			<td><input name="Hinh" type="file" required></td>
		</tr>
		<tr>
			<td colspan="2">
				<button>Thêm hoa</button>
			</td>
		</tr>
	</table>
</form>
<?php
if(isset($_FILES["Hinh"]) && $_FILES["Hinh"]["error"] == 0)
{
	if(move_uploaded_file($_FILES["Hinh"]["tmp_name"], "hoa/".$_FILES["Hinh"]["name"]))
	{
		$gia = number_format($_REQUEST["GiaBoHoa"]);
		$chuoi = <<< EOD
		<div>
			<img src="hoa/{$_FILES["Hinh"]["name"]}" alt="{$_REQUEST["TenBoHoa"]}" />
			<h3>{$_REQUEST["TenBoHoa"]}</h3>
			<h3>{$gia} đ</h3>
			<a href="Lab06.BT02.DocHoa">Xem danh sách</a>
		</div>
EOD;
		echo $chuoi;

		//Lưu file
		$file = fopen("hoa_xuan.txt", "a");
		fwrite($file, "/*{$_REQUEST['TenBoHoa']}|{$_REQUEST['GiaBoHoa']}|{$_FILES['Hinh']['name']}");
		fclose($file);
	}
}

?>







