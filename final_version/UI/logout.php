<?php

session_start();

if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);

}

header("Location: login.php");
die;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
</head>
<body>

	<?php include 'header.php'?>
	<h1>Logout sucessfully!</h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</body>
<?php include 'footer.php'?>
</html>