<?php
$MaHoa = $_GET["MaHoa"];
include_once("model/Flower.php");
$f = new Flower();
$rs = $f->DeleteFlower($MaHoa);

echo "Da xoa hoa co ma $MaHoa";
?>