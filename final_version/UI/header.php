<?php
if(!isset($_SESSION))

{
	session_start();
}
if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Welcome to Lead A Paw</title>>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">

        
    </head>
	
    <body>
<div class="sidebar">
  <a href="mainpage.php">Home</a>
  <a href ="aboutus.php">About Us</a>
  <a href ="signup.php">Sign Up</a>
  <a href ="login.php">Login</a>
  <a href ="Breeds_info.php">Breeds</a>
  <a href ="contactus.php">Contact</a>
  <a href ="Payment.php">Payment</a>
  <a href ="appointment.php">Appointment</a>
  <a href ="googlemap.php">Map</a>
</div>

    </body>
    
</html>