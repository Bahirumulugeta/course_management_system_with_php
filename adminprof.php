
<?php
ob_start();
session_start();
include 'database.php';
$sql = 'SELECT * 
		FROM instractors';
$query = mysqli_query($con, $sql);
if (!$query){
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
<h2 style="text-align:center;color:navy">Instructor Details</h2>
<table class="data-table">
		<thead>
			<tr>
				<th>ID</th>
				<th>First Name</th>
                <th>Last Name</th>
				<th>Salary</th>
				<th>Department</th>
				<th>Course</th>
			</tr>
            <tr>
                
			</tr>
		</thead>
		<tbody>
		<?php
		
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>					
					<td>'.$row['insID'].'</td>
					<td>'.$row['fname'].'</td>
                    <td>'.$row['lname'].'</td>
					<td>'.$row['salary'].'</td>
					<td>'.$row['department'].'</td>
					<td>'.$row['course'].'</td>				
				</tr>';
		}?>
            
    </tbody>
		
	</table>
    <br><br>
  <input type='button'value='Print' class="btn" onclick="window.print()"></button>
</body>
</html>
</body>
</html>
