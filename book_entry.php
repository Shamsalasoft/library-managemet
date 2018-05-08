



<?php
	include_once("header.php");
	include_once("content.php");
	include_once("connection.php");
			if(isset($_GET['submit']))
			{
				 $bname = $_GET['bname'];
				 $bcategory = $_GET['bcategory'];
				 $bisbn = $_GET['bisbn'];
				 $authorname = $_GET['authorname'];
				 $bquantity = $_GET['bquantity'];
				 $shelfid = $_GET['shelfid'];
				 $adminid = $_GET['adminid'];
				 $query = "insert into book (book_name,book_category,isbn,author_name,quantity,shelf_id,staff_id) values ('$bname','$bcategory','$bisbn','$authorname','$bquantity','$shelfid','$adminid')";
				
				if(mysqli_query($conn,$query))
					{
				   		//echo  "New record created successfully";
				?>
						<script type="text/javascript">
							alert("record added")
						</script>
				<?php
					} 
						else
					{
				   		echo  "Error: " . $query . "<br>" . mysqli_error($conn);
					}

			}
			else 
			{
				echo "enter the records";
			}
?>

<html>
	
	<body>
        <center>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-title">
                        <h1>ADD NEW BOOK </h1>
                   	</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                	<form>
											<table class="table center">
												<tr><td>BOOK NAME</td><td><input type="text" name="bname" required="put value"></td></tr>
												<tr><td>BOOK CATEGORY</td><td><input type="text" name="bcategory" required="put value"></td></tr>
												<tr><td>BOOK ISBN</td><td><input type="text" name="bisbn" required="put value"></td></tr>
												<tr><td>AUTHOR NAME</td><td><input type="text" name="authorname" required="put value"></td></tr>
												<tr><td>QUANTITY</td><td><input type="text" name="bquantity" required="put value" required="put value"></td></tr>
												<tr><td>SHELF LOCATION</td><td><input type="text" name="shelfid" required="put value"></td></tr>
												<tr><td>ADMIN ID</td>
												<td> 
													<select name="adminid" >
										  				<option value="1">ADMIN</option>
										  				<option value="2">LIBRARIAN</option>
										  				<option value="3">MANAGER</option>
													</select> 
												</td>
												</tr>
												<tr><td><input type="submit" name="submit" value="submit"></td></tr>
											</table>
									</form>
								</div>
                            </div>
                </div>
            </div>

        <div class="col-lg-12">
			<a href="book_page.php"><img src="library_images/go-back.jpg"></a>  
		</div>                     
    </body>
</html>
<tr><td><center><a href="currentavailablebooks.php">INCREASE QUANTITY IN ALREADY AVAILABLE BOOKS</a></center></center></td></tr>
