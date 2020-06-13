﻿<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link href="../css/bootstrap/bootstrap.css" rel="stylesheet" />    
    <script src="../js/jquery/jquery-3.5.0.js"></script>
    <script src="../js/bootstrap/bootstrap.js"></script>
</head>
<body>
    <div class="container">
        <div>
        <?php
        include_once("DataProvider.php");
        $dsLoai = DataProvider::ExecuteQuery("SELECT MaLoai, TenLoai FROM loaihoa");
        ?>
            Loại hoa:
            <select id="LoaiHoa">
            <?php
            while($loai = $dsLoai->fetch())
            {
	            echo '<option value="'.$loai["MaLoai"].'">'.$loai["TenLoai"].'</option>';
            }
            ?>
            </select>
            <div id="danh_sach_hoa"></div>
        </div>
    </div>
    <script>
function layHoaTheoLoai(){
	$.ajax({
		url: "Lab08.php",
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
</body>
</html>