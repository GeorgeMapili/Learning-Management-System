<?php require_once('../layout/teacher/header.php') ?>

<!-- ======= Hero Section ======= -->
<section>

    <div class="container">


        <div class="d-flex justify-content-between">
            <h2 class="my-4">Profile</h2>
        </div>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <form id="formInfo">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="text" class="form-control" id="first_name" aria-describedby="emailHelp" placeholder="Enter first name" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Last Name</label>
                                <input type="text" class="form-control" id="last_name" aria-describedby="emailHelp" placeholder="Enter last name" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update Information</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <form id="formPass">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Current Password</label>
                        <input type="password" class="form-control" name="current_password" id="current_password" aria-describedby="emailHelp" required>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">New Password</label>
                                <input type="password" class="form-control" name="new_password" id="new_password" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Confirm New Password</label>
                                <input type="password" class="form-control" name="confirm_new_password" id="confirm_new_password" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update Password</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <form id="formImg">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" class="form-control" id="file_image" name="profile" aria-describedby="emailHelp" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update Password</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

</section>

<main id="main">



</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="container footer-bottom clearfix text-center">
        <div class="copyright">
            &copy; Copyright <strong><span>NORSU</span></strong> | <?php echo date('Y'); ?>
        </div>
    </div>
</footer>
<!-- End Footer -->

<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
<div id="preloader"></div>

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

<!-- Jquery Validator -->
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>

<!-- Jquery extension validator -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script>

<!-- Jquery File Validation -->
<script src="../js/js/vendor/jquery.ui.widget.js"></script>
<script src="../js/js/jquery.iframe-transport.js"></script>
<script src="../js/js/jquery.fileupload.js"></script>

<script src="../js/teacher/profile.js"></script>

</body>

</html>