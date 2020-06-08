<?php
class DataProvider 
{
	public static function ExecuteQuery($sql)
	{
		try{
			$dsn = "mysql:host=localhost;dbname=qlbanhoat2";
			$dbh = new PDO($dsn, "root", "");
			$dbh->query("SET NAMES utf8");
			$result = $dbh->query($sql);
		}catch(Exception $ex){
		
		}
		finally{
			$dbh = null;
		}

		return $result;
	}
}
?>