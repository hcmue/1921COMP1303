<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <form method="post">
        Số dòng: <input name="SoDong" type="number" min="1" required><br>
        Số cột: <input name="SoCot" type="number" min="1" required><br>
        <button>Vẽ bảng</button>
    </form>

<?php
$dong = @$_REQUEST["SoDong"];
$cot = @$_REQUEST["SoCot"];

if(isset($dong) && isset($cot)){
    echo "$dong dòng, $cot cột";

    echo "<table border='1' cellspacing='0'>";

    //dòng đầu tiên
    echo "<tr>";
    for($i = 1; $i <= $cot; $i++)
	    echo "<th>Cột {$i}</th>";
    echo "</tr>";

    //các dòng còn lại
    for($d = 1; $d <= $dong; $d++)
    {
	    echo "<tr>";
	    for($c = 1; $c <= $cot; $c++)
		    echo "<td>dòng {$d}, cột {$c}</td>";
	    echo "</tr>";
    }
    echo "</table>";
}
?>
</body>
</html>