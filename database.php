<?php
   // define database related variables
   $database = 'dls';
   $host = 'localhost';
   $user = 'root';
   $pass = '';

   $con=mysqli_connect("$host","$user","$pass")or die("Failed To Connect");
//Selecting Database
mysqli_select_db($con,"$database")or die("Failed to select database");
   
?>