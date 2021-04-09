<?php require_once('layout/student/header1.php') ?>

<!-- ======= Hero Section ======= -->
<section>

    <div class="container">


        <div class="d-flex justify-content-between">
            <h2 class="my-4">Request</h2>
            <!-- <button class="get-started-btn scrollto my-4 text-dark">Add Class</button> -->
        </div>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="list-group" style="height: 200px; overflow:scroll;">
                    <table class="table table-dark">
                        <thead>
                            <tr class="d-flex justify-content-between">
                                <th>Class Name</th>
                                <th>Instructor</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                    <div class="tbody"></div>
                </div>
            </div>
        </div>

    </div>

</section>
<!-- End Hero -->

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

<script>
    $.ajax({
        url: "http://localhost/lm/api/main_data.php",
        success: function(response){
            console.log(response);

            var span = $("<span>", {
                "style": "color: white; ",
                "class": "lead mt-3 px-3"
            });

            span.html(`${response.fname_student} ${response.lname_student}`);

            $("#studentName").append(span);
        }
    });
</script>

<script src="js/request.js"></script>
</body>

</html>