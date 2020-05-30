<?php
try{
	$link = @mysqli_connect("localhost", "root", "", "qlbanhoat7");// or die("Lỗi kết nối");

	mysqli_query($link, "SET NAMES 'utf8' ");

	$sql = "SELECT MaHoa, TenHoa, GiaBan, Hinh FROM Hoa";

	$result = mysqli_query($link, $sql);

	while($row = mysqli_fetch_array($result))
	{
		echo "{$row['TenHoa']} - {$row['GiaBan']}.<br>";
	}

	mysqli_close($link);
}
catch(Exception $ex){
	echo "Lỗi kết nối.";
}
?>
<h2>DANH SÁCH</h2>
<table>
</table>