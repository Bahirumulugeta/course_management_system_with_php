<?php
      ob_start();
      session_start();
      include 'database.php';

      $examId=$_POST['examId'];
      $title=$_POST['title'];
      $course=$_POST['course'];
      $date=$_POST['date'];

      $q="UPDATE exam SET title='$title', course='$course',date='$date' WHERE examId ='$examId'";
      mysqli_query($con,$q);
      echo '<script>alert("Updated successfully");</script>';
      echo("<script>window.location = 'adminexam.php';</script>");
     
?>

