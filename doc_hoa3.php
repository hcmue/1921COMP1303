<form>
Loại hoa:
<select name="LoaiHoa" class="form-control">
<?php
	$loai_hoa_chon = $_REQUEST["LoaiHoa"];
	include_once("DataProvider.php");
	$dsLoaiHoa = DataProvider::ExecuteQuery("SELECT MaLoai, TenLoai FROM loaihoa");
	while($loai = mysqli_fetch_array($dsLoaiHoa))
	{
		$chon = $loai_hoa_chon == $loai['MaLoai'] ? "selected" : "";
		echo "<option value='{$loai['MaLoai']}' {$chon}>{$loai['TenLoai']}</option>";
	}
?>
</select>
<button>Lọc</button>
</form>
<br>
<?php
include_once("DataProvider.php");
try{
	$sql = "SELECT MaHoa, TenHoa, GiaBan, Hinh FROM Hoa";
	if(isset($loai_hoa_chon))
	{
		$sql .= " WHERE MaLoai = ".$loai_hoa_chon;
	}
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