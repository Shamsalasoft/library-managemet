<?php
	
	include_once("connection.php");
	echo $id = $_REQUEST['id'];

		
				?>
				          <?php
                                $delete = "DELETE FROM student WHERE std_id ='$id'";
                                mysqli_query($conn,$delete);
                                if(mysqli_affected_rows($conn))
                                {   
                            ?>
				<script type="text/javascript">
						//alert("STUDENT IS DELETED");
						window.location.href="http://localhost/php/library_dashborad/ElaAdmin-master/student_page.php";
					</script> 
					
				
			<?php
		}
		/*else
			{
				?>
					<script type="text/javascript">
						alert("STUDENT IS NOT DELETED");
						window.location.href="http://localhost/php/library_dashborad/ElaAdmin-master/student_page.php";
					</script>
				<?php
			}*/
?>