<form action="" method="post" enctype="multipart/form-data">
	<h1>THÊM BÓ HOA</h1>
	<table>
		<tr>
			<td>Tên bó hoa</td>
			<td>
				<input name="TenBoHoa" />
			</td>
		</tr>
		<tr>
			<td>Giá bó hoa</td>
			<td>
				<input name="GiaBoHoa" type="number"/>
			</td>
		</tr>
		<tr>
			<td>Hình</td>
			<td>
				<input name="Hinh" type="file" />
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<button>Thêm bó hoa</button>
			</td>
		</tr>
	</table>
</form>
<?php
if(isset($_FILES["Hinh"]) && $_FILES["Hinh"]["error"] == 0)
{
	if(move_uploaded_file($_FILES["Hinh"]["tmp_name"], "hoa/".$_FILES["Hinh"]["name"]))
	{
		$tenhoa = $_REQUEST["TenBoHoa"];
		$chuoi = <<< EOD
		<h2>Đã thêm thành công</h2>
		<div style="text-align:center;">
			<img src="hoa/{$_FILES["Hinh"]["name"]}" alt="{$tenhoa}" /><br>
			<h3>{$tenhoa}</h3>
		</div>
EOD;
		echo $chuoi;
	}
}
?>









