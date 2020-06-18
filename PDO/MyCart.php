﻿<?php
class Cart
{
	public static function InsertCart($id)
	{
		if(isset($_SESSION["MyCart"][$id]))
			$_SESSION["MyCart"][$id]++;
		else
			$_SESSION["MyCart"][$id] = 1;
	}
	
	public static function DeleteCart($id)
	{
		if(isset($_SESSION["MyCart"][$id]))
			unset($_SESSION["MyCart"][$id]);
	}
	
	public static function UpdateCart($id, $quantity)
	{
		if(isset($_SESSION["MyCart"][$id]))
			$_SESSION["MyCart"][$id] = $quantity;
	}
	
	public static function Display()
	{
		include_once("DataProvider.php");
		$sum = 0;
		foreach($_SESSION['MyCart'] as $MaHoa => $SoLuong)
		{
			$rs= DataProvider::ExecuteQuery("SELECT GiaBan FROM hoa WHERE MaHoa = $MaHoa");
			$row = $rs->fetch();
			$sum += $SoLuong * $row['GiaBan'];
		}
		//return "Số MH: ".count($_SESSION['MyCart']).", tổng tiền: $sum";
		$result = array(
			"SoMH" => count($_SESSION['MyCart']),
			"TongTien" => $sum
		);

		return json_encode($result);
	}
}
?>