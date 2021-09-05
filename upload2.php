<?php
$conn = new mysqli("localhost","root","","dls");
$query = "SELECT * FROM exam";
$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);
if($conn->connect_error) {
	die("Connection failed: ".$conn->connect_error);
	}
$examId=$row+1;
$title=$_POST['title'];
$course=$_POST['course'];
$date=$_POST['date'];

$q= "INSERT INTO exam ( examId, title,course,date)
    VALUES ( '$examId','$title','$course','$date')" ;
    mysqli_query($conn,$q);
    echo '<script>alert("Exam date scheduled successfully");</script>';
    echo("<script>window.location = 'adminexam.php';</script>");
?>