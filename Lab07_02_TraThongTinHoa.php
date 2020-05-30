<?php
include_once("DataProvider.php");
$sql_loai = "SELECT MaLoai, TenLoai FROM loaihoa";
$dsHoa = DataProvider::ExecuteQuery($sql_loai);
?>
<h2>DANH SÁCH</h2>
Loại hoa:
<form>
<select name="LoaiHoa" id="LoaiHoa">
<?php
while($loai = mysqli_fetch_array($dsHoa))
{
	echo '<option value="'.$loai["MaLoai"].'">'.$loai["TenLoai"].'</option>';
}
?>
	<option value="2">Hoa sinh nhật</option>
</select>
<button>Tra cứu</button>
</form>
<table>
	<tr>
		<th>STT</th>
		<th>Hình</th>
		<th>Tên hoa</th>
		<th>Giá bán</th>
	</tr>
<?php
	$sql = "SELECT MaHoa, TenHoa, GiaBan, Hinh FROM hoa";
	if(isset($_REQUEST["LoaiHoa"]))
	{
		$sql = $sql." WHERE MaLoai = ".$_REQUEST["LoaiHoa"];
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
			<img src="hoa/{$row["Hinh"]}" height="100" />
		</td>
		<td>{$row["TenHoa"]}</td>
		<td>{$gia} đ</td>
	</tr>
EOD;
		echo $chuoi; $i++;
	}
?>
	
</table>