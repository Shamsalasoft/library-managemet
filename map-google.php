<?php
    include_once('header.php');
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
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Basic map</h4>
                                <div class="card-title-right-icon">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="gmap_unix">
                                <div class="map" id="basic-map"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Fusion Tables layers</h4>
                                <div class="card-title-right-icon">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="gmap_unix">
                                <div id="map-2" class="map"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Geometry overlays</h4>
                                <div class="card-title-right-icon">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="gmap_unix">
                                <div class="map" id="map-3"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Elevation locations</h4>
                                <div class="card-title-right-icon">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="gmap_unix">
                                <div id="map-4" class="map"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Geolocation</h4>
                                <div class="card-title-right-icon">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="gmap_unix">
                                <div class="map" id="map-5"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>KML layers</h4>
                                <div class="card-title-right-icon">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="gmap_unix">
                                <div id="map-6" class="map"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Layers</h4>
                                <div class="card-title-right-icon">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="gmap_unix">
                                <div class="map" id="map-7"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Map events</h4>
                                <div class="card-title-right-icon">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="gmap_unix">
                                <div class="map" id="map-8"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
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


    <script src="js/lib/gmap/gmapApi.js"></script>
    <script src="js/lib/gmap/gmaps.js"></script>
    <script src="js/lib/gmap/gmap.init.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

</body>

</html>