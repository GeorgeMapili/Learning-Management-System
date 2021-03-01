<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>NORSU</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/norsu.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="headers" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="index.php">NORSU</a></h1>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>

                </ul>
            </nav><!-- .nav-menu -->

            <a href="register.php" class="get-started-btn scrollto">Register</a>
            <a href="login.php" class="get-started-btn scrollto">Login</a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="heros">

        <div class="container">
            <div data-aos="fade-up" id="contact" class="contact">
                <h1 class="text-center my-3">Register</h1>
                <form class="register_form" id="student_register_form" enctype="multipart/form-data">
                    <div class="registerResult">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="text" class="form-control" name="fname" id="fname">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="lname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="lname" id="lname">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email_address" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email_address" id="email_address">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password">
                    </div>
                    <div class="mb-3">
                        <label for="birthday" class="form-label">Birthday</label>
                        <input type="date" class="form-control" name="birthday" id="birthday">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-control" name="gender" id="gender">
                            <option value="">Select a gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="profile" class="form-label">Profile Image</label>
                        <input type="file" class="form-control" name="profile" id="profile">
                    </div>

                    <div class="text-center ">
                        <button type="submit" class="btn btn-info btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </section><!-- End Hero -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container footer-bottom clearfix text-center">
            <div class="copyright">
                &copy; Copyright <strong><span>NORSU</span></strong> | <?php echo date('Y'); ?>
            </div>
        </div>
    </footer>
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

    <!-- Jquery Validator -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <!-- Jquery extension validator -->
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script>

    <!-- Jquery File -->
    <script src="js/js/vendor/jquery.ui.widget.js"></script>
    <script src="js/js/jquery.iframe-transport.js"></script>
    <script src="js/js/jquery.fileupload.js"></script>

    <!-- Register Js -->
    <script src="js/register_student.js"></script>
</body>

</html>