<?php
session_start();
$val = $_REQUEST["MaBaoMat"];

if($val == $_SESSION["mabaomat"])
{ 
	echo 'true';
}
else{
	echo 'false';
}
?>