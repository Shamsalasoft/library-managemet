
	<?php
	//echo	$sid = $_GET['id'];


		include_once('content.php');
		include_once('header.php');
		include_once('connection.php');
		if(isset($_GET['submit']))
		{
			echo $sid = $_GET['id'];
			echo $bid = $_GET['book_id'];
			$bookpickdate = $_REQUEST['datepicker'];
			$bookbackdate = $_REQUEST['dateback'];
			

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

		$queryinsert = "insert into student_book (std_id,book_id,status,bookpickdate,bookbackdate) values ('$sid','$bid','1','$bookpickdate','$bookbackdate')";
		mysqli_query($conn,$queryinsert);
		if(mysqli_affected_rows($conn))
			{	
				$queryupdate ="UPDATE book SET quantity = quantity - 1 WHERE `book_id` = '$bid'";
				mysqli_query($conn,$queryupdate);
				if(mysqli_affected_rows($conn))
				{
					$query_check = "SELECT * from book WHERE book_id=$bid";
					$res = mysqli_query($conn,$query_check);
					$get_book='';
					while($row = $res->fetch_assoc()){
						$get_book = $row;
					}
					//print_r($get_book);

				if($get_book['quantity']<10)
					{
						?>
							<script type="text/javascript">
								alert("STOCK IS SHORT");
								window.location.href="http://localhost/php/library_dashborad/ElaAdmin-master/view_std.php?id=<?php echo $_GET['id']; ?>";
							</script>
						<?php
					}else{
						?>
							<script type="text/javascript">
								alert("STOCK IS ok");
								window.location.href="http://localhost/php/library_dashborad/ElaAdmin-master/view_std.php?id=<?php echo $_GET['id']; ?>";
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


	 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
				  <link rel="stylesheet" href="//resources/demos/style.css">
				  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
				  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
				  <script>
				  
				  
					$(function () {
    //$('.datepicker').datepicker({format: 'YY-mm-dd' });
    $('.datepicker').datepicker({ dateFormat: 'yy-mm-dd' });
});
				  
				  </script>

		<form action="">
			<center><table border="1px">
				<tr><td>
					<select name="book_id" >
				<?php
					//$sql = "select book_id,isbn from book";
					echo $sql = "SELECT * FROM book WHERE book_id NOT IN (SELECT book_id FROM student_book WHERE std_id = ".$_REQUEST['id']." AND STATUS = 1)";
 
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
				<tr><td><input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"></td></tr>
				<tr><td>Date PICKER BOOK</td><td><input type="text" class="datepicker" name="datepicker"></td></tr>
				<tr><td>Date BACK BOOK</td><td><input type="text" class="datepicker" name="dateback"></td></tr>
				<tr><td><input type="submit" name="submit" value="submit"></td></tr>
			</table>
		</form>
	