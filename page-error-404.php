<?php
    include_once('header.php');
?>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div class="error-page" id="wrapper">
        <div class="error-box">
            <div class="error-body text-center">
                <h1>404</h1>
                <h3 class="text-uppercase">Page not found </h3>
                <p class="text-muted m-t-30 m-b-30">Please try after some time</p>
                <a class="btn btn-info btn-rounded waves-effect waves-light m-b-40" href="index.html">Back to home</a> </div>
            <footer class="footer text-center">&copy; 2018 Zebramin.</footer>
        </div>
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