<?php
$conn = new mysqli("localhost","root","","dls");
$query = "SELECT * FROM course";
$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);
if($conn->connect_error) {
	die("Connection failed: ".$conn->connect_error);
	}
    $cId=$row+1;
    $cname=$_POST['cname'];
    $credits=$_POST['credits'];
    $department=$_POST['department'];
    $year=$_POST['year'];
    $semister=$_POST['semister'];
   $q= "INSERT INTO course ( cId,cname,credits,department,year,semister)
    VALUES ( '$cId','$cname','$credits','$department','$year','$semister')" ;
    mysqli_query($conn,$q);
    echo '<script>alert("Added successfully");</script>';
	echo("<script>window.location = 'adminViewCourse.php';</script>");
?>