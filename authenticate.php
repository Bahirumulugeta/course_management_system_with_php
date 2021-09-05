<?php
include("database.php");
if(isset($_POST['submit'])){
 $username=$_POST['username'];
 $password=$_POST['password'];
 //Protect mysqli Injection
 
 //Run Query to Database
 $sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
 $result=mysqli_query($sql);
 //Counting Numbers of mysqli row [if user Found row must be 1]
 $row=mysqli_num_rows($result);
 //Fetching User Informaiton from Database
 $userinfo=mysqli_fetch_assoc($result);
 $role=$userinfo['role'];
  
 if($row==1){
  //Initilizing SESSION with Differents user Role
  $_SESSION['login_user']=$username;
  $_SESSION['role']=$role;
  if($role=='admin'){
    
    
  header('location:admin.php');
  }
  elseif($role=='student'){
    
  header('location:student.php');
  }
  else{
  header('location:prof.php');
  }
   
   
 }
    else{
  echo "No User Found by Given Information";
 }
  
}
 
?>