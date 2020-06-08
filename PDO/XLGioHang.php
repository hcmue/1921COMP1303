<?php
include_once("MyCart.php");

$ma_sp = $_REQUEST["ma_sp"];
$so_luong = $_REQUEST["so_luong"];
$loai = $_REQUEST["loai"];

switch($loai){
	case "them":
		Cart::InsertCart($ma_sp, $so_luong);
		break;
}

echo Cart::Display();
?>