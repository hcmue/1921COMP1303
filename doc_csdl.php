<?php
$link = mysqli_connect("localhost", "root", "", "qlbanhoa");
//set bộ mã tiếng việt
mysqli_query($link, "SET NAMES UTF8 ");

$query = "SELECT * FROM hoa ORDER BY GiaBan";
//echo $query;
$result = mysqli_query($link, $query);

mysqli_close($link);
?>

<table border="1" cellspacing="0" cellpadding="5">
	<tr>
		<th>STT</th>
		<th>Hình</th>
		<th>Hoa</th>
		<th>Giá bán</th>
	<tr>
	<?php
	$stt = 1;
	while($row = mysqli_fetch_array($result))
	{
		$gia = number_format($row['GiaBan']);
		$chuoi = <<< EOD
	<tr>
		<td>{$stt}</td>
		<td><img src="hoa/{$row['Hinh']}" class="hoa" /></td>
		<td>{$row['TenHoa']}</td>
		<td>{$gia} đ</td>
	<tr>
EOD;
		echo $chuoi; $stt++;
	}
	?>

</table>
<style>
.hoa{width:80px; height: 100px;}
</style>