<?php
		include_once('connection.php');
		echo $bookid = $_REQUEST['bid'];
		echo $stdid = $_REQUEST['id'];
		$queryupdate = "UPDATE student_book
			SET STATUS ='0'
			WHERE book_id='$bookid' AND std_id='$stdid'";
			mysqli_query($conn,$queryupdate);
				if(mysqli_affected_rows($conn))
				{
					//echo "ok";
					//
						 $queryupdate ="UPDATE book SET quantity = quantity + 1 WHERE `book_id` = '$bookid'";
				mysqli_query($conn,$queryupdate);
				if(mysqli_affected_rows($conn))
				{
					?>
						<script TYPE="text/javascript">
							window.location.href="http://localhost/php/library_dashborad/ElaAdmin-master/view_std.php?id=<?php echo $stdid; ?>";
						</script>
					<?php
				}

					//
				}
				else
				{
					echo "false";
				}
?>

