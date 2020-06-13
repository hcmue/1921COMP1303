<?php
session_start();
include_once("MyCart.php");
switch ($_REQUEST["loaiXuLy"]) {
	case 'them':
		Cart::InsertCart($_REQUEST["maHoa"]);
		echo Cart::Display();
		break;
	
	default:
		# code...
		break;
}
