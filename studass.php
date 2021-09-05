<?php
ob_start();
session_start();

include 'database.php';
$sql = 'SELECT * FROM assignment';
		
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
    <h2 style="text-align:center;color:navy">Assignments</h2>
    <table class="data-table">	
		<thead>
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Course</th>
				<th>Path</th>
				<th>Submission Date</th>
			</tr>
		</thead>
		<tbody>
		<?php
			while ($row = mysqli_fetch_array($query))
			{
				echo '<tr>
						<td>'.$row['id'].'</td>
						<td>'.$row['title'].'</td>
						<td>'.$row['course'].'</td>
						<td>'.$row['file'].'</td>
						<td>'.$row['submissionDate'].'</td>	
					</tr>';
			}
		?>
        </tbody>
    </table>
    <br><br>
	<div>
      <form action="" method="post">
        <div >
          <label>ID</label>
          <input name="id"  required>       
        </div>  <br><br>
       <div>
          <input type="submit" name="view" value="Download">
		  <input type="button" value="Print" onclick="window.print()">         
       </div>
      </form>
    </div>
	<?php 
    if(isset($_POST['view'])) {
    $id=$_POST['id'];
    $sql = "SELECT * FROM assignment WHERE id='$id'";
    $result = mysqli_query($con, $sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $file = $row['file'];
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
    ?>
</body>
</html>
