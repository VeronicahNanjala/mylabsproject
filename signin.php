<?php 
session_start();
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
	<?php 
	$username="";
	$password="";


	$nameErr="";
	$mailErr="";
	$passwordErr="";


	if(isset($_POST["submit"])){
		if(isset($_POST["username"]) && !empty($_POST["username"])){
			$username=$_POST["username"];
		}
		else
		{
			$nameErr="Required";
		}

		if(isset($_POST["password"]) && !empty($_POST["password"])){
			$password=$_POST["password"];
		}
		else
		{
			$passwordErr="Required";
		}

		// database connection
			$dbconnect = mysqli_connect('localhost','root','','lab');
			
			//TEST connection
			if(!$dbconnect){
				echo 'not connected';
					}else{
					echo 'connection established';

					// select users from the database
					$userlogin = mysqli_query($dbconnect, "SELECT * FROM customer WHERE cus_uname='$username'");

					 //confirm details offered by user
					 if(mysqli_num_rows($userlogin)==1){
					 	$row=mysqli_fetch_assoc($userlogin);
					 	//$matches=password_verify($row['cus_pw'],$password);
					 	$passwordDb=$row['cus_pw'];
					//direct the user to select page
					 	if(password_verify($password,$passwordDb)){
					 		$_SESSION['users']=$username;
					 	header("location:index.php");
					 	}else{echo "<br>"."Could not sign you in. Try again";}
					 }
		else{
			echo "invalid user";
			}
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
			<input type="text" name="username">	 
			<span class="err">*<?php echo $nameErr;?></span><br><br>
		</td>
     </tr>
     <tr>
     	<td>
		Enter password:
			</td>
			<td>
				<input type="password" name="password">	
				<span class="err">*<?php echo $passwordErr;?></span><br><br>
			</td>
	<tr>
			<td>
			</td>

			<td>
				<button name="submit" type="submit">Sign in</button>
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
