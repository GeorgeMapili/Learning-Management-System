<?php require_once('../layout/teacher/header1.php'); ?>

<!-- ======= Hero Section ======= -->
<section>
    <div class="container">
        <h1 class="text-center" id="class_name"></h1>
        <h2 class="my-4">Quiz Submitted:</h2>

        <div class="container mb-3">
            <div class="list-group" style="height: 200px; overflow:scroll;">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">File Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody id="showQuizSubmission"></tbody>
                </table>
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
<script src="../js/teacher/submittedquiz.js"></script>

</body>

</html>