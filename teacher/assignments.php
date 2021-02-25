<?php require_once('../layout/teacher/header1.php'); ?>

<!-- ======= Hero Section ======= -->
<section>
    <div class="container">
        <h1 class="text-center">BSCS I</h1>
        <h2 class="my-4">Assignment:</h2>

        <div class="container mb-3">
            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Add Assignment</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add Assignment</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">File Name</label>
                                    <input type="file" class="form-control" name="" id="" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Select where to place assignment</label>
                                    <form action="">
                                        <div class="form-group">
                                            <input type="checkbox" name="" id="" checked>BSCS I
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" name="" id="">BSCS I
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" name="" id="">BSCS I
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" name="" id="">BSCS I
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" name="" id="">BSCS I
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" name="" id="">BSCS I
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" name="" id="">BSCS I
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" name="" id="">BSCS I
                                        </div>
                                    </form>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Add file</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="list-group" style="height: 200px; overflow:scroll;">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Date Upload</th>
                                <th scope="col">File Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Submitted</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">2020-02-18</th>
                                <td>assignment.pdf</td>
                                <td>
                                    Assignment Description
                                </td>
                                <td><a href="submitted.php" class="btn btn-primary">View Submitted</a></td>
                                <td><button class="btn btn-danger">Delete</button></td>
                            </tr>

                            <tr>
                                <th scope="row">2020-02-18</th>
                                <td>assignment.pdf</td>
                                <td>
                                    Assignment Description
                                </td>
                                <td><button class="btn btn-primary">View Submitted</button></td>
                                <td><button class="btn btn-danger">Delete</button></td>
                            </tr>

                            <tr>
                                <th scope="row">2020-02-18</th>
                                <td>assignment.pdf</td>
                                <td>
                                    Assignment Description
                                </td>
                                <td><button class="btn btn-primary">View Submitted</button></td>
                                <td><button class="btn btn-danger">Delete</button></td>
                            </tr>

                            <tr>
                                <th scope="row">2020-02-18</th>
                                <td>assignment.pdf</td>
                                <td>
                                    Assignment Description
                                </td>
                                <td><button class="btn btn-primary">View Submitted</button></td>
                                <td><button class="btn btn-danger">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
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