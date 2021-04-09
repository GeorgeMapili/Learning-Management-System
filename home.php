<?php require_once('layout/student/header1.php') ?>
<!-- ======= Hero Section ======= -->
<section>

    <div class="container">


        <div class="d-flex justify-content-between">
            <h2 class="my-4">Class</h2>
            <!-- <button class="get-started-btn scrollto my-4 text-dark">Add Class</button> -->
            <button type="button" class="get-started-btn scrollto my-4 text-dark" data-toggle="modal" data-target="#exampleModalCenter">
                Join Class
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <form class="joinClass" id="joinClass">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Class Code</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="codeResult"></div>
                                <input type="text" class="form-control" name="classCode" id="classCode">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Join</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row"></div>

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

<!-- Jquery File -->
<script src="js/home.js"></script>
</body>

</html>