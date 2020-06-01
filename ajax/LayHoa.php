<?php
$loai_hoa = @$_REQUEST["MaLoai"];
include_once("../DataProvider.php");
$query = "SELECT MaHoa, TenHoa, GiaBan, Hinh FROM hoa";
if(isset($loai_hoa))
{
	$query .= " WHERE MaLoai = $loai_hoa";
}
$query .= " ORDER BY GiaBan";
?>
<table border="1" cellspacing="0" cellpadding="5">
	<tr>
		<th>STT</th>
		<th>Hình</th>
		<th>Hoa</th>
		<th>Giá bán</th>
	<tr>
	<?php
	$result = DataProvider::ExecuteQuery($query);
	$stt = 1;
	while($row = mysqli_fetch_array($result))
	{
		$gia = number_format($row['GiaBan']);
		$chuoi = <<< EOD
	<tr>
		<td>{$stt}</td>
		<td><img src="../hoa/{$row['Hinh']}" class="hoa" /></td>
		<td>{$row['TenHoa']}</td>
		<td>{$gia} đ</td>
	<tr>
EOD;
		echo $chuoi; $stt++;
	}
	?>

</table>
