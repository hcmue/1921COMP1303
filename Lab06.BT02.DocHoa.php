<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <a href="Lab06.BT02.ThemHoa">Thêm hoa</a><br>
<?php
$noi_dung = @file_get_contents("hoa_xuan.txt");// or die("Lỗi đọc");
if(isset($noi_dung) && !empty($noi_dung) && strlen($noi_dung) > 0)
{
    $mang_hoa = explode("/*", $noi_dung);
    //print_r($mang_hoa);
    for($i = 1; $i < count($mang_hoa); $i++)
    {        
        $hoa = explode("|", $mang_hoa[$i]);
        $gia = number_format($hoa[1]);
        $chuoi = <<< EOD
		<div>
			<img src="hoa/{$hoa[2]}" alt="{$hoa[0]}" />
			<h3>{$hoa[0]}</h3>
			<h3>{$gia} đ</h3>
		</div>
EOD;
		echo $chuoi;
    }
}
?>
</body>
</html>