<?php
session_start();
include_once("MyCart.php");
switch ($_REQUEST["loaiXuLy"]) {
	case 'them':
		Cart::InsertCart($_REQUEST["maHoa"]);
		echo Cart::Display();
		break;
	case 'xoa':
		Cart::DeleteCart($_REQUEST["maHoa"]);
		echo '{"success":true}';
		break;
	default:
		# code...
		break;
}
