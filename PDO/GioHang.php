<?php
session_start();
if(!isset($_SESSION['MyCart']))
{
	die("Giỏ hàng rỗng");
}
?>
<table>
	<tr>
		<td>Hình</td>
		<td>Hoa</td>
		<td>Giá</td>
		<td>Số lượng</td>
		<td>Thành tiền</td>
		<td></td>
	</tr>
	<?php
	include_once("DataProvider.php");
	foreach($_SESSION['MyCart'] as $MaHoa => $SoLuong){
		$rs= DataProvider::ExecuteQuery("SELECT MaHoa, TenHoa, Hinh, GiaBan FROM hoa WHERE MaHoa = $MaHoa");
		$row = $rs->fetch();
		$sum = $SoLuong * $row['GiaBan'];
		$chuoi = <<< EOD
	<tr>
		<td><img src="../hoa/{$row['Hinh']}" height="80" /></td>
		<td>{$row['TenHoa']}</td>
		<td>{$row['GiaBan']}</td>
		<td>
			<input type="number" value="{$SoLuong}" />
		</td>
		<td>{$sum}</td>
		<td></td>
	</tr>
EOD;
		echo $chuoi;
	}
	?>
</table>