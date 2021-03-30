<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Welcome to Lead A Paw</title>	
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	
	</head>
   <body>
   
	<div class="wrapsearch">
      <div class="search">
      <input type="text" class="searchTerm" placeholder="Dogs Love Your">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
      </button>
      </div>
       </div>
	  <div class="circle"></div>
	 
<div class="slider">

  <div class="slides">
   <input type="radio" name="radio-btn" id="radio1">
   <input type="radio" name="radio-btn" id="radio2">
   <input type="radio" name="radio-btn" id="radio3">
   <input type="radio" name="radio-btn" id="radio4">
   
   <div class="slide first">
   <img src="../img/dog2.jpg" alt=""> </img>
   </div>
   
   <div class="slide second">
   <img src="../img/dog3.jpg" alt=""> </img>
   </div>
   
   <div class="slide second">
   <img src="../img/dog4.jpg" alt=""> </img>
   </div>
   
   <div class="slide second">
   <img src="../img/dog5.jpg" alt=""> </img>
   </div>
   
   <div class = "navigation-auto">
      <div class="auto-btn1"></div>
	  <div class="auto-btn2"></div>
	  <div class="auto-btn3"></div>
	  <div class="auto-btn4"></div>
   </div>
   
  </div> 
   <div class ="navigation-manual">
      <label for="radio1" class="manual-btn"> </label>
	  <label for="radio2" class="manual-btn"> </label>
	  <label for="radio3" class="manual-btn"> </label>
	  <label for="radio4" class="manual-btn"> </label>
   </div> 

   </div>

<script type="text/javascript">
 var c= 1;
 setInterval(function(){
   document.getElementById('radio'+counter).checked=true;
   c++;
   if(c>3){
   c=1;}
 },500);
 </script>
    </body>
	<?php include 'dogownerfooter.php'?>
</html>