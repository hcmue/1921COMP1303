<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet" />
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
	<h1>THEM BO HOA</h1>
	<table>
		<tr>
			<td>Ten bo hoa</td>
			<td>
				<input name="TenBoHoa" />
			</td>
		</tr>
		<tr>
			<td>Gia bo hoa</td>
			<td>
				<input name="GiaBoHoa" type="number"/>
			</td>
		</tr>
		<tr>
			<td>Hinh</td>
			<td>
				<input name="Hinh" type="file" />
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<button>Them bo hoa</button>
			</td>
		</tr>
	</table>
</form>
<?php
//print_r($_FILES["Hinh"]);
if(isset($_FILES["Hinh"]) && $_FILES["Hinh"]["error"] == 0)
{
	//di chuyen file tu TM tmp vao thu muc /hoa
	if(move_uploaded_file($_FILES["Hinh"]["tmp_name"], "./hoa/".$_FILES["Hinh"]["name"]))
	{
		$gia = number_format($_REQUEST["GiaBoHoa"]);
		$chuoi = <<< EOD
		<div>
			<img src="./hoa/{$_FILES["Hinh"]["name"]}" alt="{$_REQUEST["TenBoHoa"]}" />
			<h3>{$_REQUEST["TenBoHoa"]}</h3>
			<h3>{$gia} đ</h3>
		</div>
		<a href="BT2_doc_bo_hoa.php">Xem danh sách hoa</a>
EOD;
		echo $chuoi;

		//Ghi xuong file
		$file = fopen("hoa_xuan.txt", "at");
		fwrite($file, "/*{$_REQUEST["TenBoHoa"]}|{$_REQUEST["GiaBoHoa"]}|{$_FILES["Hinh"]["name"]}");
		fclose($file);
	}
}
else {
	echo "Chua upload file";
}
?>
</body>
</html>