<?php
	if(isset($_GET["MaHoa"]))
	{
		$MaHoa=(int)$_GET["MaHoa"];
		include_once("Model/Flower.php");
		$prod = new Flower();
		$row = $prod->GetFlowerByID($MaHoa);
		$categoryID= $row['MaLoai'];
		$result = $prod->GetProductsOrther($MaHoa,$categoryID);
		include_once("view/Flower/ChiTiet.php");
	}
?>