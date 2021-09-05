<?php
$conn = new mysqli("localhost","root","","dls");
if($conn->connect_error) {
	die("Connection failed: ".$conn->connect_error);
	}


$value=$_POST['gid`'];
$value=$_POST['value'];
$sname=$_POST['studentname'];
$mark=$_POST['mark'];
$departement=$_POST['departement'];
$year=$_POST['year'];
$grade=$_POST['grade'];
$photo`=$_POST['photo`'];
    
   $q="INSERT INTO `grade`(`gid`, `value`, `Studentname`, `Mark`, `Departement`, `Year`,`photo`) 
   VALUES ('$gid`','$value','$studentname','$mark','$departement','$year','$photo`');
    mysqli_query($conn,$q);
    header("Location: profgrade.php");



?>