<?php require_once('../layout/teacher/header1.php'); ?>

<!-- ======= Hero Section ======= -->
<section>
    <div class="container">
        <h1 class="text-center" id="class_title"></h1>
        <h2 class="my-4">Quiz:</h2>

        <div class="container mb-3">
            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Add Quiz</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form id="quizForm">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Add Quiz</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">File</label>
                                    <input type="file" class="form-control" name="file" id="file" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" class="form-control" name="quiz_title" id="quiz_title" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Instruction</label>
                                    <textarea class="form-control" name="quiz_instruction" id="quiz_instruction" rows="3" required></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="list-group" style="height: 200px; overflow:scroll;">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Date Upload</th>
                                <th scope="col">File</th>
                                <th scope="col">Title</th>
                                <th scope="col">Submitted</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="showQuiz"></tbody>
                    </table>
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

// Get the class id
var classId = new URLSearchParams(window.location.search);
var classid = classId.get('id');

// Get the class title
$.ajax({
    url: "http://localhost/lm/api/teacher/class_data.php",
    method: "POST",
    data: {
        classid: classid
    },
    success: function(response){
        $("#class_title").html(response[0].class_name)

        var menu_dropdown = $("#menu_dropdown");

        var classmates = $("<a>", {
            "class": "dropdown-item",
            "href": `mystudents.php?id=${classid}`
        });

        classmates.html("My Students");

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

        var gradebook = $("<a>", {
            "class": "dropdown-item",
            "href": `gradebook.php?id=${classid}`
        });

        gradebook.html("Grade Book");

        menu_dropdown.append(classmates);
        menu_dropdown.append(subject_overview);
        menu_dropdown.append(downloadable_material);
        menu_dropdown.append(assignments);
        menu_dropdown.append(announcements);
        menu_dropdown.append(quiz);
        menu_dropdown.append(gradebook);

    }
});

// Class Name
$.ajax({
    url: "http://localhost/lm/api/teacher/class_data.php",
    method: "POST",
    data: {
        classid: classid
    },
    success: function(response){

        $("#class_name").html(response[0].class_name);

    }
});

// Add Quiz
$.ajax({
    url: "http://localhost/lm/api/teacher/main_data.php",
    success: function(response){

        $("#quizForm").on('submit', function(e){
            e.preventDefault();
            
            var file_data = $("#file").prop('files')[0];
            var quiz_title= $("#quiz_title").val();
            var quiz_instruction= $("#quiz_instruction").val();
            var form_data = new FormData();

            form_data.append('file', file_data);
            form_data.append('quiz_title', quiz_title);
            form_data.append('quiz_instruction', quiz_instruction);
            form_data.append('classid', classid);

            $.ajax({
                url: "http://localhost/lm/api/teacher/add_quiz.php",
                method: "POST",
                enctype: 'multipart/form-data',
                dataType: 'text',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                success: function(response1){
                    window. location. reload();
                }
            });

        });

    }
});

// Show all assignment
$.ajax({
    url: "http://localhost/lm/api/teacher/show_quiz.php",
    method: "POST",
    data: {
        classid: classid
    },
    success: function(response2){
        
        response2.forEach(element => {
            console.log(element);

            var tr = $("<tr>");

            var th = $("<th>", {
                "scope": "row"
            });

            th.html(element.quiz_created_at.slice(0,11));

            var td1 = $("<td>");

            td1.html(element.quiz_file);

            var td2 = $("<td>");

            td2.html(element.quiz_title);

            var td3 = $("<td>");

            var a = $("<a>", {
                "href": `deletequiz.php?class_id=${classid}&quiz_id=${element.quiz_id}&file_name=${element.quiz_file}`,
                "class": "btn btn-danger",
                "onclick": `return confirm(\'Are you sure to delete ? \')`
            })

            a.html("Delete");
        
            var td_sub = $("<td>");

            var a_sub = $("<a>", {
                "href": `submittedquiz.php?quiz_id=${element.quiz_id}&id=${classid}`,
                "class": "btn btn-primary"
            });

            a_sub.html("View Submitted");

            td_sub.append(a_sub);

            td3.append(a);

            tr.append(th);
            tr.append(td1);
            tr.append(td2);
            tr.append(td_sub);
            tr.append(td3);

            $("#showQuiz").append(tr);

        });

    }
});

</script>

</body>

</html>