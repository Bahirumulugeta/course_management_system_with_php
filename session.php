<?php
include("database.php");
session_start();
$user_check=$_SESSION['login_user'];
 
$sql="SELECT*FROM user WHERE username='$user_check'";
$result=mysqli_query($sql);
$row=mysqli_fetch_assoc($result);
$login_session=$row['username'];
$login_role=$row['role'];
if(!isset($login_session)){
 mysqli_close;
 header('location:login.php');
}
?>