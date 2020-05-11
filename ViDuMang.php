<?php
$cars = array('Volvo', 'Mecedes', 'Toyota');
//sort($cars);

$num = count($cars);

for($i = 0; $i < $num; $i++)
{
	//echo "{$cars[$i]}.<br>";
}

foreach($cars as $k)
{
	echo "$k<br>";
}

foreach($cars as $k => $v)
{
	echo "$k ==> $v<br>";
}



echo "We have $num items<br>";
?> 