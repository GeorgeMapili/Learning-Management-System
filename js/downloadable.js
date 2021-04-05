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

$.ajax({
    url: "http://localhost/lm/api/downloadable.php",
    method: "POST",
    data: {
        classid: classid
    },
    success: function(response){

        var downloads = $("#downloads");

        response.forEach(element => {

        var a = $("<a>", {
            "download": "",
            "href": `../lm/assets/download/${element.downloadable_file}`,
            "class": "list-group-item list-group-item-action my-2"
        });

        var d_flex = $("<div>", {
            "class": "d-flex w-100 justify-content-between"
        })

        var h5 = $("<h5>", {
            "class": "mb-1"
        });

        h5.html(element.downloadable_file);

        var small = $("<small>");

        small.html(element.downloadable_created_at.slice(0,10));

        d_flex.append(h5);
        d_flex.append(small);
        a.append(d_flex);

        downloads.append(a);

        });

    }
});

// Outer document.ready
});