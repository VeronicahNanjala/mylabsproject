<?php
session_start();

// kill all sessions and redirect to log in 
session_destroy();

header("location:login.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>logout</title>
</head>
<body>
<h1>you have been signed out</h1>
</body>
</html>