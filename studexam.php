<?php
ob_start();
session_start();

include 'database.php';
$sql = 'SELECT * 
		FROM exam';
		
$query = mysqli_query($con, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($con));
}
?>
<html>
<style>


input[type=text], input[type=password] {
    width: 550px;
    padding: auto;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
    input[type=button] {
   
    padding: auto;

 border-radius: 2px;

    margin-left: 24px;
    
}
    

button {
    

  
   
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

span.psw {
    float: right;
    padding-top: 16px;
}

    table{
        width:100%; text-align:center;
         border: 1px solid black;
        
        
    }
    td,th{
        border: 1px solid black; padding: 3px 2px 1px 1px;
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
    
    <div style="background-color: grey; color: white; padding-top: 12px; padding-bottom: 6px;text-align:center;">
        <h1> Course Registration System</h1>
    </div>

<h2 style="text-align:center;">Professor-> Assignments</h2>

<table class="data-table">
		
		<thead>
			<tr>
				
				
				<th>Title</th>
				<th>Course</th>
				<th>Date of Exam</th>
				
	
			</tr>
            <tr>
                
			</tr>
		</thead>
		<tbody>
		<?php
		
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
					
					
					
					<td>'.$row['course'].'</td>
					<td>'.$row['Title'].'</td>
					
					<td>'.$row['date'].'</td>
					
					
					
				</tr>';
	
			
		}?>
            
            	</tbody>
		
	</table>
    

  <input type='button'value='Back' class="btn" onclick="document.location.href='student.php';"/>

</body>
</html>
