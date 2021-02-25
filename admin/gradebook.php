<?php require_once('../layout/admin/header.php'); ?>

<!-- ======= Hero Section ======= -->
<section>

    <div class="container">


        <div class="d-flex justify-content-between">
            <h2 class="my-4">Gradebook</h2>
        </div>

        <div class="form-group">
            <select class="form-control" name="" id="">
                <option value="">Select a class</option>
                <option value="BSCSI">BSCS I</option>
                <option value="BSCSI">BSCS I</option>
                <option value="BSCSI">BSCS I</option>
                <option value="BSCSI">BSCS I</option>
                <option value="BSCSI">BSCS I</option>
                <option value="BSCSI">BSCS I</option>
                <option value="BSCSI">BSCS I</option>
                <option value="BSCSI">BSCS I</option>
                <option value="BSCSI">BSCS I</option>
            </select>
        </div>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">

                <div class="d-flex justify-content-between m-2">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addColModalCenter">
                        Add Column
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="addColModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Add Column</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <label for="">Column Name</label>
                                    <input type="text" class="form-control" name="" id="">
                                    <label for="">Score</label>
                                    <input type="text" class="form-control" name="" id="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#rmvColModalCenter">
                        Remove Column
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="rmvColModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Remove Column</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <label for="">Column Name</label>
                                    <input type="text" class="form-control" name="" id="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="list-group" style="height: 400px; overflow:scroll;">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Student ID</th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Quiz 1</th>
                                <th scope="col">Quiz 2</th>
                                <th scope="col">Quiz 3</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">23783471</th>
                                <td>Test Name</td>
                                <td>80/100</td>
                                <td>50/100</td>
                                <td>70/100</td>
                            </tr>
                            <tr>
                                <th scope="row">23783471</th>
                                <td>Test Name</td>
                                <td>80/100</td>
                                <td>50/100</td>
                                <td>70/100</td>
                            </tr>
                            <tr>
                                <th scope="row">23783471</th>
                                <td>Test Name</td>
                                <td>80/100</td>
                                <td>50/100</td>
                                <td>70/100</td>
                            </tr>
                            <tr>
                                <th scope="row">23783471</th>
                                <td>Test Name</td>
                                <td>80/100</td>
                                <td>50/100</td>
                                <td>70/100</td>
                            </tr>
                            <tr>
                                <th scope="row">23783471</th>
                                <td>Test Name</td>
                                <td>80/100</td>
                                <td>50/100</td>
                                <td>70/100</td>
                            </tr>
                            <tr>
                                <th scope="row">23783471</th>
                                <td>Test Name</td>
                                <td>80/100</td>
                                <td>50/100</td>
                                <td>70/100</td>
                            </tr>
                            <tr>
                                <th scope="row">23783471</th>
                                <td>Test Name</td>
                                <td>80/100</td>
                                <td>50/100</td>
                                <td>70/100</td>
                            </tr>
                            <tr>
                                <th scope="row">23783471</th>
                                <td>Test Name</td>
                                <td>80/100</td>
                                <td>50/100</td>
                                <td>70/100</td>
                            </tr>
                            <tr>
                                <th scope="row">23783471</th>
                                <td>Test Name</td>
                                <td>80/100</td>
                                <td>50/100</td>
                                <td>70/100</td>
                            </tr>
                            <tr>
                                <th scope="row">23783471</th>
                                <td>Test Name</td>
                                <td>80/100</td>
                                <td>50/100</td>
                                <td>70/100</td>
                            </tr>
                            <tr>
                                <th scope="row">23783471</th>
                                <td>Test Name</td>
                                <td>80/100</td>
                                <td>50/100</td>
                                <td>70/100</td>
                            </tr>
                        </tbody>
                    </table>
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