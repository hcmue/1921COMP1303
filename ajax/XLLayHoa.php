<table>
	<tr>
		<th>STT</th>
		<th>Hình</th>
		<th>Tên hoa</th>
		<th>Giá bán</th>
	</tr>
<?php
	include_once("../DataProvider.php");
	$sql = "SELECT MaHoa, TenHoa, GiaBan, Hinh FROM hoa";
	if(isset($_REQUEST["ma_loai_hoa"]))
	{
		$sql = $sql." WHERE MaLoai = ".$_REQUEST["ma_loai_hoa"];
	}
	//echo $sql;
	$result = DataProvider::ExecuteQuery($sql);
	$i = 1;
	while($row = mysqli_fetch_array($result))
	{
		$gia = number_format($row["GiaBan"]);
		$chuoi = <<< EOD
	<tr>
		<td>{$i}</td>
		<td>
			<img src="../hoa/{$row["Hinh"]}" height="100" />
		</td>
		<td>{$row["TenHoa"]}</td>
		<td>{$gia} đ</td>
	</tr>
EOD;
		echo $chuoi; $i++;
	}
?>
	
</table>