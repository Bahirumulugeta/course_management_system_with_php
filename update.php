<!DOCTYPE html>
<?php
ob_start();
session_start();
include("database.php");
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
<body style="text-align:center;">
    <div id="header">
			<div>
				<span style="color:navy; font-size:30px">Course management system</span>
				<ul >
					<li class="menu" >
						<a href="index.php" style="text-decoration: none;">Home</a>
					</li>
					<li class="selected">
						<a href="login1.php" style="text-decoration: none;">Login</a>
					</li>
					<li class="menu">
						<a href="studreg.php" style="text-decoration: none;">Register</a>
					</li>
				</ul>
	        </div>
	</div>  <br><br>

<div class="wrapper">
   <div class="title">
       Update Password 
    </div>
    <form action="" method="POST" class="form">
    <div class="inputfield">
        <label><b>Your Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>
    </div>
    <div class="inputfield">
        <label><b>New Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
    </div><br><br>
    <div class="inputfield">
        <button type="submit" name="submit" class="btn">Update</button>       
    </div>
    <br><br>
</script>
  </div>
</form>
<?php
	if(isset($_POST['submit']))
	{
		$username=$_POST['username']; 
		$password1=$_POST['password']; 
		// echo "<script>alert('$password1');</script>";
		$sql="UPDATE users SET password='$password1' WHERE username='$username'";
		mysqli_query($con, $sql);
		echo '<script>alert("Updated successfully");</script>';
		echo("<script>window.location = 'login1.php';</script>");
	}
?>
</body>
</html>
