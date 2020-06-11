<?php
include_once("DataProvider.php");
$sql = "SELECT MaHoa, TenHoa, GiaBan, Hinh FROM hoa";
$sql .= " ORDER BY GiaBan";
//echo $sql;

$result = DataProvider::ExecuteQuery($sql);
while($row = $result->fetch())
{
	//echo "{$row['TenHoa']} - {$row['GiaBan']}<br>";
	$gia = number_format($row['GiaBan']);
    $chuoi = <<< EOD
    <!--Một hàng hóa-->
     <div class="hh-box">
         <div class="hh-box-promotion"></div>
         <div class="hh-box-qua"></div>
         <img src="../hoa/{$row['Hinh']}" class="hh-box-image" />
         <img src="images/icon-new.png" class="hh-box-new" />
         <div class="hh-box-name">{$row['TenHoa']}</div>
         <div class="hh-box-gia">{$gia} đ</div>
     </div>
     <!--End Một hàng hóa-->
EOD;
    echo $chuoi;
}
?>
<link href="Hoa.css" rel="stylesheet" />