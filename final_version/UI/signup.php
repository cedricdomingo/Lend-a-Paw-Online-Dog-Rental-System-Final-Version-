<?php 
session_start();

	include("db_connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];

		if(!empty($user_name) && !empty($password) &&!empty($email)&& !empty($phone)&& !is_numeric($user_name))
		{

			
			$user_id = random_num(20);
			$query = "insert into clients (user_id,user_name,password,email,phone) values ('$user_id','$user_name','$password','$email','$phone')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>
    <?php include 'header.php'?>
	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: #FFF0F5;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: black;text-align:center;">Signup</div>
            <div>Username</div>
			<input id="text" type="text" name="user_name">
			 <div>Password</div>
			<input id="text" type="password" name="password">
			 <div>Email</div>
			<input id="text" type="email" name="email">
			 <div>Phone</div>
			<input id="text" type="text" name="phone">

			<input id="button" type="submit" value="Signup">

			<a href="login.php">Click to Login</a>
		</form>
	</div>
</body>
<?php include 'footer.php'?>
</html>