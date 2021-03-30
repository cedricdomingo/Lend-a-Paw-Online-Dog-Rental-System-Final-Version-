<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Breeds </title>
	        <link rel="stylesheet" href="style.css">
		<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine:bold,bolditalic|Inconsolata:italic|Droid+Sans">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inconsolata">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  </head>
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
  <body>
  <input type="text" name="search" id="search" placeholder="U Pick" />
  <i class="fa fa-search"></i>
  
  <a href="appointment.php">Appointment</a>
    <table align="center">
      <thead>
        <tr>
          <th>Location</th>
          <th>Size</th>
          <th>Age</th>
		  <th>IMG</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Vancouver</td>
          <td>Small</td>
          <td>2</td>
		  <td><img src="../img/dog12.jpg" class="dogs"  height=150 width=150> </th>
        </tr>
        
        <tr>
          <td>Burnaby</td>
          <td>Medium</td>
          <td>5</td>
		  <td><img src="../img/dog13.jpg" class="dogs"  height=150 width=150> </th>
        </tr>
		
		 <tr>
          <td>Coquitlam</td>
          <td>Large</td>
          <td>3</td>
		  <td><img src="../img/2.png" class="dogs"  height=150 width=150> </th>
        </tr>
		 
      </tbody>
    </table>
    <script>
      const searchInput = document.getElementById("search");
      const rows = document.querySelectorAll("tbody tr");
      console.log(rows);
      searchInput.addEventListener("keyup", function (event) {
        const q = event.target.value.toLowerCase();
        rows.forEach((row) => {
          row.querySelector("td").textContent.toLowerCase().startsWith(q)
            ? (row.style.display = "table-row")
            : (row.style.display = "none");
        });
      });
    </script>
  </body>
</html>
