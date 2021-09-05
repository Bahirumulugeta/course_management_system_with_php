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

<h2 style="text-align:center;color:navy">Available Courses</h2>
<table class="data-table">
		
		<thead>
			<tr>
				
				<th>Course ID</th>
				<th>Course Name</th>
				<th>Credits</th>
				<th>Year</th>
				<th>Semister</th>
		
			</tr>
            <tr>
                
			</tr>
		</thead>
		<tbody>
		<?php
        $username=$_SESSION['username'];
        $department="";
        // echo "<script>alert('$username');</script>";
		$sql = "SELECT * FROM students WHERE username='$username'";
        $result = mysqli_query($con, $sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $department=$row['department'];
			$year=$row['year'];
			$semister=$row['semister'];
        }
        $sq= "SELECT * FROM course WHERE department='$department' AND year='$year' AND semister= '$semister'";
        $q= mysqli_query($con, $sq);
		while ($ro = mysqli_fetch_array($q))
		{
			echo '<tr>
					<td>'.$ro['cId'].'</td>
					<td>'.$ro['cname'].'</td>
					<td>'.$ro['credits'].'</td>
					<td>'.$ro['year'].'</td>
					<td>'.$ro['semister'].'</td>
				</tr>';
		}?>
            	</tbody>
		
	</table>
  <br><br>
<input type='button'value='Print' class="btn" onclick="window.print()"></button>
</body>
</html>
