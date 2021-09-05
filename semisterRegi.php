<?php
ob_start();
session_start();
include 'database.php';
?>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CMS</title>
	<link rel="stylesheet" href="css/signup.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body >
    <div id="header">
			<div>
				<span style="color:navy; font-size:30px">Course management system</span>
				<ul >
					<li class="menu" >
						<a href="index.php" style="text-decoration: none;">Home</a>
					</li>
					<li class="menu">
						<a href="logout.php" style="text-decoration: none;">Logout</a>
					</li>
				</ul>
			</div>
	</div> <br>
<h2 style="text-align:center;color:navy">semister registration</h2>
<br><br> 
    <div class="wrapper">
    <div class="title">
      Semister Registration Form
    </div>
      <form action="upload7.php" method="post" class="form" enctype="multipart/form-data">
        <div class="inputfield">
          <label>First Name</label>
          <input type="text" name="fname" class="input" >
       </div>  
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" name="lname" class="input">
       </div>               
       <div class="inputfield">
          <label>Year</label>
          <div class="custom_select">
            <select name="year">
                <option value="">Select...</option>
                <option value="1st year">1st year</option>
                <option value="2nd year">2nd year</option>
                <option value="3rd year">3rd year</option>
                <option value="4th year">4th year</option>
                <option value="5th year">5th year</option>
            </select>
          </div>
       </div> 
       <div class="inputfield">
          <label>Semister</label>
          <div class="custom_select">
            <select name="semister">
                <option value="">Select...</option>
                <option value="1st semister">1st semister</option>
                <option value="2nd semister">2nd semister</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
            <label for="Pincode">Upload Document</label>
            <input type="file" name="myfile"> <br></div> 
      <div class="inputfield">
        <input type="submit" name="submit" value="Register" class="btn">
      </div>
      </form>
    </div>
</body>
</html>
