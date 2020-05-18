<a href="BT02_them_bo_hoa.php">Thêm Bó hoa</a><br>
<?php

$content = @file_get_contents("hoa_xuan.txt");
$mang = explode("/*", $content);
//print_r($mang);
for($i = 1; $i < count($mang); $i++)
{
	//echo $mang[$i]."<br>";
	$hoa = explode("|", $mang[$i]);
	$gia = number_format($hoa[1]);
	$chuoi = <<< EOD
	<div style="text-align:center;">
			<img src="hoa/{$hoa[2]}" alt="{$hoa[0]}" /><br>
			<h3>{$hoa[0]}</h3>
			<h4>{$gia} đ</h4>
		</div>
EOD;
	echo $chuoi;
}
?>