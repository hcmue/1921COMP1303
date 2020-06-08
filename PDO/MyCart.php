<?php
session_start();
class Cart
{
	public static function InsertCart($masp, $soluong = 1)
	{
		//nếu đã có mã spham à $id trong giỏ hàng
		if(isset($_SESSION["MyCart"][$masp]))
			$_SESSION["MyCart"][$masp] = $soluong;
		else//nếu chưa có
			$_SESSION["MyCart"][$masp] = 1;
	}
	
	public static function DeleteCart($masp)
	{
		if(isset($_SESSION["MyCart"][$masp]))
			unset($_SESSION["MyCart"][$masp]);
	}
	
	public static function UpdateCart($masp, $soluong)
	{
		if(isset($_SESSION["MyCart"][$masp]))
			$_SESSION["MyCart"][$masp] = $soluong;
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
		return "Số MH: ".count($_SESSION['MyCart']).", tổng tiền: $sum";
	}
}
?>