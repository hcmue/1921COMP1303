<?php
class DataProvider 
{
	public static function ExecuteQuery($sql)
	{
		try{
			$dsn = "mysql:host=localhost;dbname=qlbanhoat7";
			$dbh = new PDO($dsn, "root", "");
			$dbh->query("SET NAMES utf8");
			return $dbh->query($sql);
		}
		catch(Exception $ex)
		{
			return null;
		}
	}
}
?>