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
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="headers" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="home.php">NORSU</a></h1>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active">
                        <div class="btn-group">
                            <a href="home.php" class="btn btn-secondary">My Class</a>
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuReference">
                                <a class="dropdown-item" href="myclassmates.php">My Classmates</a>
                                <a class="dropdown-item" href="subjectoverview.php">Subject Overview</a>
                                <a class="dropdown-item" href="#">Downloadable Materials</a>
                                <a class="dropdown-item" href="#">Assignments</a>
                                <a class="dropdown-item" href="#">Announcements</a>
                                <a class="dropdown-item" href="#">Quiz</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">My Class</a>
                            </div>
                        </div>
                    </li>
                    <li class=""><a href="notification.php">Notification</a></li>
                    <li class=""><a href="message.php">Message</a></li>

                </ul>

            </nav>

            <a href="login.php" class="get-started-btn scrollto">Profile</a>
            <a href="login.php" class="get-started-btn scrollto">Logout</a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->

    <div class="container">
        <section></section>
        <h1 class="text-center">BSCS I</h1>
        <div class="row justify-content-between my-3 mx-2">
            <div class="col-lg-3 col-md-12 col-sm-12 shadow-lg p-3 mb-5 bg-white rounded" style="height:30vh; background: rgb(189, 187, 187);">
                <div style="height: 100px; width:100px; margin: 0 auto;" class="mt-2 text-center">
                    <img src="assets/img/directors/perfecto.jpg" class="img-thumbnail" alt="">
                </div>
                <div class="text-center">
                    <h5>Test Name</h5>
                </div>
                <div class="text-center">
                    <a href="">View Profile</a>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 h-75 shadow-lg p-3 mb-5 bg-white rounded" style="min-height: 35vh; background: rgb(189, 187, 187);">
                <textarea name="" class="form-control" id="" cols="10" rows="4" placeholder="Start a discussion..."></textarea>
                <div class="mt-4 text-right">
                    <button class="get-started-btn scrollto text-dark">Post</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 h-100 shadow-lg p-3 mb-5 bg-white rounded" style="min-height: 50vh; background: rgb(189, 187, 187);">
                <h5 class="mt-1">Todo list</h5>
                <textarea name="" id="" cols="10" rows="3" class="form-control" placeholder="..."></textarea>
                <div class="mt-1 text-right">
                    <button class="get-started-btn scrollto text-dark">Add</button>
                </div>

                <hr>


                <div class="overflow-auto">
                    Finish my homework before friday Finish my homework before friday Finish my homework before friday Finish my homework before friday
                </div>

                <div class="overflow-auto"></div>

            </div>
        </div>

        <hr class="my-1">

    </div>

    <section>
        <div class="container">
            <h2 class="my-1">Posts</h2>
            <div class="row mb-5">
                <div class="w-50 h-100 m-auto shadow-lg p-3 mb-5 bg-white rounded" style="min-height: 35vh;background: rgb(189, 187, 187);"></div>
            </div>
            <div class="row mb-5">
                <div class="w-50 h-100 m-auto shadow-lg p-3 mb-5 bg-white rounded" style="min-height: 35vh;background: rgb(189, 187, 187);"></div>
            </div>
        </div>
    </section>






    <!-- End Hero -->

    <!-- ======= Footer ======= -->
    <!-- <footer id=" footer">
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