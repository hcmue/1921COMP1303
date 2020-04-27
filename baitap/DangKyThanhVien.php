<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Đăng ký Thành viên</title>
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.js"></script>
    
</head>
<body>
<?php
    $mangaunhien = rand(1000, 9999);
    //lưu trên server cho session này
    session_start();
    $_SESSION["mabaomat"] = $mangaunhien;
?>
    <form id="frmDangKy">
        <h2 class="text-center text-danger">
            Đăng ký Thành viên
        </h2>
        <div class="row m-1">
            <div class="col-4 col-md-3 text-right">Mã sinh viên</div>
            <div class="col-8 col-md-9">
                <input name="MaSV" placeholder="Mã sinh viên" class="form-control" />
            </div>
        </div>
        <div class="row m-1">
            <div class="col-4 col-md-3 text-right">Họ tên</div>
            <div class="col-8 col-md-9">
                <input name="HoTen" placeholder="Họ tên Sinh viên" class="w-100" />
            </div>
        </div>
        <div class="row m-1">
            <div class="col-4 col-md-3 text-right">Ngày sinh</div>
            <div class="col-8 col-md-9">
                <input name="NgaySinh" class="w-100" />
            </div>
        </div>
        <div class="row m-1">
            <div class="col-4 col-md-3 text-right">Email</div>
            <div class="col-8 col-md-9">
                <input name="Email" placeholder="Email" class="w-100" />
            </div>
        </div>
        <div class="row m-1">
            <div class="col-4 col-md-3 text-right">Xác nhận email</div>
            <div class="col-8 col-md-9">
                <input name="XacNhanEmail" placeholder="Xác nhận email" class="w-100" />
            </div>
        </div>
        <div class="row m-1">
            <div class="col-4 col-md-3 text-right">Số tài khoản</div>
            <div class="col-8 col-md-9">
                <input name="SoTaiKhoan" placeholder="Số tài khoản" class="w-100" />
            </div>
        </div>
        <div class="row m-1">
            <div class="col-4 col-md-3 text-right">Hình</div>
            <div class="col-8 col-md-9">
                <input type="file" name="Hinh" />
            </div>
        </div>
        <div class="row m-1">
            <div class="col-4 col-md-3 text-right">Điểm</div>
            <div class="col-8 col-md-9">
                <input name="Diem" placeholder="Điểm" class="w-100" />
            </div>
        </div>
        <div class="row m-1">
            <div class="col-4 col-md-3 text-right">Hệ số</div>
            <div class="col-8 col-md-9">
                <input name="HeSo" placeholder="Hệ số" class="w-100" />
            </div>
        </div>
        <div class="row m-1">
            <div class="col-4 col-md-3 text-right">Mã bảo mật</div>
            <div class="col-8 col-md-9">
                <span class="text-danger"><b>
                <?php echo $mangaunhien; ?>
                </b></span>
                <input name="MaBaoMat" placeholder="Mã bảo mật" class="w-25" />
            </div>
        </div>
        <div class="row m-1">
            <div class="col-4 col-md-3 text-right">Thông tin thêm</div>
            <div class="col-8 col-md-9">
                <textarea name="ThongTinThem" id="ThongTinThem" class="w-100" rows="5"></textarea>
            </div>
        </div>
        <div class="row m-1">
            <div class="col-4 col-md-3 text-right"></div>
            <div class="col-8 col-md-9">
                <button class="btn btn-success">Đăng ký</button>
                <button class="btn btn-danger" type="reset">Nhập lại</button>
            </div>
        </div>
    </form>
    <script>
        //Bước 1: Định nghĩa hàm
        function checkGmail(value, element) {
            let pattern = /^[a-z]+[0-9]*(\.[a-z]+)*@gmail.com$/i;
            return this.optional(element) || pattern.test(value);
        }
        $(function () {
            //Bước 2: gắn hàm kiểm tra vào jquery validation
            $.validator.addMethod("gmail", checkGmail, "Chưa đúng định dạng Gmail");

            $("#frmDangKy").validate({
                rules: {
                    MaSV: { required: true, rangelength: [13, 13] },
                    NgaySinh: { date: true },
                    Email: { email: true, required: true, gmail: true },
                    XacNhanEmail: { equalTo: "[name='Email']" },
                    SoTaiKhoan: { creditcard: true },
                    Hinh: { extension: "jpg|png|bmp", required: true },
                    Diem: { number: true, range: [0, 10] },
                    HeSo: { digits: true, min: 1 },
                    ThongTinThem: { maxlength: 255 },
                    MaBaoMat : {remote: "KiemTraBaoMat.php"}
                },
                messages: {
                    Hinh: { extension: "Chỉ chấp nhận file jpg|png|bmp", required: "*" },
                    NgaySinh: { date: "Chưa đúng định dạng" },
                    MaSV: { required: "*", rangelength: "Đúng format MSSV, ví dụ 44.01.104.004" }
                }
            });
        });
    </script>
</body>
</html>