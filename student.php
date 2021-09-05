<?php
ob_start();
session_start();

include 'database.php';
if(isset($_SESSION['role'])=='student')
{
$query1= mysqli_query($con,"SELECT * FROM `users` WHERE `username`='".$_SESSION['username']."' AND `role`='student' ");
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
<body>
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
    <h2 style="text-align:center;color:navy">Student Dashboard</h2>
    <form>
    <div class="container" style="text-align:center;">
        <input type="button" value="Add Course" onclick="window.location.href='studAddCourse.php'"div style="background-color: teal; color: white; padding-top: 12px; padding-bottom: 6px;">
        <input type="button" value="Drop Course " onclick="window.location.href='studDropCourse.php'"div style="background-color: teal; color: white; padding-top: 12px; padding-bottom: 6px;">
        <input type="button" value="View Course" onclick="window.location.href='studcoursedet.php'"div style="background-color: teal; color: white; padding-top: 12px; padding-bottom: 6px;">
        <input type="button" value="View Material" onclick="window.location.href='studmat.php'"div style="background-color: teal; color: white; padding-top: 12px; padding-bottom: 6px;">
        <input type="button" value="View Assignments" onclick="window.location.href='studass.php'"div style="background-color: teal; color: white; padding-top: 12px; padding-bottom: 6px;">
        <input type="button" value ="View Exam Schedule" onclick="window.location.href='viewExamDate.php'"div style="background-color: teal; color: white; padding-top: 12px; padding-bottom: 6px;">
        <input type="button" value="Update Password"  onclick="window.location.href='update.php'"div style="background-color: teal; color: white; padding-top: 12px; padding-bottom: 6px;">
        <input type="button" value ="Semister Registration" onclick="window.location.href='semisterRegi.php'"div style="background-color: teal; color: white; padding-top: 12px; padding-bottom: 6px;">
        
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
