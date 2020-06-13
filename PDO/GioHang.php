<?php session_start(); ?>
<table cellspacing="0" cellpadding="5" border="1">
	<tr>
		<td>STT</td>
		<td>Hình</td>
		<td>Sản phẩm</td>
		<td>Đơn giá</td>
		<td>Số lượng</td>
		<td>Thành tiên</td>
		<td></td>
	</tr>
	<?php
	if(isset($_SESSION['MyCart'])){
		include_once("DataProvider.php");
		foreach($_SESSION['MyCart'] as $MaHoa => $SoLuong)
		{
			$rs = DataProvider::ExecuteQuery("SELECT MaHoa, TenHoa, GiaBan, Hinh, GiamGia FROM hoa WHERE MaHoa = $MaHoa");
			$row = $rs->fetch();
			$gia = $row["GiaBan"] * (100 - $row["GiamGia"])/ 100;
			$thanhtien = $gia * $SoLuong;
			$chuoi = <<< EOD
			<tr>
				<td>STT</td>
				<td>
					<img src="../hoa/{$row['Hinh']}" width=90 />
				</td>
				<td>{$row['TenHoa']}</td>
				<td>{$gia} đ</td>
				<td><input value="{$SoLuong}" /></td>
				<td>{$thanhtien}</td>
				<td>
					<button type="button" class="btn btn-danger remove-cart" data-mahoa="{$row['TenHoa']}">Xóa</button>
				</td>
			</tr>
EOD;
			echo $chuoi;
		}
	}
	?>
</table>
<script src="../js/jquery/jquery-3.5.0.js"></script>
<script>
$(function(){
	$(".remove-cart").click(function(){
		let rowContainButton = $(this).closest("tr");
		$.ajax({
			url: "XLGioHang.php",
            data:{ 
                "maHoa": $(this).data("mahoa"),
                "loaiXuLy": "xoa"
            },
            dataType: "json",
            success: function(data){
                rowContainButton.remove();        
			}
		});
	});
});
</script>