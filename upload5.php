<?php
$conn = new mysqli("localhost","root","","dls");
$query = "SELECT * FROM instractors";
$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);
if($conn->connect_error) {
	die("Connection failed: ".$conn->connect_error);
	}

$insID=$row+1;
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$salary=$_POST['salary'];
$department=$_POST['department'];
$course=$_POST['course'];
$username=$fname."".$insID;
$password=$lname."".$insID;
$q1="INSERT INTO users(username,password,role) VALUES('$username','$password','instractor')";
$q= "INSERT INTO instractors ( insID, fname,lname,username,salary,department,course)
    VALUES ( '$insID','$fname','$lname','$username','$salary','$department','$course')" ;
mysqli_query($conn,$q1);
mysqli_query($conn,$q);
echo '<script>alert("The instractor is added successfully");</script>';
echo("<script>window.location = 'adminprof.php';</script>");

?>