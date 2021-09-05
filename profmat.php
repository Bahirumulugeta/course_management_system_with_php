<?php
ob_start();
session_start();

include 'database.php';

?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CMS</title>
	<link rel="stylesheet" href="css/signup.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<style>
    #header {
        background-color: #eeebec;
        margin: 0;
        padding: 0;
        position: relative;
        width: 100%;
    }
    #header div{
        margin: 0 auto;
        overflow: hidden;
        padding: 10px 10px 27px;
    }
    #header div ul {
        float: right;
        list-style: none;
        margin: 0 auto;
        padding: 17px 0 0;
        text-align: center;
        width: 513px;
    }
    #header div ul li {
        display: inline-block;
        *float: left; /* Needed for IE7 and old versions */
        margin: 0 35px;
        padding: 0;
        position: relative;
        width: auto;
    }
    #header div ul li a {
        color: #7a6666;
        font-family: lato-regular-webfont;
        font-size: 20px;
        line-height: 15px;
        margin: 0;
        padding: 0;
        text-align: center;
    }
    #header div ul li.selected a, #header div ul li.selected a:hover {
        color: #cb3362;
    }
    #header div ul li a:hover, #header div ul li.menu:hover ul li a {
        color: #c8c10d;
    }
    #header div ul li ul li a {
        color: #cb3362;
        font-family: lato-regular-webfont;
        font-size: 15px;
        font-weight: normal;
        line-height: 15px;
        margin: 0;
        padding: 0;
        text-align: center;
        text-transform: uppercase;
    }
    #header div ul li.menu {
        min-height: 35px;
        z-index: 80;
    }
    #header div ul li.menu ul {
        display: block;
        float: none;
        left: -99999px;
        margin: 0;
        padding: 0;
        position: absolute;
        top: 24px;
        width: 106px;
        z-index: 90;
    list-style: none;
    }
    input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    }
    input[type=button] {
    
    padding: 9px 11px;
    margin: 8px 0;
    border-radius: 2px;
    text-align: center;
        margin-left: 24px;
    }
    button {
    background-color: grey;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    }
    button:hover {
    opacity: 0.8;
    }
    .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
    }
    .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    }
    img.avatar {
    width: 40%;
    border-radius: 50%;
    }
    .container {
    padding: 16px;
    }
    #img_div{
    
    border: 1px solid #cbcbcb;
    }
    #img_div:after{
    content: "";
    display: block;
    clear: both;
    }
    img{
    height: 50px;
    width:50px;
    }
    span.psw {
    float: right;
    padding-top: 16px;
    }
    table{
        width:100%; text-align:center;
        border: 1px solid black;
    }
    td,th{
        border: 1px solid black;
    }
    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
    span.psw {
        display: block;
        float: none;
    }
    .cancelbtn {
        width: 100%;
    
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
    <h2 style="text-align:center;color:navy">Materials</h2>

    <table class="data-table">
		
		<thead>
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Course</th>
				<th>Path</th>
			</tr>
		</thead>
		<tbody>
		<?php
         $username=$_SESSION['username'];
         $sql = "SELECT * FROM material where username='$username'";
         $query = mysqli_query($con, $sql);
      
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
		
					<td>'.$row['id'].'</td>
					<td>'.$row['title'].'</td>
					<td>'.$row['course'].'</td>
					<td>'.$row['file'].'</td>
				</tr>';
		}?>
        </tbody>
	</table>
    <br><br>
    <div class="wrapper">
      <form method="POST" action="upload.php" enctype="multipart/form-data" class="form">
        <div class="inputfield">
            <label>Title</label>        
            <input  name="title" class="input" required>
        </div>
        <div class="inputfield">
            <label>Course</label>
            <select name="course" class="input">
            <option value="">Select...</option> 
            <?php 
            $user=$_SESSION['username'];
            $sql = "SELECT * FROM instractors where username='$user'";
            $query = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($query))
                {
                echo '<option value="'.$row['course'].'">'.$row['course'].'</option>';
                }
            ?>     
            </select>      
        </div>
        <div class="inputfield">
            <label >Select File</label>
            <input type="file" name="Filename" class="input"> 
        </div>
        <div class="inputfield">
            <input type="submit" name="submit" value="Add" class="btn">
        </div>
      </form>
    </div>
</body>
</html>
