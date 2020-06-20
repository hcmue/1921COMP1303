<?php
	include_once("Model/Flower.php");
	$product = new Flower();

	include_once("Model/Category.php");
	$category=new Category();
	$cate = $category->GetCategories();
	
	if(isset($_GET['id']))
	{
		$MaHoa = $_GET['id'];
		$row = $product->GetFlowerByID($MaHoa);
		include_once("View/Flower/Sua.php");
		if(isset($_POST['btnChange']))
		{
			include("Model/Upload.php");
			$TenHoa=$_POST["txtTenHoa"];
			if(isset($_FILES['txtImageUrl']))
				$Hinh = Upload::UploadImage("txtImageUrl","hoa");
			$GiaBan=$_POST["txtGiaBan"];
			$ThanhPhan=addslashes($_POST['txtThanhPhan']);
			$MaLoai=$_POST["cboLoaiHoa"];
			if(!isset($_FILES['txtImageUrl']))
				$ret=$product->UpdateFlower($MaHoa,$MaLoai,$TenHoa,$GiaBan,$ThanhPhan);
			else
			{
				$ret=$product->UpdateFlower($MaHoa,$MaLoai,$TenHoa,$GiaBan,$ThanhPhan,$Hinh);
			}
			if($ret>0)
			{
				header("location:admin.php?mod=Flower&act=QuanLy");
			}
			else
				echo "<p class=\"error\">Lỗi</p>";
		}
	}
?>