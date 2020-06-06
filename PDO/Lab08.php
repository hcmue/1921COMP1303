<?php
include_once("DataProvider.php");
$sql = "SELECT MaHoa, TenHoa, GiaBan, Hinh FROM hoa";
$dsHoa = DataProvider::ExecuteQuery($sql);
//print_r($dsHoa);
while($hoa = $dsHoa->fetch())
{
	echo $hoa["TenHoa"]."<br>";
}
?>