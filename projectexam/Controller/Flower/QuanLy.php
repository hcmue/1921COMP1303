<?php
	include_once("Model/Flower.php");
	$Product = new Flower();
	$ret=$Product->GetFlowersManage();
	include_once("View/Flower/QuanLy.php");
?>