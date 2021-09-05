<!DOCTYPE html>
<?php
ob_start();
session_start();
include("database.php");
?>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CMS</title>
	<link rel="stylesheet" href="css/signup.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
    <div id="header">
			<div>
				<span style="color:navy; font-size:30px">Course management system</span>
				<ul >
					<li class="menu" >
						<a href="index.php" style="text-decoration: none;">Home</a>
					</li>
					<li class="selected">
						<a href="login1.php" style="text-decoration: none;">Login</a>
					</li>
					<li class="menu">
						<a href="studreg.php" style="text-decoration: none;">Register</a>
					</li>
				</ul>
	        </div>
	</div>  <br><br>
    <div class="wrapper">
    <div class="title">
      Login
    </div>
      <form action="" method="post" class="form" >
        <div class="inputfield">
          <label>User Name</label>
          <input type="text" name="username" class="input" required>
       </div>  
       <div class="inputfield">
          <label>Password</label>
          <input type="password" name="password" class="input" required>
       </div><br><br>
       <div class="inputfield">
          <input type="submit" name="submit" value="Login" class="btn">
       </div>
        <br><br>
      </form>
    </div>
<?php
if (isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
    if($username=='admin' && $password=='11223')
    {
        $_SESSION['username'] = $username;
        $_SESSION['role']='admin';
        header ("location: admin.php");
    }else{
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($con, $sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            $_SESSION['role']=$row['role'];            
            if ($row['role']=="student")
            { 
             $sq = "SELECT * FROM students WHERE username='$username'";
             $res = mysqli_query($con, $sq);
             if($res->num_rows>0)
             {
             $ro= mysqli_fetch_assoc($res);
             if($ro['isAccepted']=='yes')
                header ("location: student.php");           
             }
            }
            else if($row['role']=="instractor"){
                 header ("location: prof.php");
            }
        } else {
            $error="Your Login Name or Password is invalid";
        }
    }
}
?>
</div>
</body>
</html>
