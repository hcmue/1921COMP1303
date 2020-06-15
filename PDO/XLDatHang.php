<?php
session_start();
//nếu giỏ hàng rỗng
if(!isset($_SESSION["MyCart"]))
{
	//chuyển tới trang mua
	header("location: Hoa.php");
}

try{
	$dsn = "mysql:host=localhost;dbname=qlbanhoa";
	$dbh = new PDO($dsn, "root", "");
	$dbh->query("SET NAMES utf8");
	$dbh->beginTransaction();
	//1. Tạo hóa đơn
	$sqlHD = "INSERT INTO `hoadon` (`MaHD`, `NgayDat`, `NoiGiao`, `MaKH`, `TinhTrang`) VALUES (NULL, now(), '280 ADV', '1', 'Mới đặt');";
	$dbh->query($sqlHD);
	$maHd = $dbh->lastInsertId();
	
	foreach($_SESSION['MyCart'] as $MaHoa => $SoLuong)
	{
		$sqlCTHD = "INSERT INTO `chitiethd` (`SoDH`, `MaHoa`, `MaHD`, `SoLuong`) VALUES (NULL, '{$MaHoa}', '{$maHd}', '{$SoLuong}');";
		$dbh->query($sqlCTHD);
	}

	$dbh->commit();
	unset($_SESSION['MyCart']);//xóa session
}catch(Exception $ex){
	$dbh->rollBack();
	echo "Lỗi: ";
}
finally{
	$dbh = null;
}