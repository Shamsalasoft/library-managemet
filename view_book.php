
<?php
	include_once("header.php");
	include_once("content.php");
	 $id = $_REQUEST['id'];
	include_once('connection.php');
?>
<h1>WELCOME TO VIEW BOOK PANEL</h1>



<center>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Table Basic </h4>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    
                                    	<table class="table center">
                                        <thead>
                                        	<tr>
												<td>ID</td>
												<td>BOOK Name</td>
												<td>Student Batch</td>
												<td>Student Department</td>
												<td>Book ISBN</td>
												<td>Student Name</td>
												<td>Author Name</td>
											</tr>
											
                                        </thead>
                                        <tbody>
											<?php
												$sql = "SELECT student.*, book.*
														FROM ((student
														INNER JOIN student_book ON student_book.std_id = student.std_id)
														INNER JOIN book ON book.book_id = student_book.book_id) WHERE book.`book_id` = '$id'";
														$result = $conn->query($sql);
																		
													/* Checking Row Count */
														if ($result->num_rows > 0) 
															{
											    	// output data of each row
											    				while($row = $result->fetch_assoc()) 
											    					{
											?>
		    	
											
                                            <tr>
								    			<td class="color-primary"><?php echo $row["std_id"];?></td>
												<td class="badge badge-primary"><?php echo $row["book_name"];?></td>
												<td class="color-success"><?php echo $row["batch"];?></td>
												<td class="color-primary"><?php echo $row["department"];?></td>
												<td class="badge badge-primary"><?php echo $row["isbn"]?></td>
												<td class="color-success"><?php echo $row["name"];?></td>
												<td class="badge badge-primary"><?php echo $row["author_name"];?></td>
											</tr>
                                            <?php
												}
											?>
     									</table>
     											<a href="http://localhost/php/library_dashborad/ElaAdmin-master/book_page.php">BACK</a>
     </center>
    	<?php

			} 
				else 
			{
    			echo "0 results";
			}
?>

                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="view_book.php">BACK</a>             
               



