<html>
<head></head>
<body>
<?php
$thanhpho = array("HN" => "Hà Nội", "HCM" => "Hồ Chí Minh", "CT" => "Cần Thơ", "DN" => "Đà Nẵng");

?>
Thành phố: 
<select name="thanhpho">
	<?php
		foreach($thanhpho as $k => $v){
			echo "<option value=\"{$k}\">{$v}</option>";
		}
	?>
</select>
</body>
</html>