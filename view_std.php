<?php
	include_once("header.php");
	include_once("content.php");
?>
<html>
	
	<body>
		
			<?php
	 			$id = $_REQUEST['id'];
				include_once('connection.php');
			?>
			<center>
				<div class="col-lg-6">
					<div class="card-body">
    					<div class="table-responsive">
        					<table class="table center">
								<tr>
									<td>ID</td>
									<td>Student Name</td>
									<td>Student Batch</td>
									<td>Student Department</td>
									<td>Action</td>
								</tr>
	<?php
		$sql = "SELECT std_id,name,batch,department FROM student WHERE std_id = '$id'";	
		$result = $conn->query($sql);				
		/* Checking Row Count */
    		if($result->num_rows > 0) 
    			{
    	// output data of each row
    		$row = $result->fetch_assoc();
    ?>
			<tr>
				<td class="badge badge-primary"><?php echo $row["std_id"];?></td>
				<td class="color-success"><?php echo $row["name"];?></td>
				<td class="badge badge-primary"><?php echo $row["batch"];?></td>
				<td class="color-success"><?php echo $row["department"];?></td>
				<td class="class-danger"><a href="delete_std.php?id=<?php echo $row["std_id"]; ?>">Delete</a></td>
			</tr>
   				
					<?php

			 		?>
			     </table>
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
		</center>
		<br><br><hr>
		<center>
			<div class="col-lg-6">
		<div class="card-body">
    		<div class="table-responsive">
        		<table class="table center">
    					<tr>
    						
    						<td><h4>Book ISBN</h4></td>
    						<td><h4>Book Name</h4></td>
    						<td><h4>Book Author</h4></td>
    						<td><h4>Action</h4></td>
    					</tr>
    		<?php
				$query = "SELECT book.book_id, book.`isbn`,book.`author_name`,book.`book_name`
				FROM ((student
				INNER JOIN student_book ON student_book.std_id = student.std_id)
				INNER JOIN book ON book.book_id = student_book.book_id) WHERE student.`std_id` = '$id' AND student_book.`status` ='1'";
				$result = $conn->query($query);
				if($result->num_rows > 0)
				{
				while($row=$result->fetch_assoc())
					{
			?>
							<tr>
								<td class="badge badge-primary"><?php echo $row["isbn"]; ?></td>
								<td class="color-success"><?php echo $row["book_name"]; ?></td>
								<td><?php echo $row["author_name"]; ?></td>
								<td class="badge badge-primary"><a href="delete_book.php?bid=<?php echo $row['book_id']; ?>&id=<?php echo $id;?>">BOOK BACK TO STOCK</a></td>
							
							</tr>
							
						<?php
					}
						?>
							
						<?php
				}
						?>
						<?php
				$quer = "select std_id from student where std_id='$id'";
				$resultquer = $conn->query($quer);
				if($resultquer->num_rows > 0)
				{
					while ($row = $resultquer->fetch_assoc()) 
					{
					 ?>
					 	<center><a href="add_book.php?id=<?php echo $row["std_id"]; ?>"><h1 class="badge-primary">ADD NEW BOOK IN STUDENT ACCOUNT</h1></a></center>
					 <?php	
					}
				} 
			?>
		</table>
		

    			
    			
    		</div>
    	</div>
    </div>
    </center>

    <div class="col-lg-12"><center><a href="http://localhost/php/library_dashborad/ElaAdmin-master/student_page.php"><img src="library_images/go-back.jpg"></a></center></div>
	</body>	
</html>
