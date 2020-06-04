<?php
try{
	$link = @mysqli_connect("localhost", "root", "", "qlbanhoat5");// or die("Không thể mở CSDL");
	mysqli_query($link,"SET NAMES utf8");
	$sql = "SELECT MaHoa, TenHoa, GiaBan, Hinh FROM Hoa";
	$result = mysqli_query($link, $sql);
	mysqli_close($link);
	//print_r($result);
	while($row = mysqli_fetch_array($result))
	{
		echo "{$row[0]} - {$row['TenHoa']}<br>";
	}
} catch(Exception $ex){
	echo "Không thể mở CSDL";
}
?>
<h4>End of ...</h4>