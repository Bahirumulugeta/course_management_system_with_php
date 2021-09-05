<?php
$conn = new mysqli("localhost","root","","dls");
if($conn->connect_error) {
	die("Connection failed: ".$conn->connect_error);
	}


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$username=$_POST['username'];
$role=$_POST['r1'];
$program=$_POST['program'];
$departement=$_POST['departement'];
$year=$_POST['year'];
$Gender=$_POST['Gender'];
$Photo=$_POST['Photo'];

$Picture=$FILES['picture']['name'];

$folder="upload/";

move_uploaded_file($tmpname,$folder.$photo);


$q="INSERT INTO users(fname,lname,email,username,password,role,program,departement,year,Gender,photo) VALUES('$fname','$lname','$email','$username','$pwd','$role','$program','$departement','$year','$Gender','$photo')";
mysqli_query($con,$query);
header('location:http://localhost/ocrs/studreg.php");
}
?>