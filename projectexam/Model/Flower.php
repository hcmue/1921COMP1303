<?php
include_once("DataProvider.php");
class Flower
{
	private $da;
	function __construct()
	{
		$this->da = new DataProvider(); 
	}
	
	function InsertFlower($MaLoai,$TenHoa,$Hinh,$GiaBan,$ThanhPhan)
	{
		$sql="Insert into hoa(MaLoai,TenHoa,Hinh,GiaBan,ThanhPhan) values($MaLoai,'$TenHoa', '$Hinh',$GiaBan,'$ThanhPhan')";
		return $this->da->ExecuteQuery($sql);
	}
	
	function UpdateFlower($MaHoa,$MaLoai,$TenHoa,$GiaBan,$ThanhPhan,$Hinh="")
	{
		if($Hinh=="")
		{
			$sql="Update hoa set MaLoai=$MaLoai, TenHoa='$TenHoa', GiaBan=$GiaBan, GiaBan='$GiaBan', ThanhPhan = $ThanhPhan where MaHoa=$MaHoa";
		}else
			$sql="Update hoa setMaLoai=$MaLoai, TenHoa='$TenHoa', GiaBan=$GiaBan, GiaBan='$GiaBan', ThanhPhan = $ThanhPhan, Hinh='$Hinh' where MaHoa=$MaHoa";
		return $this->da->ExecuteQuery($sql);
	}
	
	function DeleteFlower($MaHoa)
	{
		$sql = "Delete from hoa where MaHoa=$MaHoa";
		return $this->da->ExecuteQuery($sql);
	}
	function GetFlowers($start,$limit)
	{
		$sql="Select MaHoa,TenHoa, Hinh, GiaBan, ThanhPhan from hoa order by MaHoa desc limit $start,$limit";
		return $this->da->FetchAll($sql);
	}
	function GetFlowersManage()
	{
		$sql="Select MaHoa,TenHoa, Hinh, GiaBan, ThanhPhan, TenLoai from hoa p join loaihoa c on p.MaLoai=c.MaLoai order by MaHoa";
		return $this->da->FetchAll($sql);
	}
	
	function GetFlowersByCategory($id)
	{
		$sql="Select MaHoa,TenHoa, Hinh, GiaBan, ThanhPhan from hoa where MaLoai=$id";
		return $this->da->FetchAll($sql);
	}
	
	function GetFlowerByID($id)
	{
		$sql="select MaHoa,TenHoa, Hinh, GiaBan, ThanhPhan, MaLoai from hoa where MaHoa=$id";
		return $this->da->Fetch($sql);
	}
	
	function GetProductsOrther($id,$categoryID)
	{
		$sql="Select MaHoa,TenHoa, Hinh, GiaBan, ThanhPhan from hoa where MaHoa!=$id and MaLoai=$categoryID limit 0,6";
		return $this->da->FetchAll($sql);
	}
	
	function CountFlowers()
	{
		$sql="Select MaHoa from hoa";
		return $this->da->NumRows($sql);
	}
	
	function SearchFlower($name)
	{
		$sql = "Select MaHoa,TenHoa, Hinh, GiaBan, ThanhPhan from hoa where TenHoa like '%$name%'";
		return $this->da->FetchAll($sql);
	}
	
	function __destruct()
	{
		unset($this->da);
	}
}
?>