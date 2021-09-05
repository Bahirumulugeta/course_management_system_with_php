<?php
ob_start();
session_start();
$conn = new mysqli("localhost","root","","dls");
$query = "SELECT * FROM assignment";
$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);

if($conn->connect_error) {
	die("Connection failed: ".$conn->connect_error);
 }
else{
    $id=$row+1;
    $username=$_SESSION['username'];
    $title=$_POST['title'];
    $course=$_POST['course'];
    $path=$_FILES['Filename']['name'];
    $date=$_POST['date'];
    $fileTarget ="uploads/files/".$path;
    
    $q="INSERT INTO assignment(id,username,title,course,file,submissionDate) VALUES('$id','$username','$title','$course','$path','$date')";
    if (move_uploaded_file($_FILES['Filename']['tmp_name'], $fileTarget)) {
           $msg = "uploaded successfully";
           mysqli_query($conn,$q);
           header("Location: prof.php");
          // echo "<script>alert('$department');</script>";
      }else{
        $msg = "Failed to upload the file";
      }
      
  }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             

?>