<?php require_once('layout/student/header.php'); ?>

<!-- ======= Hero Section ======= -->
<section>

    <div class="container">

        <h1 class="text-center">BSCS I</h1>

        <h2 class="my-4">Assignments:</h2>

        <!-- <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-1">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea class="form-control" id="body" rows="4" cols="50"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">File</label>
                        <input type="file" class="form-control" id="file">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Assignment</button>
                </form>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <div class="list-group" style="height: 200px; overflow:scroll;">
                            <a href="#" class="list-group-item list-group-item-action my-2">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Assignment.pdf</h5>
                                    <small>2020-02-14</small>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action my-2">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Assignment.pdf</h5>
                                    <small>2020-02-14</small>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action my-2">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Assignment.pdf</h5>
                                    <small>2020-02-14</small>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action my-2">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Assignment.pdf</h5>
                                    <small>2020-02-14</small>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action my-2">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Assignment.pdf</h5>
                                    <small>2020-02-14</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="list-group" style="height: 200px; overflow:scroll;">
                    <li href="#" class="list-group-item list-group-item-action my-2">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Assignment.pdf</h5>
                            <small>2020-02-14</small>
                            <button class="btn btn-info">Download</button>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Submit Assignment</button>
                        </div>
                    </li>
                    <li href="#" class="list-group-item list-group-item-action my-2">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Assignment.pdf</h5>
                            <small>2020-02-14</small>
                            <button class="btn btn-info">Download</button>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Submit Assignment</button>
                        </div>
                    </li>
                    <li href="#" class="list-group-item list-group-item-action my-2">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Assignment.pdf</h5>
                            <small>2020-02-14</small>
                            <button class="btn btn-info">Download</button>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Submit Assignment</button>
                        </div>
                    </li>
                    <li href="#" class="list-group-item list-group-item-action my-2">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Assignment.pdf</h5>
                            <small>2020-02-14</small>
                            <button class="btn btn-info">Download</button>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Submit Assignment</button>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Submit Assignment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Description:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">File:</label>
                            <input type="file" class="form-control" id="message-text" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info">Send</button>
                </div>
            </div>
        </div>
    </div>


    </div>

    </div>

</section>
<!-- End Hero -->

<!-- ======= Footer ======= -->
<!-- <footer id="footer">
        <div class="container footer footer-bottom clearfix text-center">
            <div class="copyright">
                &copy; Copyright <strong><span>NORSU</span></strong> | <?php echo date('Y'); ?>
            </div>
        </div>
    </footer> -->
<!-- End Footer -->

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>