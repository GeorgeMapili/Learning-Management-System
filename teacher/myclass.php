<?php require_once('../layout/teacher/header.php'); ?>

<!-- ======= Hero Section ======= -->
<section>

    <div class="container">


        <div class="d-flex justify-content-between">
            <h2 class="my-4">Class</h2>
            <!-- <button class="get-started-btn scrollto my-4 text-dark">Add Class</button> -->
            <button type="button" class="get-started-btn scrollto my-4 text-dark" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add Class
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Create New Class</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <label for="">Class Name</label>
                            <input type="text" class="form-control" name="" id="">
                            <label for="">Class Description</label>
                            <textarea type="text" class="form-control" name="" id="" rows="2"></textarea>
                            <label for="">Select Grade</label>
                            <select class="form-control" name="" id="">
                                <option value="none">None</option>
                                <option value="first_year">First Year</option>
                                <option value="second_year">Second Year</option>
                                <option value="third_year">Third Year</option>
                                <option value="fourth_year">Fourth Year</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Create</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12 col-md-4 col-lg-3 my-3">
                <div class="card">
                    <a href="main.php" style="background-color: #459BC8; color:white;">
                        <div class="card-body">
                            <h5 class="card-title text-center">BSCS I</h5>
                            <p>Mr. Test Name</p>
                        </div>
                    </a>
                    <div class="d-flex justify-content-center">
                        <a href="" class="p-2 text-danger"><small>Delete Class</small></a>
                        <p class="p-2">IWa23jaHas</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-3 my-3">
                <div class="card">
                    <a href="main.php" style="background-color: #459BC8; color:white;">
                        <div class="card-body">
                            <h5 class="card-title text-center">BSCS I</h5>
                            <p>Mr. Test Name</p>
                        </div>
                    </a>
                    <div class="d-flex justify-content-center">
                        <a href="" class="p-2 text-danger"><small>Delete Class</small></a>
                        <p class="p-2">IWa23jaHas</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-3 my-3">
                <div class="card">
                    <a href="main.php" style="background-color: #459BC8; color:white;">
                        <div class="card-body">
                            <h5 class="card-title text-center">BSCS I</h5>
                            <p>Mr. Test Name</p>
                        </div>
                    </a>
                    <div class="d-flex justify-content-center">
                        <a href="" class="p-2 text-danger"><small>Delete Class</small></a>
                        <p class="p-2">IWa23jaHas</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-3 my-3">
                <div class="card">
                    <a href="main.php" style="background-color: #459BC8; color:white;">
                        <div class="card-body">
                            <h5 class="card-title text-center">BSCS I</h5>
                            <p>Mr. Test Name</p>
                        </div>
                    </a>
                    <div class="d-flex justify-content-center">
                        <a href="" class="p-2 text-danger"><small>Delete Class</small></a>
                        <p class="p-2">IWa23jaHas</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-3 my-3">
                <div class="card">
                    <a href="main.php" style="background-color: #459BC8; color:white;">
                        <div class="card-body">
                            <h5 class="card-title text-center">BSCS I</h5>
                            <p>Mr. Test Name</p>
                        </div>
                    </a>
                    <div class="d-flex justify-content-center">
                        <a href="" class="p-2 text-danger"><small>Delete Class</small></a>
                        <p class="p-2">IWa23jaHas</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-3 my-3">
                <div class="card">
                    <a href="main.php" style="background-color: #459BC8; color:white;">
                        <div class="card-body">
                            <h5 class="card-title text-center">BSCS I</h5>
                            <p>Mr. Test Name</p>
                        </div>
                    </a>
                    <div class="d-flex justify-content-center">
                        <a href="" class="p-2 text-danger"><small>Delete Class</small></a>
                        <p class="p-2">IWa23jaHas</p>
                    </div>
                </div>
            </div>


        </div>

    </div>

</section>

<!-- Vendor JS Files -->
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>
<script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../assets/vendor/venobox/venobox.min.js"></script>
<script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="../assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>

</body>

</html>