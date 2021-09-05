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
<h2 style="text-align:center;">Exam Details</h2>
<table class="data-table">	
		<thead>
			<tr>
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
                    <td>'.$row['title'].'</td>
					<td>'.$row['course'].'</td>
					<td>'.$row['date'].'</td>
	
				</tr>';
		}?>
        </tbody>
	</table>
    <br>
	  <input type='button'value='Print' class="btn" onclick="window.print()"></button>
    
</body>
</html>
