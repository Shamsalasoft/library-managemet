<?php
	include_once("header.php");
	include_once("content.php");
?>
<html>
	<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container-fluid" style="border: 2px">
    		<div class="row">
    			
	    				<div class="col-sm-4" >
	          				fgdfgdf
	    				</div>

    					<div class="col-sm-4">
							<?php
	 			$id = $_REQUEST['id'];
				include_once('connection.php');
	?>
<table border=3px>
	<tr><td>ID</td>
		<td>Student Name</td>
		<td>Student Batch</td>
		<td>Student Department</td>
		<td>Action</td>
	</tr>
	<?php
		$sql = "SELECT std_id,name,batch,department FROM student WHERE std_id = '$id'";	
		$result = $conn->query($sql);				
		/* Checking Row Count */
    		if($result->num_rows > 0) {
    	// output data of each row
    		$row = $result->fetch_assoc();
    			?>
			<tr><td><?php echo $row["std_id"];?></td><td><?php echo $row["name"];?></td><td><?php echo $row["batch"];?></td><td><?php echo $row["department"];?></td><td><a href="delete_std.php?id=<?php echo $row["std_id"]; ?>">Delete</a></td></tr>
   				
<?php

    ?>
     </table>
    <?php
 } else {
    echo "0 results";
}
?>
						</div>
						<div class="col-sm-4">
							fgfsgs
						</div>
			</div>
		</div>
		<div class="container-fluid" style="border: 2px">
    		<div class="row">
    			
	    		<div class="col-sm-2">
	          				fgdfgdf
	    		</div>

    			<div class="col-sm-7">
    				<center>
    					<table border="2px">
    					<tr>
    						<td><h1>Book ISBN</h1></td>
    						<td><h1>Book Name</h1></td>
    						<td><h1>Book Author</h1></td>
    						<td><h1>Action</h1></td>
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
								<td><?php echo $row["isbn"]; ?></td>
								<td><?php echo $row["book_name"]; ?></td>
								<td><?php echo $row["author_name"]; ?></td>
								<td><a href="delete_book.php?bid=<?php echo $row['book_id']; ?>&id=<?php echo $id;?>">BOOK BACK TO STOCK</a></td>
							
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
					 	<center><a href="add_book.php?id=<?php echo $row["std_id"]; ?>">ADD NEW BOOK STUDENT ACCOUNT</a></center>
					 <?php	
					}
				} 
			?>
		</table>
		<center><a href="http://localhost/php/library_dashborad/ElaAdmin-master/student_page.php">BACK</a></center>

    			</div>
    			<div class="col-sm-3">
    						
    			</div>
    		</div>
    	</div>
	</body>	
</html>
<-------------------------------------------------->
<?php
	include_once("header.php");
	include_once("content.php");
?>
<h1>WELCOME TO BOOK PANEL</h1>
<?php
	 			$id = $_REQUEST['id'];
				include_once('connection.php');
				?>


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
												<th>ID</th>
												<th>Student Name</th>
												<th>Student Batch</th>
												<th>Student Department</th>
												<th>Action</th>
											</tr>
											
                                        </thead>
                                        
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
                                                <td><?php echo $row["isbn"]; ?></td>
                                                <td><span class="badge badge-primary"><?php echo $row["book_name"]; ?></span></td>
                                                <td class="color-primary"><?php echo $row["author_name"]; ?></td>
                                                <td><a href="delete_book.php?bid=<?php echo $row['book_id']; ?>&id=<?php echo $id;?>">BOOK BACK TO STOCK</a></td>
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
					 	
					 <?php	
					}
				} 
			?>
	
					</table>
				</div>
			</div>
   		</div> 			
  	</div>  		

