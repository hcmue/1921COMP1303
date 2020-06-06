<?php
class DataProvider 
{
	public static function ExecuteQuery($sql)
	{
		try{
			$dn = "mysql:host=localhost;dbname=qlbanhoat7";
			$dbh = new PDO($dsn, "root", "");
			return $dbh->query($sql);
		}
		catch(Exception $ex)
		{
			return null;
		}
	}
}
?>