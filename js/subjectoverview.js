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
        console.log(response);

        $("#class_title").html(response[0].class_name);
        $("#class_title1").html(response[0].class_name);
        $("#class_desc").html(response[0].class_overview);

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

});