<?php
	include_once("Model/Flower.php");
	$product = new Flower();
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$ret = $product->DeleteFlower($id);
		if($ret > 0)
		{
			header("location:admin.php?mod=Flower&act=QuanLy");
		}
	}
?>