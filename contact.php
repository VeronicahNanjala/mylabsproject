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
	<title>shoe</title>
	<link rel="stylesheet" 
                     type="text/css" 
                     href="style.css">
	<style type="text/css">
		
		.err{
			color: red;
		}
	</style>
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
	</div>

	<?php 
	//$name="";
	//$password="";
	//$ok="";

	$nameErr="";
	$mailErr="";
	$commentErr="";

		// class
	if(isset($_POST["submit"])){
		if(isset($_POST["name"]) && !empty($_POST["name"])){
			$name=$_POST["name"];
		}
		else
		{
			$nameErr="Required";
		}

		if(isset($_POST["email"]) && !empty($_POST["email"])){
			$password=$_POST["email"];
		}
		else
		{
			$mailErr="Required";
		}

	if(isset($_POST["comment"]) && !empty($_POST["comment"])){
			$comment=$_POST["comment"];
		}
		else
		{
			$commentErr="Required";
		}
	}
	?>


	<form name="myForm" action="" method="post">
    <table align="center">
    <tr>
    	<td>
			Enter name: 
		</td>
		<td>
			<input type="text" name="name">	 
			<span class="err"><?php echo $nameErr;?>*</span><br><br>
		</td>
     </tr>
     <tr>
     	<td>
		Enter email:
		</td>

		<td>
			<input type="email" name="email">	
			<span class="err">*<?php echo $mailErr;?></span><br><br>
		</td>
	</tr>

	<tr>
     	<td>
		Enter Message:
		</td>

		<td>
			<textarea type="text" name="comment" cols="50" rows="10"></textarea>	
			<span class="err">*<?php echo $commentErr;?></span><br><br>
		</td>
	</tr>

	<tr>
			<td>

			</td>

			<td style="padding-left: 45%">
				<button name="btn" type="submit">Submit</button>
			</td>
	</tr>
		</table>
	</form>

	<div class="body" align="center" style="height:10%, width:80%">
		<img src="shoe.png">
	</div>

	<div class="footer" align="center">
		 worldWideShipping now avalable
	</div>

</body>
</html>
