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
		$dog_name=$_POST['dog_name'];
		$dog_age=$_POST['dog_age'];
		$price=$_POST['price'];	
		$breed=$_POST['breed'];
		$location=$_POST['location'];
		$start_time=$_POST['start_time'];
		$end_time=$_POST['end_time'];
		
      if(!empty($user_name)&&!empty($password)&& !empty($email)&& !empty($phone)
		&& !empty($dog_name)&& !empty($dog_age)&& !empty($price)&& 
		!empty($breed)&& !empty($location)&&!empty($start_time)&& !empty($end_time)&&!is_numeric($user_name))
		{

			
			$user_id = random_num(20);
			$query = "insert into dogowner (user_id,user_name,password,email,phone,dog_name,dog_age,price,breed,
			location,start_time,end_time) values ('$user_id','$user_name','$password','$email','$phone','$dog_name','$dog_age',
			'$price','$breed','$location','$start_time','$end_time')";

			mysqli_query($con, $query);

			header("Location: dogownerlogin.php");
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
	<title>Dog Owner Signup</title>
</head>
<body>

	<style type="text/css">
	body{
		 background:url(../img/bg1.jpg);
	}
	
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

		background-color:  #FFF0F5;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: black;text-align:center;">Dog Owner Sign Up</div>
            <div>Username</div>
			<input id="text" type="text" name="user_name">
			 <div>Password</div>
			<input id="text" type="password" name="password">
			 <div>Email</div>
			<input id="text" type="email" name="email">
			 <div>Phone</div>
			<input id="text" type="text" name="phone">
			 <div>Dog Name</div>
			<input id="text" type="text" name="dog_name">
			<div>Dog Age</div>
			<input id="text" type="text" name="dog_age">
			<div>Price</div>
			<input id="text" type="text" name="price">
			<div>Breed</div>
			<label>Small</label>
			<input id="text" type="radio" name="breed" value="small">
			<label>Medium</label>
			<input id="text" type="radio" name="breed" value="medium">
			<label>Large</label>
			<input id="text" type="radio" name="breed" value="large">
			<div>Location</div>
			<input id="text" type="text" name="location">
			<div>Start Time</div>
			<input id="text" type="time" name="start_time">
			<div>End Time</div>
			<input id="text" type="time" name="end_time">
			

			<input id="button" type="submit" value="Signup">

			<a href="dogownerlogin.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>