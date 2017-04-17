<?php
session_start();
// check if logged in 
if (!isset($_SESSION['users'])) {
	header("location:signin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>menshowsbought</title>
	<link rel="stylesheet" 
                     type="text/css" 
                     href="style.css">
</head>
<body class="body" style="background-color: skyblue">

<div class="logo" >
<img src="logo.png" style="width:200px; height:80px; ">
</div>

	<div class="menu">
	<a href="index.php">Home</a>
	<a href="men.php">Mens</a>
	<a href="women.php">Womens</a>
	<a href="company.php">Company</a>
	<a href="contact.php">Contact</a>
	<a href="logout.php">Sign out</a>
	</div>

<div align="center">
    <h1>Number of shoes bought by men</h1>
     <div class="c">Enter the number of shoes bought:<div>
     <input type="text" name="shoes" class="p" id="userInput"><br>
     <button name="Increase" type="submit" id="deacrement" onclick="fillTable()">Number sold</button>
    </div>

<div align="left">
	<table id="table" class="tbl">
	<tr>
		<th>Counter</th>
		<th>Number sold</th>
	</tr>
	 </table>
</div>

<div align="right">
	<p> Maximum sold</p>
	  <p id="num">Max</p>
</div>


<div class="footer">
 worldWideShipping now avalable
 </div>
<script type="text/javascript" src="javaScriptShoes.js"></script>
</body>
</html>
