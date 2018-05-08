<?php
	include_once('connection.php');
		$id = $_REQUEST['id'];
		$sql = "DELETE FROM book WHERE book_id ='$id'";
		if(mysqli_query($conn,$sql))
	{
		//echo "record delete successfully";
			
		header('Location:book_page.php');
	}
		else
	{
		echo "error in delete query";
	}

?>