<?php
//print_r($_FILES["myfile"]);
//kiểm tra xem file được upload thành công lên thư mục tạm chưa
if($_FILES["myfile"]["error"] == 0)
{
	$chuoi = <<< EOD
		<div>Các thuộc tính của file upload:<br>
		Tên file: {$_FILES["myfile"]["name"]}.<br>
		Loại file: {$_FILES["myfile"]["type"]}.<br>
		Size: {$_FILES["myfile"]["size"]} b.<br>
		Lưu trữ tại: data/{$_FILES["myfile"]["name"]}.</div>
EOD;

	//di chuyển file về thư mục chỉ định
	if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "./data/".$_FILES["myfile"]["name"]))
	{
		//ghi tên file vào trong CSDL
		
		echo $chuoi;
	}
	else
	{
		echo "Di chuyển file không thành công";
	}
}
else{
	echo $_FILES["myfile"]["error"];
}
?>