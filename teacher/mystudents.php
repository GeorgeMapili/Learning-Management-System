<?php require_once('../layout/teacher/header1.php') ?>
<?php

    if(!isset($_GET['id'])){
        header("location:myclass.php");
    }

?>
<!-- ======= Hero Section ======= -->
<section>

    <div class="container">

        <h1 class="text-center" id="class_name"></h1>

        <div class="d-flex justify-content-between">
            <h2 class="my-4">My Students:</h2>
            <button type="button" class="get-started-btn scrollto my-4 text-dark" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add Student
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form id="formStudent">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Send Request</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <label for="">Student Name</label>
                                <input type="search" class="form-control" name="student_name" id="student_name" placeholder="Search name..." autocomplete="off">
                                <div id="resultName"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row"></div>

    </div>

</section>

<main id="main">



</main><!-- End #main -->

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
<script src="../js/teacher/mystudents.js"></script>

</body>

</html>