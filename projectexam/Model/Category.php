<?php
include_once("DataProvider.php");
class Category
{
	private $da;
	function __construct()
	{
		$this->da = new DataProvider(); 
	}
	function InsertCategory($TenLoai)
	{
		$sql="Insert into loaihoa (TenLoai) Values('$TenLoai')";
		return $this->da->ExecuteQuery($sql);
	}
	function GetCategories()
	{
		return $this->da->FetchAll("Select * from loaihoa");
	}
	function GetCategoryByID($id)
	{
		$sql="Select * from loaihoa where MaLoai='$id'";
		return $this->da->Fetch($sql);
	}
	function UpdateCategory($id, $TenLoai)
	{
		$sql="Update loaihoa set TenLoai='$TenLoai' where MaLoai=$id";
		return $this->da->ExecuteQuery($sql);
	}
	function DeleteCategory($id)
	{
		$sql="Delete from loaihoa where MaLoai = $id";
		return $this->da->ExecuteQuery($sql);
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>