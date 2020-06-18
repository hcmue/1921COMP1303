<?php
session_start();
include_once("MyCart.php");

$maHoa = $_REQUEST["ma_hoa"];
$loai = $_REQUEST["hanh_dong"];
switch($loai)
{
	case "them":
		Cart::InsertCart($maHoa);
		echo Cart::Display();
		break;
}
