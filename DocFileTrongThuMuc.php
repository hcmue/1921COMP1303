<div>
<?php
$dir = opendir("data");
while ($file = readdir($dir)) {
	//echo $file."<br>";
	if(file_exists("data/".$file))
	{
		//echo "File: ".$file."<br>";
		echo "<a href=\"data/".$file."\">".$file."</a><br>";
	}
}
closedir($dir);
?>
</div>