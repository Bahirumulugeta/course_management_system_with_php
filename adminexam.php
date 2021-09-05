<?php
ob_start();
session_start();

include 'database.php';
$sql = 'SELECT * FROM exam';
$query = mysqli_query($con, $sql);
if (!$query) {
	die ('SQL Error: ' . mysqli_error($con));
}
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CMS</title>
	<link rel="stylesheet" href="css/signup.css" type="text/css">
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
<h2 style="text-align:center;color:navy">Exam Details</h2><br>
<table class="data-table">	
		<thead>
			<tr>
			    <th>Exam Id</th>
				<th>Title</th>
				<th>Course</th>
				<th>Date of Exam</th>
			</tr>
		</thead>
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query))
		{	
			echo '<tr>
			        <td>'.$row['examId'].'</td>
                    <td>'.$row['title'].'</td>
					<td>'.$row['course'].'</td>
					<td>'.$row['date'].'</td>
	
				</tr>';
		}?>
        </tbody>
	</table>
    <br>
	<div class="wrapper">
		<div class="title">
		   Edit Exam Schedule
		</div>
		<form action="editExam.php" method="POST" class="form" >
		<div class="inputfield">
          <label>Exam Id</label>
          <input type="text" name="examId" class="input" >
       </div> 
	   <div class="inputfield">
          <label>Title</label>
          <input name="title" class="input" required>       
        </div>  
        <div class="inputfield">
          <label>Course</label>
         <select name="course" class="input">
           <option value="">Select...</option>
           <?php
              $sql = 'SELECT * FROM course';
              $query = mysqli_query($con, $sql);
              while ($row = mysqli_fetch_array($query))
              {
               echo '<option value="'.$row['cname'].'">'.$row['cname'].'</option>';
              }
           ?>
         </select>      
        </div> 
        <div class="inputfield">
          <label>Date</label>
          <input type="date" name="date" class="input"  required>       
        </div> 
       <div class="inputfield">
          <input type="submit" name="submit" value="Update" class="btn">
       </div>
		<br>
		</form> 
	</div>
</body>
</html>
