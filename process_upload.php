<?php
//print_r($_FILES["myfile"]);
//kiểm tra xem file được upload thành công lên thư mục tạm chưa
if($_FILES["myfile"]["error"] == 0)
{
	//di chuyển file về thư mục chỉ định
	if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "./data/".$_FILES["myfile"]["name"]))
	{
		//ghi tên file vào trong CSDL
	}
	else
	{
		echo "Di chuyển file không thành công";
	}
}
else{
	echo "Lỗi: ".$_FILES["myfile"]["error"];
}
?>