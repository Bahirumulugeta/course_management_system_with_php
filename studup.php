<?php
$conn = new mysqli("localhost","root","","dls");
$query = "SELECT * FROM students";
$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);
$msg = "";
if($conn->connect_error) {
	die("Connection failed: ".$conn->connect_error);
 }
else{
    $id=$row+1;
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $pwd=$_POST['password'];
    $role='student';
    $program=$_POST['program'];
    $department=$_POST['Department'];
    $year=$_POST['year'];
    $semister=$_POST['semister'];
    $sex=$_POST['Gender'];
    $photo=$_FILES['picture']['name'];
    $docFile=$_FILES['myfile']['name'];
    $isAccepted='no';
    $imageTarget = "uploads/images/".$photo;
    $fileTarget ="uploads/files/".$docFile;
    $q1="INSERT INTO users(username,password,role) VALUES('$username','$pwd','$role')";
    $q="INSERT INTO students(id,fname,lname,email,username,program,department,year,semister,sex,photo,docFile,isAccepted) VALUES('$id','$fname','$lname','$email','$username','$program','$department','$year','$semister','$sex','$photo','$docFile','$isAccepted')";
    if (move_uploaded_file($_FILES['picture']['tmp_name'], $imageTarget) && move_uploaded_file($_FILES['myfile']['tmp_name'], $fileTarget)) {
           mysqli_query($conn,$q1);
           mysqli_query($conn,$q);
           echo '<script>alert("Registered successfully");</script>';
		       echo("<script>window.location = 'login1.php';</script>");        
      }else{
        $msg = "Failed to upload the file";
      }
      
  }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             

?>