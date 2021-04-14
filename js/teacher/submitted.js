// Get the class id
var classId = new URLSearchParams(window.location.search);
var classid = classId.get('id');
var assignment_id = classId.get('assignment_id');

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

        menu_dropdown.append(classmates);
        menu_dropdown.append(subject_overview);
        menu_dropdown.append(downloadable_material);
        menu_dropdown.append(assignments);
        menu_dropdown.append(announcements);
        menu_dropdown.append(quiz);

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

// select all the assignment_submitted to specific assignments
$.ajax({
    url: "http://localhost/lm/api/teacher/view_assignment.php",
    method: "POST",
    data: {
        assignment_id: assignment_id,
        classid: classid
    },
    success: function(response){
        
        response.forEach(element => {
            console.log(element);

            var tr = $("<tr>");

            var th = $("<th>", {
                "scope": "row"
            });

            th.html(element.student_fullname);

            var td1 = $("<td>");

            var a = $("<a>",{
                "download": "",
                "href": `../assets/assignment_submission/${element.assignment_submission_file}`
            })

            a.html(element.assignment_submission_file);

            td1.append(a);

            var td2 = $("<td>");

            td2.html(element.assignment_submission_description)

            var td3 = $("<td>");

            td3.html(element.assignment_submission_created_at.slice(0,11));

            tr.append(th);
            tr.append(td1);
            tr.append(td2);
            tr.append(td3);

            $("#showAssignmentSubmission").append(tr);

        });

    }
});