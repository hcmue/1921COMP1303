<?php session_start(); ?>
<table>
	<tr>
		<td>Hình</td>
		<td>Tên sản phẩm</td>
		<td>Giá</td>
		<td>Số lượng</td>
		<td>Thành tiền</td>
		<td></td>
	</tr>
	<?php
	if(isset($_SESSION["MyCart"]))
	{
		include_once("DataProvider.php");
		foreach($_SESSION["MyCart"] as $MaHoa => $SoLuong)
		{
			$sql = "SELECT Hinh, TenHoa, GiaBan, MaHoa FROM hoa WHERE MaHoa = ".$MaHoa;
			$result = DataProvider::ExecuteQuery($sql);
			$hoa = $result->fetch();
			$thanhtien = $hoa['GiaBan'] * $SoLuong;
			$chuoi = <<< EOD
				<tr>
					<td><img src="../hoa/{$hoa['Hinh']}" height="80" /></td>
					<td>{$hoa['TenHoa']}</td>
					<td>{$hoa['GiaBan']}</td>
					<td>
						<input type="number" value="{$SoLuong}" />
					</td>
					<td>{$thanhtien}</td>
					<td></td>
				</tr>
EOD;
			echo $chuoi;
		}
	}
	?>
</table>
<a href="XLDatHang.php">Đặt hàng</a>