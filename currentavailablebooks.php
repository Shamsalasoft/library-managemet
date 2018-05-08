
<?php
include_once("header.php");
include_once("content.php");
	include_once("connection.php");
	//$bisbn = $_GET['id'];
			if(isset($_GET['submit']))
			{
				 
				 $bisbn = $_GET['isbn'];
				 $bquantity = $_GET['bquantity'];
				 
				echo $queryupdate ="UPDATE book SET quantity = quantity + '$bquantity'  WHERE `book_id` = '$bisbn'";
				mysqli_query($conn,$queryupdate);
				if(mysqli_affected_rows($conn))
				{ ?>
					<script TYPE="text/javascript">
							window.location.href="http://localhost/php/library_dashborad/ElaAdmin-master/student_page.php";
						</script>
				<?php }
			else 
				{
					echo "enter the records";
				}
			}
?>

<html>
	
	<body>
		<div class="container">
			<div class="row"> 
				<div class="col-sm-2">
					
				</div>
				<div class="col-sm-3">
					<form>
						<center><h1>WELCOME TO QUANTITY PAGE</h1></center>
						<table class="table center">
							<tr><td colspan="2">
					<select name="isbn" >
				<?php
					$sql = "SELECT book_id,isbn FROM book";
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
							<tr><td>QUANTITY</td><td><input type="text" name="bquantity" required="put value" required="put value"></td></tr>
							
							<tr><td colspan="2"><input type="submit" name="submit" value="submit"></td></tr>
						</table>
					</form>
				</div>
				<div class="col-lg-12">
					
				</div>
			</div>
		</div>
	</body>
</html>
