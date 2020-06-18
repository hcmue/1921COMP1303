<?php session_start(); ?>
<script src="../js/jquery/jquery-3.5.0.js"></script>
<link href="Hoa.css" rel="stylesheet" />
Loại hoa:
<select id="LoaiHoa">
<?php
	include_once("DataProvider.php");
	$sql = "SELECT MaLoai, TenLoai FROM loaihoa ORDER BY TenLoai";
	$dsLoai = DataProvider::ExecuteQuery($sql);
	while($loai = $dsLoai->fetch()){
		echo "<option value='{$loai['MaLoai']}'>{$loai['TenLoai']}</option>";
	}
?>
</select>
<?php
include_once("MyCart.php");
$sum = json_decode(Cart::Display());
?>
<a href="GioHang.php">Giỏ hàng</a> 
<span id="tong_tien">
	<?php echo $sum->TongTien; ?>
</span> đ
<div id="danh_sach_hoa"></div>
<script>
$(function(){
	function layHoaTheoLoai(){
		$.ajax({
			url: "LayHoa.php",
			data:{ 
				"ma_loai_hoa": $("#LoaiHoa").val()
			},
			success: function(response){
				$("#danh_sach_hoa").html(response);

				$(".mua").click(function(){
					$.ajax({
						url: "XLGioHang.php",
						data: {
							"ma_hoa": $(this).data("mahoa"),
							"hanh_dong": "them"
						},
						dataType: "json",
						success: function(data){
							console.log(data);
							console.log(data.TongTien);
							$("#tong_tien").html(data.TongTien);
						}
					});
				});
			}
		});
	}
	layHoaTheoLoai();
	//gắn sự kiện click thay đổi item trong dropdown
	$("#LoaiHoa").change(function(){
		layHoaTheoLoai();
	});
});
</script>