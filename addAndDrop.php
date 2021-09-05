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
    <h2 style="text-align:center;color:navy">Added Courses</h2>
    <table class="data-table">
		<thead>
			<tr>
                <th>Student ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Course ID</th>
				<th>Add/Drop</th>
			</tr>
            <tr> 
			</tr>
		</thead>
		<tbody>
		<?php
        $studentId="";
        $fname="";
        $lname="";   
		$courseId="";
        $addDrop="";
        $sq= "SELECT * FROM adddrop ";
        $q= mysqli_query($con, $sq);
		while ($ro = mysqli_fetch_array($q))
		{
            $studentId=$ro['studentId'];
            $fname=$ro['fname'];
            $lname=$ro['lname'];
			$courseId=$ro['courseId'];
            $addDrop=$ro['addDrop'];
           
			echo '<tr>
					<td>'.$studentId.'</td>
                    <td>'.$fname.'</td>
					<td>'.$lname.'</td>
					<td>'.$courseId.'</td>
					<td>'.$addDrop.'</td>
				</tr>';
		}?>
    </tbody>
	</table>
    <br><br>
	<input type='button'value='Print' class="btn" onclick="window.print()"></button>
</body>
</html>
