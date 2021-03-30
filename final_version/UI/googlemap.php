<!DOCTYPE html>
<html>
<head>
	<title>LOCATE MAPS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'header.php'?>
<div class="map_container">
	
	<h1> Google Map</h1>
	<?php
	
	if  (isset($_POST['submit_address'])){
		
		$address= $_POST['address'];
		$address=str_replace(" ","+",$address);
		
		?>
		<iframe width= "500" height="300" src="https://maps.google.com/maps?q=<?php echo
		$address;?>&output=embed"></iframe>
		<?php
	}
	?>
	<form method="POST">
	      <p>
		  <input type="text" name="address" placeholder="Enter Address">
		  </p>
		  <input type="submit" name="submit_address">
	</form>

	</div>
</body>
</html>