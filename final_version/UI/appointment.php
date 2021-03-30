<?php 
session_start();

	include("db_connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$user_name = $_POST['user_name'];
		$email = $_POST['email'];
		$date = date('Y-m-d',strtotime($_POST['date']));
		$time = $_POST['time'];

		if(!empty($user_name)&&!empty($email)&&!empty($date)&&!empty($time)&& !is_numeric($user_name))
		{

			
			$user_id = random_num(20);
			$query = "insert into appointment (user_id,user_name,email,date,time) values ('$user_id','$user_name','$email','$date','$time')";

			mysqli_query($con, $query);

			header("Location: mainpage.php");
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
	<title>Book An Appointment</title>
	
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

		background-color:#FFF0F5;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form action="booksuccessfully.php" method="post" >
			<div style="font-size: 20px;margin: 10px;color:black;text-align:center">Appointment</div>
            <div>Username</div>
			<input id="text" type="text" name="user_name">
			 <div>Email</div>
			<input id="text" type="email" name="email">
			 <div>Date</div>
			<input id="text" type="date" name="date">
			 <div>Time</div>
			<input id="text" type="time" name="time">

			<input id="button" type="submit" value="Book"><br><br>
						
		</form>
	</div>
</body>
<?php include 'footer.php'?>
</html>