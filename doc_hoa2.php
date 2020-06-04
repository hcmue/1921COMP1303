Loại hoa:
<select name="LoaiHoa" class="form-control">
<?php
	include_once("DataProvider.php");
	$dsLoaiHoa = DataProvider::ExecuteQuery("SELECT MaLoai, TenLoai FROM loaihoa");
	while($loai = mysqli_fetch_array($dsLoaiHoa))
	{
		echo "<option value='{$loai['MaLoai']}'>{$loai['TenLoai']}</option>";
	}
?>
</select>
<br>
<?php
include_once("DataProvider.php");
try{
	$sql = "SELECT MaHoa, TenHoa, GiaBan, Hinh FROM Hoa";
	$result = DataProvider::ExecuteQuery($sql);
	while($row = mysqli_fetch_array($result))
	{
		echo "{$row[0]} - {$row['TenHoa']}<br>";
	}
} catch(Exception $ex){
	echo "Không thể mở CSDL";
}
?>
<h4>End of ...</h4>