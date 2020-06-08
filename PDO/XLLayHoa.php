<?php
include_once('DataProvider.php');
$sqlHoa = "SELECT MaHoa, TenHoa, GiaBan, Hinh FROM hoa WHERE MaLoai = ".$_REQUEST['ma_loai_hoa'];
//echo $sqlHoa;
$dsHoa = DataProvider::ExecuteQuery($sqlHoa);
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
         <button type="button" data-mahoa="{$row['MaHoa']}" class="mua btn btn-success">Mua</button>
     </div>
     <!--End Một hàng hóa-->
EOD;
	echo $chuoi;
}
?>
