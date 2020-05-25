<?php
$link = mysqli_connect("localhost", "root", "", "qlbanhoa");
//set bộ mã tiếng việt
mysqli_query($link, "SET NAMES UTF8 ");

$query = "SELECT * FROM hoa ORDER BY GiaBan";
//echo $query;
$result = mysqli_query($link, $query);
while($row = mysqli_fetch_array($result))
{
	echo "{$row['TenHoa']} - {$row['GiaBan']} đ<br>";
}

mysqli_close($link);
?>