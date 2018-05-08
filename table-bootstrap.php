<?php
    include_once("header.php");
    include_once("content.php");
    include_once("connection.php");
?>


        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Table Basic </h4>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>>Student Name</th>
                                                <th>Student Batch</th>
                                                <th>Student Department</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <?php
                                                $sql = "SELECT std_id,name,batch,department FROM student WHERE std_id = '$id'"; 
                                                    $result = $conn->query($sql);               
                                                /* Checking Row Count */
                                                        if($result->num_rows > 0) 
                                                        {
                                                // output data of each row
                                                            $row = $result->fetch_assoc();
                                        ?>
                                                    <tr><td><?php echo $row["std_id"];?></td><td><?php echo $row["name"];?></td><td><?php echo $row["batch"];?></td><td><?php echo $row["department"];?></td><td><a href="delete_std.php?id=<?php echo $row["std_id"]; ?>">Delete</a></td></tr>
                                                        
                                        <?php

                                        ?>
                                    </table>
    <?php
                                                            } 
                                                        else 
                                                            {
                                                                echo "0 results";
                                                            }
?>
                                    <table class="table">
                                            <tr>
                                                
                                                <td><span class="badge badge-primary">Book ISBN</span></td>
                                                <td><span class="badge badge-primary">Book Name</span></td>
                                                <td><span class="badge badge-primary">Book Author</span></td>
                                                <td><span class="badge badge-primary">Action</span></td>
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
                                                
                                                <td><span class="badge badge-success"><?php echo $row["isbn"]; ?></span></td>
                                                <td><span class="badge badge-success"><?php echo $row["book_name"]; ?></span></td>
                                                <td><span class="badge badge-success"><?php echo $row["author_name"]; ?></span></td>
                                                <td><span class="badge badge-success"><a href="delete_book.php?bid=<?php echo $row['book_id']; ?>&id=<?php echo $id;?>">BOOK BACK TO STOCK</a></span></td>
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
                                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6">
                        
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6">
                        
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6">
                        
                    </div>
                        <!-- /# card -->
                    
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <!-- End PAge Content -->
            </div>
        </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <?php
                include_once("footer.php");
            ?>