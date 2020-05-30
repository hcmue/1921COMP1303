<?php
try{
	$link = @mysqli_connect("localhost", "root", "", "qlbanhoat7");// or die("Lỗi kết nối");

	mysqli_query($link, "SET NAMES 'utf8' ");

	$sql = "SELECT MaHoa, TenHoa, GiaBan, Hinh FROM Hoa";

	$result = mysqli_query($link, $sql);	

	mysqli_close($link);
}
catch(Exception $ex){
	echo "Lỗi kết nối.";
}
?>
<h2>DANH SÁCH</h2>
<table>
	<tr>
		<th>STT</th>
		<th>Hình</th>
		<th>Tên hoa</th>
		<th>Giá bán</th>
	</tr>
<?php
	$i = 1;
	while($row = mysqli_fetch_array($result))
	{
		$gia = number_format($row["GiaBan"]);
		$chuoi = <<< EOD
	<tr>
		<td>{$i}</td>
		<td>
			<img src="hoa/{$row["Hinh"]}" height="100" />
		</td>
		<td>{$row["TenHoa"]}</td>
		<td>{$gia} đ</td>
	</tr>
EOD;
		echo $chuoi; $i++;
	}
?>
	
</table>