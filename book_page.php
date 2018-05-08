<?php
	include_once("header.php");
	include_once("content.php");
?>
<h1>WELCOME TO BOOK PANEL</h1>



<center>
                    <div class="col-lg-6">
                        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
                        <script type="text/javascript">
                           function confirm_del(del_url){
                            swal({
                              title: "Are you sure?",
                              text: "Once deleted, you will not be able to recover this imaginary file!",
                              icon: "warning",
                              buttons: true,
                              dangerMode: true,
                            })
                            .then((willDelete) => {
                              if (willDelete) {
                                
                                swal("Poof! Your imaginary file has been deleted!", {
                                  icon: "success",
                                  
                                });
                                window.location=del_url;
                              } else {
                                swal("Your imaginary file is safe!");
                              }
                            });
                           } 
                        </script>
                        <div class="card">
                            <div class="card-title">
                                <h4>BOOK PAGE </h4>
                            </div>
                            <div col-lg-12>
                                <a href="welcome.php"><img src="library_images/go-back.jpg"></a>/ <a href="book_entry.php"><img src="library_images/add_book.jpg"></a> 
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    
                                    	<table class="table center">
                                        <thead>
                                            
											<tr>
											<th>Serial #</th>
											<th>book ID</th>
											<th>ISBN</th>
											<th>BOOK Name</th>
											<th>QUANTITY</th>
											<th>AUTHOR_NAME</th>
											<th>ACTION</th>
											</tr>
                                        </thead>
                                        <tbody>
											<?php
											include_once('connection.php');
											$count =1;
												$sql =	"SELECT * FROM book";
											$result = $conn->query($sql);
											?>
											<?php
											/* Checking Row Count */
											if ($result->num_rows > 0) {
											?>

											<?php while($row = $result->fetch_assoc()) { ?>
                                            <tr>
                                                <th scope="row"><?= $count; ?></th>
                                                <td><?= $row["book_id"]; ?></td>
                                                <td><span class="badge badge-primary"><?php echo $row["isbn"];?></span></td>
                                                <td><?php echo $row["book_name"];?></td>
                                                <td><?php echo $row["quantity"];?></td>
                                                <td class="color-primary"><?php echo $row["author_name"];?></td>
                                                <td><a href="view_book.php?id=<?php echo $row["book_id"]; ?>"><img src="library_images/add_book.jpg"></a>
                                                    <!-- <a href="delete_all.php?id=<?php //echo $row["book_id"]; ?>"><img src="library_images/delete_book.jpg"></a> -->
                                                    <a href="javascript:void(0);" onclick="confirm_del('<?php echo 'delete_all.php?id='.$row["book_id"]; ?>');"><img src="library_images/delete_book.jpg">
                                                </td>
                                            </tr>
                                            
                                            <?php 
                                            $count++;
                                        	}
                                             } ?>
                                        </tbody>
                                    </table>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    
    </center>              
               



