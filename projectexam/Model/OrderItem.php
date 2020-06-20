<?php
include_once("DataProvider.php");
class OrderItem
{
	private $da;
	function __construct()
	{
		$this->da = new DataProvider(); 
	}
	function InsertOrderItem($MaHD,$MaHoa,$SoLuong)
	{
		$sql="Insert into chitiethd(MaHD,MaHoa,SoLuong) values($MaHD,$MaHoa,$SoLuong)";
		return $this->da->ExecuteQuery($sql);
	}
	function DeleteOrderItem($MaHD)
	{
		$sql="Delete from chitiethd where MaHD=$MaHD";
		return $this->da->ExecuteQuery($sql);
	}
	function GetOrderItemByOrder($MaHD)
	{
		$sql="Select chitiethd.MaHoa,TenHoa,GiaBan, chitiethd.SoLuong from chitiethd inner join hoa on chitiethd.MaHoa=hoa.MaHoa where MaHD=$MaHD";
		return $this->da->FetchAll($sql);
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>