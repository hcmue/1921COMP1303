<?php
include_once("../DataProvider.php");
$sql_loai = "SELECT MaLoai, TenLoai FROM loaihoa";
$dsHoa = DataProvider::ExecuteQuery($sql_loai);
?>
<h2>DANH SÁCH</h2>
Loại hoa:
<select id="LoaiHoa">
<?php
while($loai = mysqli_fetch_array($dsHoa))
{
	echo '<option value="'.$loai["MaLoai"].'">'.$loai["TenLoai"].'</option>';
}
?>
</select>
<div id="danh_sach_hoa"></div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
function layHoaTheoLoai(){
	$.ajax({
		url: "XLLayHoa.php",
		type: "POST",
		data: { 
			"ma_loai_hoa": $("#LoaiHoa").val()
		},
		success: function(data){
			$("#danh_sach_hoa").html(data);
		},
		error: function(){
			alert("Lỗi xử lý");
		}
	});
}
$(function(){
	layHoaTheoLoai();
	$("#LoaiHoa").change(function(){
		layHoaTheoLoai();
	});
});
</script>