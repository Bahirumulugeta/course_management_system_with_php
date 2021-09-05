<?php
ob_start();
session_start();
include 'database.php';
$sql = 'SELECT * 
		FROM course';
		
$query = mysqli_query($con, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($con));
}
?>
<html>
<style>
.wrapper{
  max-width: 500px;
  width: 100%;
  background: #fff;
  margin: 20px auto;
  box-shadow: 1px 1px 2px rgba(0,0,0,0.125);
  padding: 30px;
}

.wrapper .title{
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 25px;
  color:navy;
  text-align: center;
}

.wrapper .form{
  width: 100%;
}

.wrapper .form .inputfield{
  margin-bottom: 15px;
  display: flex;
  align-items: center;
}

.wrapper .form .inputfield label{
   width: 200px;
   color: #757575;
   margin-right: 10px;
  font-size: 14px;
}

.wrapper .form .inputfield .input,
.wrapper .form .inputfield .textarea{
  width: 100%;
  outline: none;
  border: 1px solid #d5dbd9;
  font-size: 15px;
  padding: 8px 10px;
  border-radius: 3px;
  transition: all 0.3s ease;
}

.wrapper .form .inputfield .textarea{
  width: 100%;
  height: 125px;
  resize: none;
}

.wrapper .form .inputfield .custom_select{
  position: relative;
  width: 100%;
  height: 37px;
}

.wrapper .form .inputfield .custom_select:before{
  content: "";
  position: absolute;
  top: 12px;
  right: 10px;
  border: 8px solid;
  border-color: #d5dbd9 transparent transparent transparent;
  pointer-events: none;
}

.wrapper .form .inputfield .custom_select select{
  -webkit-appearance: none;
  -moz-appearance:   none;
  appearance:        none;
  outline: none;
  width: 100%;
  height: 100%;
  border: 0px;
  padding: 8px 10px;
  font-size: 15px;
  border: 1px solid #d5dbd9;
  border-radius: 3px;
}


.wrapper .form .inputfield .input:focus,
.wrapper .form .inputfield .textarea:focus,
.wrapper .form .inputfield .custom_select select:focus{
  border: 1px solid #fec107;
}

.wrapper .form .inputfield p{
   font-size: 14px;
   color: #757575;
}
.wrapper .form .inputfield .check{
  width: 15px;
  height: 15px;
  position: relative;
  display: block;
  cursor: pointer;
}
.wrapper .form .inputfield .check input[type="checkbox"]{
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}
.wrapper .form .inputfield .check .checkmark{
  width: 15px;
  height: 15px;
  border: 1px solid #fec107;
  display: block;
  position: relative;
}
.wrapper .form .inputfield .check .checkmark:before{
  content: "";
  position: absolute;
  top: 1px;
  left: 2px;
  width: 5px;
  height: 2px;
  border: 2px solid;
  border-color: transparent transparent #fff #fff;
  transform: rotate(-45deg);
  display: none;
}
.wrapper .form .inputfield .check input[type="checkbox"]:checked ~ .checkmark{
  background: #fec107;
}

.wrapper .form .inputfield .check input[type="checkbox"]:checked ~ .checkmark:before{
  display: block;
}

.wrapper .form .inputfield .btn{
  width: 100%;
   padding: 8px 10px;
  font-size: 15px; 
  border: 0px;
  background: #2691d9;
  color: #fff;
  cursor: pointer;
  border-radius: 3px;
  outline: none;
}

.wrapper .form .inputfield .btn:hover{
  background: #ffd658;
}

.wrapper .form .inputfield:last-child{
  margin-bottom: 0;
}
table{
  width:100%; text-align:center;
   border: 1px solid black;
}
td,th{
  border: 1px solid black;
}
@media (max-width:420px) {
  .wrapper .form .inputfield{
    flex-direction: column;
    align-items: flex-start;
  }
  .wrapper .form .inputfield label{
    margin-bottom: 5px;
  }
  
  .field .error-txt{
    /* display:none; */
    color:#dc3545;
    text-align:center;
    margin-bottom:5px
   }
  }
</style>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CMS</title>
	<link rel="stylesheet" href="css/admin.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body >
    <div id="header">
			<div>
				<span style="color:navy; font-size:30px">Course management system</span>
				<ul >
					<li class="menu" >
						<a href="index.php" style="text-decoration: none;">Home</a>
					</li>
					<li class="menu">
						<a href="logout.php" style="text-decoration: none;">Logout</a>
					</li>
				</ul>
			</div>
	</div> 
<h2 style="text-align:center;color:navy">Add Course</h2>
    <br>
  <div class="wrapper">
    <form method="POST" action="upload3.php" enctype="multipart/form-data" class="form">
        <div class="inputfield">
          <label>Course_Name</label>
          <input  name="cname" class="input" required>       
        </div>  
        <div class="inputfield">
          <label>Credits</label>
          <input  name="credits" class="input" required>       
        </div>  
        <div class="inputfield">
          <label>Department</label>
            <select name="department" class="input">
                <option value="">Select...</option>
                <option value="Accounting">Accounting</option>
                <option value="law">law</option>
                <option value="marketing">marketing</option>
                <option value="management">management</option>
                <option value="computer siense">computer science</option>
            </select>
        </div> 
        <div class="inputfield">
          <label>Year</label>
            <select name="year" class="input">
                <option value="">Select...</option>
                <option value="1st year">1st year</option>
                <option value="2nd year">2nd year</option>
                <option value="3rd year">3rd year</option>
                <option value="4th year">4th year</option>
                <option value="5th year">5th year</option>
            </select>
        </div>
        <div class="inputfield">
          <label>Semister</label>
            <select name="semister" class="input">
                <option value="">Select...</option>
                <option value="1st semister">1st semister</option>
                <option value="2nd semister">2nd semister</option>
            </select>
        </div>
        <div class="inputfield">
          <input type="submit" name="submit" value="Add" class="btn">
       </div>
    </form>
  </div>
  

</body>
</html>
