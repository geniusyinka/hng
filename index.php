<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
    header("location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome!</title>
	 <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>


<center>
Congratulation! It works! 
<br>
<a href="logout.php" class="btn2">Click here</a> 
<br>
to Logout.

</center>
</body>
</html>
