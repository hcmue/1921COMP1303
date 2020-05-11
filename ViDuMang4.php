<html>
<head></head>
<body>
<?php
$chuoi = "An Nam Ngự Giải Vị Thanh";
$arr = explode(" ", $chuoi);
print_r($arr);

$mang = array("Đào", "Mận", "Ổi", "Cam", "Quýt");
$s = implode(", ", $mang);
echo $s;
?>
</body>
</html>