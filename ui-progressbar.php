<?php
    include_once("header.php");
    include_once("content.php");
     include_once("connection.php");
    if(isset($_POST['submit']))
        {
                $name = $_REQUEST['name'];
                $department = $_REQUEST['dept'];
                $rollno = $_REQUEST['rollno'];
                $date_admision = $_REQUEST['datepicker'];
                $age = $_REQUEST['age'];
                $gender = $_POST['gender'];
                //$gender;
    
                $sql = "INSERT INTO student (name, department, batch,date_of_admission,age,gender) VALUES ('$name', '$department', '$rollno' ,'$date_admision','$age','$gender')";
                //$sql = "insert into student student_book(std_id,book_id) values ('$std-id','$book_id')";
            
            if (mysqli_query($conn, $sql)) 
                {
                    //echo "New record created successfully";
                    header("Location: student_page.php");

                } 
                else
                {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
        }
        else
        {
            echo "PLEASE FILL THE FORM";
        }

?>

        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <!-- column -->
                   
<html>
    <head>
          <title>Bootstrap 4 Example</title>
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
                  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
                  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
                  
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
    </head>
    <body>
        <div class="container">
            <div class="row"> 
                <div class="col-sm-4">
                    
                </div>
                <div class="col-sm-4">
                    <form method="post" action="">
                        <table border="3px" bgcolor="grey">
                            <tr><center>WELCOME TO STUDENT REGISTRATION</center></tr>
                            <tr>
                                <td>Name</td><td><input type="text" name="name"></td>
                            </tr>
                            <tr>
                                <td>Select department</td><td> <select name="dept" >
                                      <option value="Compuetr Science">Compuetr Science</option>
                                      <option value="Electronics">Electronics</option>
                                      <option value="Software">Software</option>
                                      <option value="Telecom">Telecom</option>
                                    </select> 
                                </td>
                            </tr>
                            <tr>
                                <td>Roll Number</td><td><input type="text" name="rollno"></td>
                            </tr>
                            <tr>
                                <td>Date of Admission</td><td><input type="text" class="datepicker" name="datepicker"></td>
                            </tr>
                            <tr>
                                <td>Age</td><td><input type="number" name="age"></td>
                            </tr>
                            <tr>
                                <td>Choose Gender</td><td><input type="radio" value="Male" name="gender">Male
                                <input type="radio" value="FeMale" name="gender">FeMale</td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="submit"></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="col-sm-4">
                    
                </div>
            </div>
        </div>
    </body>
</html>

                </div>

                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

</body>

</html>