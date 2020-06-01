<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <script src="../js/jquery/jquery-3.5.0.js"></script>
    <script>
    function LayHoa(){
        $.ajax({
            url: "LayHoa.php",
            data: { MaLoai: $("#LoaiHoa").val()},
            success: function(data){
                console.log(data);
                $("#dsHoa").html(data);
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
    include_once("../DataProvider.php");
$ds_loai_hoa = DataProvider::ExecuteQuery("SELECT MaLoai, TenLoai FROM loaihoa");
?>
<select id="LoaiHoa" class="form-control">
    <?php
    while($loai = mysqli_fetch_array($ds_loai_hoa)){
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