<?php
ob_start();
session_start();

include 'database.php';
$sql = ("SELECT * FROM `users` ");
		
$query = mysqli_query($con, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($con));
}
?>



									<div class="col-md-6 col-sm-6">
	                        	<form method="POST" action="student.php?page=subscribecourse">
				                        <div class="card">
				                            <div class="panel-body">
				                            	
				                                <h3><?php echo $row['course_name']; ?></h3>

				                                <input type="hidden" name="student_name" value="<?php echo $s_name; ?>">
				                               <input type="hidden" name="institute_id" value="<?php echo $row['institute_id']; ?>">
				                               
				                               <input type="hidden" name="branch_id" value="<?php echo $row['branch_id']; ?>">
				                               
				                               <input type="hidden" name="batch_id" value="<?php echo $batch_id; ?>">
				                               
				                               <input type="hidden" name="course_id" value="<?php echo $course_id; ?>">
				                                 <input type="hidden" name="course_name" value="<?php echo $row['course_name']; ?>">

				                               <input type="hidden" name="student_id" value="<?php echo $s_id; ?>">
				                                <?php

				                                $res1=mysqli_query($conn, "SELECT * FROM assign_student WHERE branch_id='".$branch_id."'");
				                              #$row1=mysqli_fetch_array($res1);
				                               
				                                while ($row1=mysqli_fetch_array($res1)) {

				                               
				                                	if (($course_id == $row1['course_id']) && ($row1['status'] == 'Approved')) {
				                                		# code...
				                                		echo "<button class='btn-button default' type='submit' name='submit'>Taken</button>";
				                                	}
				                                	else
				                                	{
				                                		echo "<button class='btn-button default' type='submit' name='subscribe'>Not Taken</button>";
				                                	}
				                                	
				                               }

				                                ?>
				                              
				                                
				                                
				                           </div>
				                        </div>
				                         </form>
				                    </div>

									<?php

									}
									
								



                      }
                       else
                      {
                      	?>
                      		<div class="col-md-12 col-sm-12">
	                        	
		                        <div class="card">
		                            <div class="panel-body">
		                            	<h3>Sorry! No course found in this branch</h3>
		                            </div>
		                        </div>
		                    </div>
                      	<?php
                      }

					}
			                   
                    
                ?>
                </div>
                </div>
            
                <!-- end page content -->
                 
            </div>
            </div>
            <!-- end page content -->
          
        </div>
        <!-- end page container -->
        <!-- start footer -->  
        <?php include './footer.php';?>