<?php
ob_start();
session_start();

include 'database.php';
if(isset($_SESSION['role'])=='instractor')
{
$query1= mysqli_query($con,"SELECT * FROM `users` WHERE `username`='".$_SESSION['username']."' AND `role`='instractor' ");
$arr1 = mysqli_fetch_array($query1);
$num1 = mysqli_num_rows($query1); 
if($num1==1)
{
?>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CMS</title>
	<link rel="stylesheet" href="css/admin.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
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
	</div> 
 <h2 style="text-align:center;color:navy">Instructor Dashboard</h2>
<form>
  <div class="container" style="text-align:center;">
    <input type="button" value ="View Course"  onclick="window.location.href='profcourse.php'"div style="background-color: teal; color: white; padding-top:<b>12px; padding-bottom: 6px;">
    <input type="button" value="Add Material" onclick="window.location.href='profmat.php'"div style="background-color: teal; color: white; padding-top: <b>12px; padding-bottom: 6px;">
    <input type="button" value ="Add Assignment"  onclick="window.location.href='profass.php'" div style="background-color: teal; color: white; padding-top: <b>12px; padding-bottom: 6px;">
    <input type="button" value="View Exam Schedule" onclick="window.location.href='viewExamDate.php'"div style="background-color: teal; color: white; padding-top: <b>12px; padding-bottom: 6px;">
    <input type="button" value="Update Password" onclick="window.location.href='update.php'"div style="background-color: teal; color: white; padding-top: <b>12px; padding-bottom: 6px;">
  </div>
</form>
 <?php 
   }
    else
    {
      header ("location:login1.php");
      }
    }    
else
      header ("location:login1.php");
    ?>
</body>
</html>
