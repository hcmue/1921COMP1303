<?php
class DataProvider 
{
	public static function ExecuteQuery($sql)
	{
		try{
			$dsn = "mysql:host=localhost;dbname=qlbanhoat5";
			$dbh = new PDO($dsn, "root", "");
			$dbh->query("SET NAMES UTF8");
			$result = $dbh->query($sql);
			$dbh = null;
			return $result;
		}catch(Exception $ex){
			$dbh = null;
			return null;
		}
	}
}
?>