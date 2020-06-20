<?php
include_once("Model/Flower.php");
$product = new Flower();
include_once("Model/Category.php");
$category=new Category();
$cate = $category->GetCategories();

include_once("view/Flower/Them.php");
if(isset($_POST['btnSave']))
{
	include_once("Model/Upload.php");
	$TenHoa = $_POST["txtTenHoa"];
	$Hinh = Upload::UploadImage("txtImageUrl","Upload");
	$GiaBan=$_POST["txtGiaBan"];
	$ThanhPhan=addslashes($_POST['txtThanhPhan']);
	$MaLoai=$_POST["cboLoaiHoa"];
	if($fileName!="")
	{	
		if(is_numeric($GiaBan))
		{
			$ret = $product->InsertFlower($MaLoai, $TenHoa, $Hinh,$GiaBan, $ThanhPhan);
			if($ret>0)
			{
				header("location:admin.php?mod=Flower&act=QuanLy");
			}
			else
				echo "<p class=\"error\">Thêm bị lỗi</p>";
		}
		else
		{
			echo "<p>Giá không hợp lệ</p>";
		}
	
	}
	else
	{
		echo "<p>Vui lòng chọn file ảnh</p>";
	}
}
?>