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
                <form action="" method="GET">
                    <input type="text" name="query" />
                    <input type="submit" value="Search" />
                </form>  
                <?php
    $query = $_GET['query']??""; 
    // gets value sent over search form
     
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
       // $query = mysqli_real_escape_string($conn, $query);
        // makes sure nobody uses SQL injection
        
       echo  $results = "SELECT * FROM student
             WHERE (`name` LIKE '%".$query."%')";
         //exit();
         $raw_results = mysqli_query($conn,  $results);  
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
              //  echo "<p><h3>".$results['name']."</h3>".$results['department']."</p>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
       // echo "Minimum length is ".$min_length;
    }
?>

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
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <tr><td colspan="5" align="right"><a href="student_form.php"><img src="library_images/add_std.jpg"></a> </td></tr>
                                                <tr>
                                                    <th>Serial #</th>
                                                    <th>Student ID</th>
                                                    <th>Name</th>
                                                    <th>Batch</th>
                                                    <th>Add/Delete</th>
                                                </tr>
                                                    <?php
                                                        $count =1;
                                                        $sql =  "SELECT * from student";
                                                        $result = $conn->query($sql);
                                                    ?>
                                                    <?php
                                                    if ($result->num_rows > 0) {
                                                    ?>
                
                                                    <?php
        // output data of each row
                                                    while($row = $result->fetch_assoc()) {
                                                    ?>
                                            </tr>
                                        </thead>
                                        
                                            <tr>
                                                <td><?php echo $count;?></td>
                                                <td><?php echo $row["std_id"];?></td>
                                                <td><?php echo $row["name"];?></td>
                                                <td><?php echo $row["batch"];?></td>
                                                <td><a href="view_std.php?id=<?php echo $row["std_id"]; ?>"><img src="library_images/add_std.jpg"></a>
                                                    <a href="javascript:void(0);" onclick="confirm_del('<?php echo 'delete_student.php?id='.$row["std_id"]; ?>');"><img src="library_images/delete_std.jpg"></a></td>
                                            </tr>
                                                <?php
                                                    $count++;
                                                }
                                                ?>
                                        
                                    </table>
                                    <?php
                                        } else {
                                    echo "0 results";
                                                }
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                 
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>

            <!-- End Container fluid  -->
            <!-- footer -->
            
            
                