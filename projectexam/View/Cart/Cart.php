<h3><span><a href="index.php?mod=Cart&act=Detail">Giỏ hàng của bạn</a></span></h3>
<div id="about-me">
<p><a href="index.php?mod=Cart&act=Detail" class="cart_anchor"><img src="images/carts.png" id="me" alt="Yeah, it´s me!" title="Giỏ hàng của bạn"></a>
	<?php
	if(isset($_SESSION["MyCart"]))
	{
		$sum=0;
		foreach($_SESSION["MyCart"] as $item)
		{
			$sum+=$item;
		}
		echo "<div id=\"cart\">Số mặt hàng: ".count($_SESSION["MyCart"])."<br />Tổng số lương: $sum</div>";
	}
	else 
	{
		echo "<div id=\"cart\">&nbsp;<br />&nbsp;</div>";
	}
	if(isset($_SESSION["lgUserID"]))
	{		
		echo "<p>Xin chào $_SESSION[lgUserName]</p>";
		echo "<p><a href=\"index.php?mod=order&act=show\">Xem thông tin đặt hàng</a></p>";
	}
	else
		echo "<p>&nbsp;</p>";
	?>
    </p>
    <div id="dsSanPhamMua"></div>
</div> <!-- /about-me -->
<hr class="noscreen">