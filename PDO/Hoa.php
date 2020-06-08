<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link href="Hoa.css" rel="stylesheet" />
    <script src="../js/jquery/jquery-3.5.0.js"></script>
    <script>
    function LayHoa(){
        $.ajax({
            url: "XLLayHoa.php",
            data: { 
                ma_loai_hoa: $("#LoaiHoa").val()
            },
            success: function(data){
                $("#dsHoa").html(data);

                //gắn sự click lên nút mua
                $(".mua").click(function(){
                    //alert("Chọn mua: " + $(this).data("mahoa"));
                    $.ajax({
                        url: "XLGioHang.php",
                        data:{
                            ma_sp: $(this).data("mahoa"),
                            so_luong: 1,
                            loai: "them"
						},
                        success: function(data){
                            alert(data);              
						}
                    });
                });
            }
        });
    }    
    $(function(){
        LayHoa();
        $("#LoaiHoa").change(function(){
            LayHoa();
        });   
    });
    </script>
</head>
<body>
    <?php
    include_once("DataProvider.php");
    $ds_loai_hoa = DataProvider::ExecuteQuery("SELECT MaLoai, TenLoai FROM loaihoa");
?>
<select id="LoaiHoa" class="form-control">
    <?php
    while($loai = $ds_loai_hoa->fetch()){
        echo "<option value='{$loai['MaLoai']}'>{$loai['TenLoai']}</option>";
    }
    ?>
</select>
<div id="dsHoa"></div>
<style>
.hoa{width:80px; height: 100px;}
</style>
</body>
</html>