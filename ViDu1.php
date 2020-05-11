<?php
$var1 = "100" + 15;
$var2 = "100" + 15.0;
$var3 = 39+ " Steps";
echo $var1."<br>";
echo $var2."<br>";
echo $var3."<br>";
for($i = 1; $i < 50; $i++)
{
	echo "NV".str_pad($i*12, 6, "0", STR_PAD_LEFT)."<br>";
}

$z = "yz";
$$z = "xyz";
$$$z = 100;
echo '$z $yz $xyz $$$z';
?>