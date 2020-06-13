<?php
define('SO_LUONG_MOI_TRANG', 7);
include_once("DataProvider.php");
$sql = "SELECT MaHoa, TenHoa, GiaBan, Hinh FROM hoa";
if(isset($_REQUEST["ma_loai_hoa"]))
{
    $sql .= " WHERE MaLoai = ".$_REQUEST["ma_loai_hoa"];
}
$trang = !isset($_REQUEST["p"]) ? 1 : $_REQUEST["p"];

$sql .= " LIMIT ".(($trang - 1) * SO_LUONG_MOI_TRANG).", ".SO_LUONG_MOI_TRANG;
$dsHoa = DataProvider::ExecuteQuery($sql);
$stt = 1;
while($row = $dsHoa->fetch())
{
    $gia = number_format($row['GiaBan']);
	$chuoi = <<< EOD
<!--Một hàng hóa-->
 <div class="hh-box">
     <div class="hh-box-promotion"></div>
     <div class="hh-box-qua"></div>
     <img src="../hoa/{$row['Hinh']}" class="hh-box-image">
     <img src="images/icon-new.png" class="hh-box-new" >
     <div class="hh-box-name">{$row['TenHoa']}</div>
     <div class="hh-box-gia">{$gia} đ</div>
 </div>
 <!--End Một hàng hóa-->
EOD;
echo $chuoi;
}
?>
<link href="Hoa.css" rel="stylesheet" />