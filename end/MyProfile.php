<?php
include_once("CheckLogin.php");
?>
<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
	<title>My Profile</title>
	</head>

<body>
<div>
Xin chào : <b><?php echo $_SESSION["Username"]; ?></b>.<br>
<a href="Logout.php">Logout</a>.
</div>
</body>
</html>