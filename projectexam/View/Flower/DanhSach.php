<?php
foreach($rs as $r)
{
	$gia = number_format($r['GiaBan']);
	$chuoixuat = <<<EOD
<!--Một hàng hóa-->
<div class="hh-box">	
	<div class="hh-box-promotion"></div>
    <div class="hh-box-qua"></div>
	<a href="?mod=Flower&act=ChiTiet&MaHoa={$r['MaHoa']}">
		<img src="hoa/{$r['Hinh']}" class="hh-box-image">
	</a>
    <img src="images/icon-new.png" class="hh-box-new" >
    <div class="hh-box-name">{$r['TenHoa']}</div>
    <div class="hh-box-gia">{$gia} đ</div>
	<div class="hh-mua" mahoa="{$r['MaHoa']}"></div>
</div>
<!--End Một hàng hóa-->
EOD;
	echo $chuoixuat;
}
?>

