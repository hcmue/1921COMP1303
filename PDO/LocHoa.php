<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
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
					alert("mua " + $(this).data("mahoa"));
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