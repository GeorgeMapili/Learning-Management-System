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
                                <a class="dropdown-item" href="home.php">My Class</a>
                                <a class="dropdown-item" href="notification.php">Notification</a>
                                <a class="dropdown-item" href="message.php">Message</a>
                                <!-- <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">My Class</a> -->
                            </div>
                        </div>
                    </li>

                </ul>

            </nav>

            <a href="profile.php" class="get-started-btn scrollto">Profile</a>
            <a href="logout.php" class="get-started-btn scrollto">Logout</a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section>

        <div class="container">


            <div class="d-flex justify-content-between">
                <h2 class="my-4">Profile</h2>
            </div>

            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <form>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter first name">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter last name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update Information</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Current Password</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">New Password</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter first name">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Confirm New Password</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter last name">
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
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Image</label>
                            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update Password</button>
                        </div>
                    </form>
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