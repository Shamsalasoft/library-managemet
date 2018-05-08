    <?php
        include_once("header.php");
        include_once("content.php");
    ?>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
      swal("YAAAAAA!", "WELCOME TO LIBRARY SYSTEM!", "success")
    </script>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"><i><b><center>WELCOME TO LIBRARY MANAGEMENT SYSTEM</center></b></i></h3> </div>
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
                  <div class="alert alert-danger">
                       <i><b><h3><a  href="alertbookpage.php">ALERT TODAY IS LAST DATE FOR SUBMISSION BOOKS</a></h3></b></i>
                  </div>
            </div>
                <center>
                    <div>
                        <img src="library_images/lib.jpg">
                    </div> 
                </center>
                <!-- End PAge Content -->
                <?php
                    include_once("footer.php");
                ?>