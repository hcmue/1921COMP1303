<?php
session_start();

if(!isset($_SESSION["Username"])){
	$_SESSION["RequestUrl"] = "http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	header("Location: Login.php");
}
?>