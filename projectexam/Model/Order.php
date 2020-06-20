<?php
include_once("DataProvider.php");
include_once("OrderItem.php");
class Order
{
	private $da;
	function __construct()
	{
		$this->da = new DataProvider(); 
	}
	
	function InsertOrder($MaKH,$NoiGiao)
	{
		$sql="Insert into hoadon(MaKH,NgayDat,NoiGiao, TinhTrang) values('$MaKH',now(),'$NoiGiao', 'Mới đặt')";
		return $this->da->ExecuteQueryInsert($sql);
	}

	function DeleteOrder($MaHD)
	{
		$item = new OrderItem();
		$item->DeleteOrderItem($MaHD);
		$sql="Delete from hoadon where MaHD=$MaHD";
		return $this->da->ExecuteQuery($sql);
	}
	
	function GetOrders()
	{
		$sql="Select MaHD, TenDN, HoTen, NgayDat from hoadon o join khachhang u on o.MaKH=u.MaKH order by NgayDat desc";
		return $this->da->FetchAll($sql);
	}
	function GetOrderByID($id)
	{
		$sql="Select MaHD, MaKH, NgayDat from hoadon where MaHD=$id";
		return $this->da->Fetch($sql);
	}
	function GetOrdersByUserID($id)
	{
		$sql="Select MaHD, MaKH, NgayDat from hoadon where MaKH=$id order by NgayDat desc";
		return $this->da->FetchAll($sql);
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>