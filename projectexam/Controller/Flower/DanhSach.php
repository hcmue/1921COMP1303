<?php
include_once("Model/Flower.php");
$f = new Flower();
$rs = $f->GetFlowersManage();
if(isset($_GET["MaLoai"]))
	$rs = $f->GetFlowersByCategory($_GET["MaLoai"]);
include_once("View/Flower/DanhSach.php");
?>