<?php
ob_start();
session_start();
include 'database.php';
if(isset($_SESSION['role'])=='admin')
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
	<div style="text-align:center;">
	<h2 style="color:navy">Registrar Dashboard</h2>
    <form > 
      <div class="container">
        <input type="button" value ="View Students"  onclick="window.location.href='adminstud.php'"div style="background-color: teal; color: white; padding-top:<b>12px; padding-bottom: 6px;">
		<input type="button" value="View Instructor" onclick="window.location.href='adminprof.php'"div style="background-color: teal; color: white; padding-top: <b>12px; padding-bottom: 6px;">
	    <input type="button" value ="Add Instructor"  onclick="window.location.href='addinstructor.php'" div style="background-color: teal; color: white; padding-top: <b>12px; padding-bottom: 6px;">
		<input type="button" value="View Course" onclick="window.location.href='adminViewCourse.php'"div style="background-color: teal; color: white; padding-top: <b>12px; padding-bottom: 6px;">
	    <input type="button" value="Add Course" onclick="window.location.href='admincourse.php'"div style="background-color: teal; color: white; padding-top: <b>12px; padding-bottom: 6px;">
		<input type="button" value="View Examination" onclick="window.location.href='adminexam.php'"div style="background-color: teal; color: white; padding-top: <b>12px; padding-bottom: 6px;">
        <input type="button" value="Prepare Exam schedule" onclick="window.location.href='prepareExam.php'"div style="background-color: teal; color: white; padding-top: <b>12px; padding-bottom: 6px;">
		<input type="button" value="View add/drop courses" onclick="window.location.href='addAndDrop.php'"div style="background-color: teal; color: white; padding-top: <b>12px; padding-bottom: 6px;">
      </div>
    </form>
	</div>

</body>
</html>
</form>
<?php 
   
    }    
else
      header ("location:login1.php");
    ?>
</body>
</html>
