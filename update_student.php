
	<?php
	//echo	$sid = $_GET['id'];
		include_once('connection.php');
		if(isset($_GET['submit']))
		{
			echo $sid = $_GET['std_id'];
			echo $bid = $_GET['book_id'];
		

	//	$queryinsert = "insert into student_book (std_id,book_id) values ('$sid','$bid')";
		
		/*for select
		$sql = "SELECT * from shahrukh";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result))
*/	

		/*
		for insert
		$sql = "insert into student_book (std_id,book_id) values ('$sid','$bid')";
		mysqli_query($conn,$sql);
		if(mysqli_affected_row($conn))
		{

		}*/

		$queryinsert = "insert into student_book (std_id,book_id) values ('$sid','$bid')";
		mysqli_query($conn,$queryinsert);
		if(mysqli_affected_rows($conn))
			{	
				$queryupdate ="UPDATE book SET quantity = quantity - 1 WHERE `book_id` = '$bid'";
				mysqli_query($conn,$queryupdate);
				if(mysqli_affected_rows($conn))
				{
				if($queryupdate<10)
					{
						?>
							<script type="text/javascript">
								alert("STOCK IS SHORT");
							</script>
						<?php
					}
				}
			}

		// if(mysqli_num_rows($result))
		// {
		// 	//	echo "data inserted";
		// 	$query ="UPDATE book SET quantity = quantity - 1 WHERE `book_id` = '$bid'";
		// }
		else
		{
			echo "false";
		}
	}
	else 
	{
		echo "please fill the form";
	}
	?>
<html>
	<body>
		<form action="">
			<table border="1px">
				<tr><td>
					<select name="book_id" >
				<?php
					$sql = "select book_id,isbn from book";
					$result = $conn->query($sql);
					if ($result->num_rows > 0 )
					{
					//exit;
					
					while($row = $result->fetch_assoc())
						{
							?>
									<option value="<?php echo $row['book_id']; ?>">
								     		<?php echo $row['isbn']; ?>
								    </option>
							<?php
						}
					}
				?>
				 
						</select>
				</td></tr>
				<tr><td><input type="hidden" name="std_id" value="<?php echo $_GET['id']; ?> "></td></tr>
				<tr><td><input type="submit" name="submit" value="submit"></td></tr>
			</table>
		</form>
	</body>
</html>