<?php
include_once("DataProvider.php");
class Group
{
	private $da;
	function __construct()
	{
		$this->da = new DataProvider(); 
	}
	function InsertGroup($TenNhom)
	{
		$sql="Insert into nhom (TenNhom) values('$TenNhom')";
		return $this->da->ExecuteQuery($sql);
	}
	function DeleteGroup($MaNhom)
	{
		$sql="Delete from nhom where MaNhom=$MaNhom";
		return $this->da->ExecuteQuery($sql);
	}
	function UpdateGroup($MaNhom,$TenNhom)
	{
		$sql="Update nhom set TenNhom='$TenNhom' where MaNhom=$MaNhom";
		return $this->da->ExecuteQuery($sql);
	}
	function GetGroupByID($MaNhom)
	{
		$sql="Select MaNhom,TenNhom from nhom where MaNhom=$MaNhom";
		return $this->da->Fetch($sql);
	}
	function GetGroups()
	{
		$sql="Select MaNhom,TenNhom from nhom";
		return $this->da->FetchAll($sql); 
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>