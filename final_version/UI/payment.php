
<?php 
session_start();

	include("db_connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$user_name = $_POST['user_name'];
		$email = $_POST['email'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$address = $_POST['address'];
		$card_holder_name = $_POST['card_holder_name'];
		$amount = $_POST['amount'];
		$card_cvc = $_POST['card_cvc'];
		$type=$_POST['type'];
		$expiry_date = date('Y-m-d',strtotime($_POST['expiry_date']));

		if(!empty($user_name)&&!empty($email)&& !empty($first_name)&& !empty($last_name)
		&& !empty($address)&& !empty($card_holder_name)&& !empty($amount)&& 
		!empty($card_cvc)&& !empty($type)&&!empty($expiry_date)&& !is_numeric($user_name))
		{

			
			$user_id = random_num(20);
			$query = "insert into transaction (user_id,user_name,email,first_name,last_name,address,card_holder_name,
			amount,card_cvc,type,expiry_date) values ('$user_id','$user_name','$email','$first_name','$last_name',
			'$address','$card_holder_name','$amount','$card_cvc','$type','$expiry_date')";

			mysqli_query($con, $query);

			header("Location: checkout.php");
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
	<title>Payment</title>
</head>
<body>
    
	<style type="text/css">
	
	body{
		background:url(../img/bg1.jpg);
	    background-repeat: no-repeat;
	    background-size:cover;
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
		background-color:#9370DB;
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
			<div style="font-size: 20px;margin: 10px;color: black;text-align:center;">Payment Form</div>
			<div>User Name</div>
			<input id="text" type="text" name="user_name"><br><br>
            <div>First name</div>
			<input id="text" type="text" name="first_name"><br><br>
			 <div>Last name</div>
			<input id="text" type="text" name="last_name"><br><br>
			 <div>Email address</div>
			<input id="text" type="email" name="email"><br><br>
			<div>Billing Address</div>
			<input id="text" type="text" name="address"><br><br>
			<div>Payment Method</div>
			<label>VISA</label>
			<input id="text" type="radio" name="type" value="visa"><br><br>
			<label>MASTER</label>
			<input id="text" type="radio" name="type" value="master"><br><br>
			<label>Paypal</label>
			<input id="text" type="radio" name="type" value="paypal"><br><br>
			<div>Card Holder Name</div>
			<input id="text" type="text" name="card_holder_name"><br><br>
			<div>Card Number</div>
			<input id="text" type="text" name="card_number"><br><br>
			<div>Amount</div>
			<input id="text" type="text" name="amount"><br><br>
			<div>Card CVC</div>
			<input id="text" type="text" name="card_cvc"><br><br>
			<div>Expiry Date</div>
			<input id="text" type="date" name="expiry_date"><br><br>

			<input id="button" type="submit" value="pay">
			<a href="mainpage.php">Come back</a>

			
		</form>
	</div>
</body>
</html>