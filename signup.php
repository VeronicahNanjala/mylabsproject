	<!DOCTYPE html>
	<html>
	<head>
		<title>signup</title>
		<link rel="stylesheet" 
		                     type="text/css" 
		                     href="style.css">
		<style type="text/css">
		
		.err{
			color: red;
		}
	</style>
	</head>
	<body style="background-color: skyblue">

<?php 
  $username = '';
  $email = '';
  $firstname = '';
  $lastname = '';
  $password = '';

  $usernameErr = '';
  $emailErr = '';
  $firstnameErr = '';
  $lastnameErr = '';
  $passwordErr = '';

  if(isset($_POST["submit"])){
		if(isset($_POST["firstname"]) && !empty($_POST["firstname"])){
			$firstname=$_POST["firstname"];
		}
		else
		{
			$firstnameErr="Required";
		}

		if(isset($_POST["lastname"]) && !empty($_POST["lastname"])){
			$lastname=$_POST["lastname"];
		}
		else
		{
			$lastnameErr="Required";
		}

		if(isset($_POST["username"]) && !empty($_POST["username"])){
			$username=$_POST["username"];
		}
		else
		{
			$usernameErr="Required";
		}

		if(isset($_POST["email"]) && !empty($_POST["email"])){
			$email=$_POST["email"];
		}
		else
		{
			$emailErr="Required";
		}

		if(isset($_POST["password"]) && !empty($_POST["password"])){
			$encryptedCode=password_hash($_POST["password"], PASSWORD_DEFAULT);
			$password=$encryptedCode;
		}
		else
		{
			$passwordErr="Required";
		}


		//make database connection 
		$dbcon = mysqli_connect('localhost','root','','lab');
		//check if connection is successful
		if(!$dbcon){
			echo 'Database connection failed';
			//exit();
		}
		else{
			echo 'Connection succesful';
			//write query
			$sql = sprintf("INSERT INTO customer(cus_fname, cus_lname, cus_uname,cus_email,cus_pw)
					VALUES('%s','%s','%s','%s','%s')", 			
					mysqli_real_escape_string($dbcon, $firstname),
					mysqli_real_escape_string($dbcon, $lastname),
					mysqli_real_escape_string($dbcon, $username),
					mysqli_real_escape_string($dbcon, $email),
					mysqli_real_escape_string($dbcon, $password)
					);
			//execute query
			$exec = mysqli_query($dbcon,$sql);
			if($exec){
				//echo "Insertion succesful";
			}else{echo "faild to insert";}

		}
    }

	?>

	<div class="logo" >
		<img src="logo.png" style="width:200px; height:80px; ">
	</div>


	<div align="center">
	<a href="index.php">Home</a>
	</div>

	<form align="center" action="" method="post">
		
		<input type="text" name="firstname" placeholder="first name">
		<span class="err">*<?php echo $firstnameErr?></span><br><br>
	    <input type="text" name="lastname" placeholder="last name">
	    <span class="err">*<?php echo $lastnameErr?></span><br><br>
	    <input type="text" name="username" placeholder="user name">
		<span class="err">*<?php echo $usernameErr?></span><br><br>
		<input type="email" name="email" placeholder="email">
		<span class="err">*<?php echo $emailErr?></span><br><br>
		<input type="password" name="password" placeholder="password">
		<span class="err">*<?php echo $passwordErr?></span><br><br>
		<input type="submit" name="submit">
	</form>

	<div class="body" align="center" style="height:0%, width:80%, background-color: skyblue;">
		<img src="shoe.png">
	</div>

	<div class="footer" align="center">
		 worldWideShipping now avalable
	</div>

	</body>
	</html>