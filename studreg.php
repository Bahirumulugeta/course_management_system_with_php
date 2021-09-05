<?php
ob_start();
session_start();

include 'database.php';
$query = "SELECT * FROM students";
$result = mysqli_query($con, $query);
$row = mysqli_num_rows($result);
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
<style>
  .error {
  color: #FF0001;
  padding-left:10px;
  } 
</style>
<body >
    <div id="header">
			<div>
				<span style="color:navy; font-size:30px">Course management system</span>
				<ul >
					<li class="menu" >
						<a href="index.php" style="text-decoration: none;">Home</a>
					</li>
					<li class="menu">
						<a href="login1.php" style="text-decoration: none;">Login</a>
					</li>
					<li class="selected">
						<a href="studreg.php" style="text-decoration: none;">Register</a>
					</li>
				</ul>
			</div>
	</div> 
  <?php  
    // define variables to empty values  
    $fnameErr =$lnameErr = $usernameErr = $emailErr = $passwordErr= "";  
    $fname = $lname=  $username = $email = $password= "";  
      
    //Input fields validation  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
          
    //String Validation  
        if (empty($_POST["fname"])) {  
            $fnameErr = "First name is required";  
        } else {  
            $fname = input_data($_POST["fname"]);  
                // check if name only contains letters and whitespace  
                if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {  
                    $fnameErr = "Only alphabets and white space are allowed";  
                }  
        }  
        if (empty($_POST["lname"])) {  
          $lnameErr = "Last name is required";  
        } else {  
          $lname = input_data($_POST["lname"]);  
              // check if name only contains letters and whitespace  
              if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {  
                  $lnameErr = "Only alphabets and white space are allowed";  
              }  
      }  
      if (empty($_POST["username"])) {  
        $usernameErr = "user name is required";  
      } else {  
        $username = input_data($_POST["username"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^\S*$/",$username)) {  
                $usernameErr = "white space is not allowed";  
            }  
      }  
        //Email Validation   
        if (empty($_POST["email"])) {  
                $emailErr = "Email is required";  
        } else {  
                $email = input_data($_POST["email"]);  
                // check that the e-mail address is well-formed  
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                    $emailErr = "Invalid email format";  
                }  
        } 
        if (empty($_POST["password"])) {  
          $passwordErr = "password is required";  
        } else {  
          $password = input_data($_POST["password"]);  
              // check if name only contains letters and whitespace  
              if (!preg_match("/^\S*$/",$password)) {  
                  $passwordErr = "white space is not allowed";  
              }  
        } 
        
    }  
    function input_data($data) {  
      $data = trim($data);  
      $data = stripslashes($data);  
      $data = htmlspecialchars($data);  
      return $data;  
    }  
    ?>  
    <br><br> 
    <div class="wrapper">
    <div class="title">
      Registration Form
    </div>
      <form method="post" class="form" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="inputfield">
          <label>First Name</label>
          <input type="text" name="fname" class="input" >
       </div>  
        <span class="error">* <?php echo $fnameErr; ?> </span>  
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" name="lname" class="input">
       </div>  
       <span class="error">* <?php echo $lnameErr; ?> </span>  
       <div class="inputfield">
          <label>Username</label>
          <input type="text" name="username" class="input">
       </div>  
       <span class="error">* <?php echo $usernameErr; ?> </span>  
       <div class="inputfield">
            <label>Email</label>
            <input type="email" name="email" class="input">
        </div>  
        <span class="error">* <?php echo $emailErr; ?> </span>  
      <div class="inputfield">
          <label>Password</label>
          <input type="password" name="password" class="input">
       </div> 
       <span class="error">* <?php echo $passwordErr; ?> </span>  
       <div class="inputfield">
          <label>Select Program</label>
          <div class="custom_select">
            <select name="program">
                <option value="">Select...</option>
                <option value="Regular">Regular</option>
                <option value="Extension">Extension</option>
                <option value="Weekend">Weekend</option>
            </select>
           </div>
       </div> 
       <div class="inputfield">
          <label>Select department</label>
          <div class="custom_select">
          <select name="Department">
                <option value="">Select...</option>
                <option value="Accounting">Accounting</option>
                <option value="law">law</option>
                <option value="marketing">marketing</option>
                <option value="management">management</option>
                <option value="computer siense">computer siense</option>
            </select>
           </div>
       </div> 
       
       <div class="inputfield">
          <label>Year</label>
          <div class="custom_select">
            <select name="year">
                <option value="">Select...</option>
                <option value="1st year">1st year</option>
                <option value="2nd year">2nd year</option>
                <option value="3rd year">3rd year</option>
                <option value="4th year">4th year</option>
                <option value="5th year">5th year</option>
            </select>
          </div>
       </div> 
       <div class="inputfield">
          <label>Semister</label>
          <div class="custom_select">
            <select name="semister">
                <option value="">Select...</option>
                <option value="1st semister">1st semister</option>
                <option value="2nd semister">2nd semister</option>
            </select>
          </div>
       </div> 
       <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select name="Gender">
              <option value="">Select</option>
              <option value="M">Male</option>
              <option value="F">Female</option>
            </select>
          </div>
       </div> 
       <div class="inputfield">
           <label for="Pincode">Upload Photo</label>
           <input type="file" name="picture" />
        </div>
        <div class="inputfield">
            <label for="Pincode">Upload Document</label>
            <input type="file" name="myfile"> <br></div> 
      <div class="inputfield">
        <input type="submit" name="upload" value="Register" class="btn">
      </div>
      </form>
    </div>
    <?php  
    if(isset($_POST['upload'])) {  
    if($fnameErr == "" && $emailErr == "" && $lnameErr == "" && $usernameErr == "" && $passwordErr == "") {  
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
              $res=mysqli_query($con,$q1);
              mysqli_query($con,$q);
              echo '<script>alert("Registered successfully");</script>';
              echo("<script>window.location = 'login1.php';</script>");        
          }else{
            $msg = "Failed to upload the file";
          }
        } else {  
            echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
        }  
      }  
  ?>  
</body>
</html>
