<?php
	?>
<html>
	<head>
		  <title>Bootstrap 4 Example</title>
			  <meta charset="utf-8">
			  <meta name="viewport" content="width=device-width, initial-scale=1">
				  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
				  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
				  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
				  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row"> 
				<div class="col-sm-2">
					
				</div>
				
				<div class="col-sm-7">
					
				</div>
			</div>
		</div>
	</body>
</html>
<?php
	//echo $id= REQUEST['id'];
	//die;
?>

<?php
	include_once("connection.php");
			if(isset($_GET['submit']))
			{
				 $studentname = $row['name'];
				 $studentbatch = $row['batch'];
				 $studentdepartment = $row['department'];
				 $bookname = $_GET['book_name'];
				 $bookisbn = $_GET['isbn'];
				 
				 echo $query = "insert into book (book_name,isbn) values ('$bookname','$bookisbn')";
				
				if(mysqli_query($conn,$query))
					{
				   		  "New record created successfully";
					} 
						else
					{
				   		  "Error: " . $query . "<br>" . mysqli_error($conn);
					}

			}
			else 
			{
				echo "enter the records";
			}


?>