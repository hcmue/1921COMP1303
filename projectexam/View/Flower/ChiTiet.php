<?php
	//Xử lý cho một hoa $row
	$gia = number_format($row['GiaBan']);
	$chuoisp = <<<EOD
	<div class="l_item">
		<div class="t_item">
			<img alt="{$row['TenHoa']}" title="{$row['TenHoa']}" width="300" height="360" src="hoa/{$row['Hinh']}" style="border-width:0px;" />
		</div>
		<div class="b_item">
			<h5>Mã SP: {$row['MaHoa']}</h5>
			<div class="single">
				<h6 class="old">Giá cũ:0 đ</h6>
				<h6 class="new">Giá mới: {$gia} đ</h6>
			</div>
			<div class="button">
				<input type="submit" value="Mua ngay" id="ctl00_cphContent_ucItemDetails_btnBuy" class="cart">
			</div>
		</div>
	</div>	
EOD;
	echo $chuoisp;
?>