<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CMS</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>

<body > 
    <div id="header">
			<div>
				<span style="color:navy;font-size:30px;">Course management system</span>
				<ul >
					<li class="selected">
						<a href="index.php">Home</a>
					</li>
					<li class="menu">
						<a href="login1.php">Login</a>
					</li>
					<li class="menu">
						<a href="studreg.php">Register</a>
					</li>
				</ul>
			</div>
	</div><br>
    <div  style="background-color: azure; color: navy ; padding-top: 10px; padding-bottom: 2px;text-align:center">
	<img src="uploads/RVU.png" alt="Paris" style="width:30%">
     <h1> Rift valley University  Bole Campus </h1>
		<h1> Online Registration System </h1>
        <h2 ><?php
            echo " " . date("d/m/Y") . "<br>";
            echo "Today is " . date("l");
        ?></h2>
      <body bgcolor="azure">
    </div>
    <div class="card" style="border-style: groove;">
        <h1 style="color:orange">Remember</h1>
        <h3 style="text-align:left">Before registering with the system, note that 
        you have an email address and that you have paid the registration fee and also donn't forget 
        to scan the receipt with educational certificate together.</h3>
    </div><br>
	<div id="footer" style="text-align:center">
				<h3 margin style="color:navy">Addis Ababa,Ethiopia</h3>
	</div>
	</div>
</body>
</html>
