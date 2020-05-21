<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title>Đọc bó hoa</title>
</head>
<body>
<?php
$noi_dung_file = file_get_contents("hoa_xuan.txt");
$mang_hoa = explode("/*", $noi_dung_file);
//print_r($mang_hoa);

for($i = 1; $i < count($mang_hoa); $i++)
{
	$hoa = explode("|", $mang_hoa[$i]);
    //print_r($hoa);
$gia = number_format($hoa[1]);
		$chuoi = <<< EOD
		<div>
			<img src="./hoa/{$hoa[2]}" alt="{$hoa[0]}" />
			<h3>{$hoa[0]}</h3>
			<h3>{$gia} đ</h3>
		</div>		
EOD;
		echo $chuoi;
}
	echo '<a href="BT02_them_bo_hoa.php">Thêm hoa</a>'; 
?>
</body>
</html>