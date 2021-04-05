<?php require_once('layout/student/header.php'); ?>

<!-- ======= Hero Section ======= -->
<section>

    <div class="container">

        <h1 class="text-center">BSCS I</h1>

        <h2 class="my-4">Announcement:</h2>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="list-group" id="announcement_list" style="height: 200px; overflow:scroll;">
                </div>
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

$(document).ready(function(){

// Get the class id
var classId = new URLSearchParams(window.location.search);
var classid = classId.get('id');

$.ajax({
    url: "http://localhost/lm/api/class_data.php",
    method: "POST",
    data: {
        classid: classid
    },
    success: function(response){
        $("#class_title").html(response[0].class_name);

        // Menu Dropdown
        var menu_dropdown = $("#menu_dropdown");

        var classmates = $("<a>", {
            "class": "dropdown-item",
            "href": `myclassmates.php?id=${classid}`
        });

        classmates.html("My Classmates");

        var subject_overview = $("<a>", {
            "class": "dropdown-item",
            "href": `subjectoverview.php?id=${classid}`
        });

        subject_overview.html("Subject Overview");

        var downloadable_material = $("<a>", {
            "class": "dropdown-item",
            "href": `downloadable.php?id=${classid}`
        });

        downloadable_material.html("Downloadable Materials");

        var assignments = $("<a>", {
            "class": "dropdown-item",
            "href": `assignments.php?id=${classid}`
        });

        assignments.html("Assignments");

        var announcements = $("<a>", {
            "class": "dropdown-item",
            "href": `announcement.php?id=${classid}`
        });

        announcements.html("Announcements");

        var quiz = $("<a>", {
            "class": "dropdown-item",
            "href": `quiz.php?id=${classid}`
        });

        quiz.html("Quiz");

        menu_dropdown.append(classmates);
        menu_dropdown.append(subject_overview);
        menu_dropdown.append(downloadable_material);
        menu_dropdown.append(assignments);
        menu_dropdown.append(announcements);
        menu_dropdown.append(quiz);

    }
});

// Get all the announcements
$.ajax({
    url: "http://localhost/lm/api/show_announcements.php",
    method: "POST",
    data: {
        class_id: classid
    },
    success: function(response){

        response.forEach(element => {
            console.log(element);

            var a = $("<a>", {
                "class": "list-group-item list-group-item-action my-2"
            });

            var d_flex = $("<div>", {
                "class": "d-flex w-100 justify-content-between"
            });

            var h5 = $("<h5>", {
                "class": "mb-1"
            });

            h5.html(element.announcement_description);

            var small = $("<small>");

            small.html(element.announcement_created_at.slice(0,10));

            d_flex.append(h5);
            d_flex.append(small);
            a.append(d_flex);

            $("#announcement_list").append(a);
        });

    }
});

// Outer document.ready
});

</script>

</body>

</html>