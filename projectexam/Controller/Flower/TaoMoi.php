<?php
	include_once("Model/Flower.php");
	include_once("Model/Pages.php");
	$prod = new Flower();
	define('MAX',6);
	$start = Pages::findStart(MAX);
	$count = $prod->CountFlowers();
	$pages = Pages::findPages($count,MAX);
		
	$result=$prod->GetFlowers($start,MAX);
	include_once("View/Flower/TaoMoi.php");
?>