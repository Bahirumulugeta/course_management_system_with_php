<?php
ob_start();
session_start();
include("database.php");
if($conn->connect_error) {
	die("Connection failed: ".$conn->connect_error);
 }
else{
    $username=$_SESSION['username'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $year=$_POST['year'];
    $semister=$_POST['semister'];
    $docFile=$_FILES['myfile']['name'];
    $isAccepted='no';
    $fileTarget ="uploads/files/".$docFile;
    $q="UPDATE students SET year='$year', semister='$semister',docFile='$docFile',isAccepted='$isAccepted' WHERE username='$username'";
    if (move_uploaded_file($_FILES['myfile']['tmp_name'], $fileTarget)) {
           $msg = "uploaded successfully";
           mysqli_query($con,$q);
           header("Location: login1.php");
          
      }else{
        $msg = "Failed to upload the file";
      }
      
  }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             

?>