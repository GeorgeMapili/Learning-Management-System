<?php require_once('../layout/admin/header.php'); ?>

<!-- ======= Hero Section ======= -->
<section>

    <div class="container">


        <div class="d-flex justify-content-between">
            <h2 class="my-4">Dashboard</h2>
        </div>

        <div class="row">

            <div class="col-sm-12 col-md-4 col-lg-3 my-3">
                <div class="card">
                    <div class="card-body rounded" style="background-color: #3D4D6A; color:white;">
                        <h5 class="card-title text-center">STUDENTS</h5>
                        <div class="d-flex justify-content-center">
                            <p class="p-2" id="student"></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-3 my-3">
                <div class="card">
                    <div class="card-body rounded" style="background-color: #3D4D6A; color:white;">
                        <h5 class="card-title text-center">TEACHERS</h5>
                        <div class="d-flex justify-content-center">
                            <p class="p-2" id="teacher"></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-3 my-3">
                <div class="card">
                    <div class="card-body rounded" style="background-color: #3D4D6A; color:white;">
                        <h5 class="card-title text-center">CLASSES</h5>
                        <div class="d-flex justify-content-center">
                            <p class="p-2" id="classes"></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-3 my-3">
                <div class="card">
                    <div class="card-body rounded" style="background-color: #3D4D6A; color:white;">
                        <h5 class="card-title text-center">ACTIVE STUDENTS</h5>
                        <div class="d-flex justify-content-center">
                            <p class="p-2" id="active_students"></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-3 my-3">
                <div class="card">
                    <div class="card-body rounded" style="background-color: #3D4D6A; color:white;">
                        <h5 class="card-title text-center">MALE STUDENTS</h5>
                        <div class="d-flex justify-content-center">
                            <p class="p-2" id="male_students"></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-3 my-3">
                <div class="card">
                    <div class="card-body rounded" style="background-color: #3D4D6A; color:white;">
                        <h5 class="card-title text-center">FEMALE STUDENTS</h5>
                        <div class="d-flex justify-content-center">
                            <p class="p-2" id="female_students"></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-3 my-3">
                <div class="card">
                    <div class="card-body rounded" style="background-color: #3D4D6A; color:white;">
                        <h5 class="card-title text-center">MALE TEACHERS</h5>
                        <div class="d-flex justify-content-center">
                            <p class="p-2" id="male_teacher"></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-3 my-3">
                <div class="card">
                    <div class="card-body rounded" style="background-color: #3D4D6A; color:white;">
                        <h5 class="card-title text-center">FEMALE TEACHERS</h5>
                        <div class="d-flex justify-content-center">
                            <p class="p-2" id="female_teacher"></p>
                        </div>
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

<script>

    // Dashboard data
    $.ajax({
        url: "http://localhost/lm/api/admin/dashboard_data.php",
        success: function(response){
            $("#student").html(response.student);
            $("#teacher").html(response.teacher);
            $("#classes").html(response.class);
            $("#active_students").html(response.active_students);
            $("#male_students").html(response.male_students);
            $("#female_students").html(response.female_students);
            $("#male_teacher").html(response.male_teacher);
            $("#female_teacher").html(response.female_teacher);
        }
    });

</script>

</body>

</html>