<?php
ob_start();
session_start();

include 'database.php';
$sql = ("SELECT * FROM `students` ");
		
$query = mysqli_query($con, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($con));
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CMS</title>
	<link rel="stylesheet" href="css/admin.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
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
<h2 style="text-align:center;color:navy">Students detail</h2>
	<table class="data-table">
		<thead>
			<tr>
          <th>ID</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>
          <th>Username</th>
          <th>Program</th>
          <th>Department</th>
          <th>Year</th>
          <th>Gender</th>
          <th>Photo</th>
          <th>Document</th>
          <th>Accepted?</th>
			</tr>
		</thead>
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query))
		 {
		  	echo '<tr>		
					<td>'.$row['id'].'</td>
					<td>'.$row['fname'].'</td>
					<td>'.$row['lname'].'</td>
          <td>'.$row['email'].'</td>
					<td>'.$row['username'].'</td>
					<td>'.$row['program'].'</td>
					<td>'.$row['department'].'</td>
					<td>'.$row['year'].'</td>
					<td>'.$row['sex'].'</td>
          <td>'."<img id='img_div' src='uploads/images/".$row['photo']."' >".'</td>
          <td>'.$row['docFile'].'</td>
          <td>'.$row['isAccepted'].'</td>
				</tr>';
		 }
    ?>
    </tbody>
	</table>    
    <br><br>
    <div class="wrapper">
      <form action="" method="post" class="form" >
        <div class="inputfield">
          <label>Student ID</label>
          <input name="studId"  required>       
        </div>  
       <div class="inputfield">
        <label>Acceptance</label>
        <select name="isAccepted">
            <option value="">isAccepted?...</option>
            <option value="yes">yes</option>
            <option value="no">no</option>
        </select>
       </div><br><br>
       <div class="inputfield">
          <input type="submit" name="view" value="View" class="btn">
          <input type="submit" name="submit" value="Update" class="btn" style="margin-left:10px"/>
       </div>
       <div class="inputfield">
         <input type='button'value='Print' onclick="window.print()">         
       </div>
      </form>
    </div>
<?php
if(isset($_POST['view'])) {
    $studId=$_POST['studId'];
    $sql = "SELECT * FROM students WHERE id='$studId'";
    $result = mysqli_query($con, $sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $file = $row['docFile'];
            $filepath = "uploads/files/".$file;
    
            header('HTTP/1.1 200 OK');
            header('Pragma: public');
            header('Expires: 0');
            header('Content-Type: $mime');
            header('Content-Description: File Transfer');
            header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
            header('Content-Transfer-Encoding: binary');
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Content-Length'.filesize($filepath));
            ob_clean();
            flush();
            readfile($filepath);
              exit();
        } else {
            $error="no student with this id";
        }
}
if(isset($_POST['submit'])){
$studId=$_POST['studId'];
$isAccepted=$_POST['isAccepted'];
$sql="UPDATE students SET isAccepted='$isAccepted' WHERE id='$studId'";
   if(mysqli_query($con, $sql)){
    echo '<script>alert("student acceptance message is sent to the user successfully");</script>';
    echo("<script>window.location = 'adminstud.php';</script>");
   }else{
    echo '<script>alert("please try again");</script>';
    echo("<script>window.location = 'adminstud.php';</script>");
   }
}
?>
</body>
</html>
