<?php
session_start();
include_once("DataProvider.php");
try{
	$dsn = "mysql:host=localhost;dbname=qlbanhoat7";
	$dbh = new PDO($dsn, "root", "");
	$dbh->query("SET NAMES utf8");
	
	$dbh->beginTransaction();

	$sqlHd = "INSERT INTO `hoadon` (`MaHD`, `NgayDat`, `NoiGiao`, `MaKH`, `TinhTrang`) VALUES (NULL, now(), '280 ADV', '1', 'Mới đặt');";
	$dbh->exec($sqlHd);
	$maHd = $dbh->lastInsertId();//lấy gái trị vừa tăng

	//Chèn vào cthd
	foreach($_SESSION['MyCart'] as $MaHoa => $SoLuong)
	{
		$sqlCTHD = "INSERT INTO `chitiethd` (`SoDH`, `MaHoa`, `MaHD`, `SoLuong`) VALUES (NULL, '{$MaHoa }', '{$maHd}', '{$SoLuong}');";
		$dbh->exec($sqlCTHD);
	}
	$dbh->commit();
	unset($_SESSION['MyCart']);//xóa sessio giỏ hàng
}
catch(Exception $ex)
{
	$dbh->rollback();
	return null;
}
finally{
	$dbh = null;
}