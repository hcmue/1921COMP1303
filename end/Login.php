<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>

<body>
<form id="form1" name="form1" action="" method="post">
  <table cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        <td colspan="2">LOGIN PAGE</td>
      </tr>
      <tr>
        <td>Username</td>
        <td><input name="txtUser" type="text" required="required" id="txtUser" placeholder="Please input username"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input name="txtPass" type="password" required="required" id="txtPass" placeholder="Please fill password"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="btnLogin" id="btnLogin" value="Login"></td>
      </tr>
    </tbody>
  </table>
</form>
<?php
//print_r($_SERVER);
$user = @$_REQUEST["txtUser"];
$pass = @$_REQUEST["txtPass"];
if(isset($user) && isset($pass))
{
	//check đúng username, password trong CSDL
	//echo strlen($user);
	if(strlen($user) > 3)
	{
		session_start();
		$_SESSION["Username"] = $user;
		
		$requestUrl = $_SESSION["RequestUrl"];
		if(isset($requestUrl)){
			unset($_SESSION["RequestUrl"]);
		}
		else{
			$requestUrl = "MyProfile.php";
		}
		
		header("Location: $requestUrl");
	}
	else{
		echo "Sai thông tin đăng nhập";
	}
}
?>
</body>
</html>