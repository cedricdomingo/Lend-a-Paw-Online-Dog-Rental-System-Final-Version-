
<!DOCTYPE html>
<html>
<head>
	<title>View the appointment </title>
	<h1>View the Users INFO</h1>
	  <link rel="stylesheet" href="style.css">
		<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine:bold,bolditalic|Inconsolata:italic|Droid+Sans">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inconsolata">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>
<style>
    th,
    td {
      border-collapse:collapse;
	   margin-left: auto;
      margin-right: auto;
      width: 10px;
	  border-spacing: 25px 50px; 
      padding: 0.5rem;
      text-align: left;
	  
	 
    }
    table{
	 border-collapse: collapse;
     border-spacing: 25px 50px; 
	 margin-left: auto;
     margin-right: auto;
     width: 600px;
	 
	}
	 input {
      margin-bottom: 10px;
	  background:#FFF8DC;
    }
	i{
	 background:#FFF8DC;
	}
   
  </style>
	

	
	
	<table>
	    <tr> 
		    <th>Use ID</th>
			<th>Use Name</th>
			<th>Password</th>
			<th>Email</th>
			<th>Phone</th>
			
		</tr>
		<?php
		$con = mysqli_connect("localhost","root","","seproject");
        $sql= "SELECT * from clients";
		$result = $con->query($sql);
		
		if($result-> num_rows >0)
		{
			while ($row =$result-> fetch_assoc()){
				echo "<tr><th>" . $row['user_id']."</td><td>" . $row['user_name']."</td><td>". 
				$row['password']."</td><td>". $row['email']."</td><td>". $row['phone']."</td><tr>";
			}
		}else{
			echo "error!";
		}
		$con->close();
		
		?>
		
	</table>
</body>
</html>