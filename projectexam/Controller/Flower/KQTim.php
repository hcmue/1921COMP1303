<?php
	$name=$_POST['txtName'];
	if($name != "")
	{
		include_once("Model/Flower.php");
		$product = new Flower();
		$result = $product->SearchFlower($name);
		include_once("View/Flower/KQTim.php");
	}
?>