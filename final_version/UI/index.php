<?php 
session_start();

	include("db_connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>
    <?php include 'header.php'?>
	<a href="logout.php">Login</a>
	<h1>Log out successful!</h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</body>
<?php include 'footer.php'?>
</html>