<?php
ob_start();
session_start();
include 'database.php';
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CMS</title>
	<link rel="stylesheet" href="css/table.css" type="text/css">
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
    <table class="data-table">
		<thead>
			<tr>
                <th>Course ID</th>
				<th>Course Name</th>
				<th>Credits</th>
	
			</tr>
            <tr> 
			</tr>
		</thead>
		<tbody>
		<?php
        $username=$_SESSION['username'];
        $cId="";
        $courseName="";
        $credits="";
        // echo "<script>alert('$username');</script>";
        $sq= "SELECT * FROM studcourse WHERE studUsername='$username'";
        $q= mysqli_query($con, $sq);
		while ($ro = mysqli_fetch_array($q))
		{
            $cId=$ro['courseId'];
            $sql = "SELECT * FROM course WHERE cId='$cId'";
            $result = mysqli_query($con, $sql);
            if ($result->num_rows > 0) {
                $row = mysqli_fetch_assoc($result);
                $courseName=$row['cname'];
                $credits=$row['credits'];
            }
			echo '<tr>
                    <td>'.$cId.'</td>
					<td>'.$courseName.'</td>
					<td>'.$credits.'</td>
				</tr>';
		}?>
    </tbody>
	</table>
    <br>
     <form action="" method="POST" ><!--addCourse.php -->
      <p><b>Course Id</b></p>
      <input  name="courseId" id="Course" placeholder="course id you want to add">
       <br/>
       <br>
      <input type="submit" name="submit" value="Add"/>
    </form>  
    <?php
    if(isset($_POST['submit'])){
        $studUsername=$_SESSION['username']; 
        $courseId=$_POST['courseId']; 
        $studentId="";
        $fname="";
        $lname="";
        $addDrop="add";
        $sql="INSERT INTO studcourse(courseId,studUsername) VALUES('$courseId','$studUsername')";
    
        if(mysqli_query($con, $sql)){
            $s = "SELECT * FROM students WHERE username='$studUsername'";
            $r = mysqli_query($con, $s);
            if ($r->num_rows > 0) {
                $ro = mysqli_fetch_assoc($r);
                $studentId=$ro['id'];
                $fname=$ro['fname'];
                $lname=$ro['lname'];
            }
        $q="INSERT INTO adddrop(studentId,fname,lname,courseId,addDrop) VALUES('$studentId','$fname','$lname','$courseId','$addDrop')";
        mysqli_query($con, $q);
        }
        echo '<script>alert("you added the course successfully");</script>';
        echo("<script>window.location = 'student.php';</script>");
     }
    ?> 
</body>
</html>
