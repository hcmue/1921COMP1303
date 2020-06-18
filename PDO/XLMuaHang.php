<?php
session_start();
if(!isset($_SESSION['MyCart']))
{
	header("Location: LocHoa.php");
}

try{
	$dsn = "mysql:host=localhost;dbname=qlbanhoat5";
	$dbh = new PDO($dsn, "root", "");
	$dbh->query("SET NAMES UTF8");

	$dbh->beginTransaction();

	$sqlHD = "INSERT INTO `hoadon` (`MaHD`, `NgayDat`, `NoiGiao`, `MaKH`, `TinhTrang`) VALUES (NULL, now(), '280 ADV', '5', 'Mới đặt');";
	$dbh->query($sqlHD);
	$maHd = $db->lastInsertId();

	foreach($_SESSION['MyCart'] as $MaHoa => $SoLuong){
		$sqlCTHD = "INSERT INTO `chitiethd` (`SoDH`, `MaHoa`, `MaHD`, `SoLuong`) VALUES (NULL, '{$MaHoa}', '{$maHd}', '{$SoLuong}');";
		$dbh->query($sqlCTHD);
	}

	$dbh->commit();
	unset($_SESSION['MyCart']);
}catch(Exception $ex){
	$dbh->rollBack();
}
finally{
	$dbh = null;
}