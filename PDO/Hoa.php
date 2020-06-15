<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link href="Hoa.css" rel="stylesheet" />
    <link href="../css/bootstrap/bootstrap.css" rel="stylesheet" />

    <script src="../js/jquery/jquery-3.5.0.js"></script>
    <script src="../js/bootstrap/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

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
                            so_luong: 1, loai: "them"
						},
                        dataType: "json",
                        success: function(data){
                        console.log(data);
                            $("#tong_tien").html(data.TongTien);
                            Swal.fire({
                              icon: 'success',
                              title: 'Thêm giỏ hàng thành công'
                            });
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
<div class="container">
    <?php
    session_start();
    include_once("DataProvider.php");
    $ds_loai_hoa = DataProvider::ExecuteQuery("SELECT MaLoai, TenLoai FROM loaihoa");
?>
    <div class="row">
        <label class="col-3">
            Loại hoa: 
        </label>
        <div class="col-5">
            <select id="LoaiHoa" class="form-control">
                <?php
                while($loai = $ds_loai_hoa->fetch()){
                    echo "<option value='{$loai['MaLoai']}'>{$loai['TenLoai']}</option>";
                }
                ?>
            </select>        
        </div>
        <div class="col-4">
            Giỏ hàng:
            <span id="tong_tien" class="text-danger">0
            </span>
            đ
        </div>
    </div>
    <div class="row" id="dsHoa"></div>
<style>
.hoa{width:80px; height: 100px;}
</style>
</div>
</body>
</html>