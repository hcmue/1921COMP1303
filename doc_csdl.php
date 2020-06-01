<?php
include_once("DataProvider.php");
$ds_loai_hoa = DataProvider::ExecuteQuery("SELECT MaLoai, TenLoai FROm loaihoa");
$loai_hoa = @$_REQUEST["LoaiHoa"];
?>
<form>
<select name="LoaiHoa" class="form-control">
    <?php
    while($loai = mysqli_fetch_array($ds_loai_hoa)){
        echo "<option value='{$loai['MaLoai']}'>{$loai['TenLoai']}</option>";
    }
    ?>
</select>
<button>Search</button>
</form>
<table border="1" cellspacing="0" cellpadding="5">
	<tr>
		<th>STT</th>
		<th>Hình</th>
		<th>Hoa</th>
		<th>Giá bán</th>
	<tr>
	<?php
	$query = "SELECT * FROM hoa";
	if(isset($loai_hoa))
	{
		$query .= " WHERE MaLoai = $loai_hoa";
	}
	$query .= " ORDER BY GiaBan";
	echo $query;
	$result = DataProvider::ExecuteQuery($query);
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