// Get the class id
var classId = new URLSearchParams(window.location.search);
var classid = classId.get('id');

// Class Name
$.ajax({
    url: "http://localhost/lm/api/teacher/class_data.php",
    method: "POST",
    data: {
        classid: classid
    },
    success: function(response){

        $(".class_name").html(response[0].class_name);
        $("#overview_info").html(response[0].class_overview);

        if(response[0].class_overview === ""){

            var button_add = $("<button>", {
                "type": "submit",
                "class": "btn btn-primary",
                "data-toggle": "modal",
                "data-target": "#modalAdd"
            })

            button_add.html("Add Subject Overview");

            $("#modalChoice").append(button_add);

        }else{

            var button_edit = $("<button>", {
                "type": "submit",
                "class": "btn btn-secondary",
                "data-toggle": "modal",
                "data-target": "#modalEdit"
            })

            button_edit.html("Edit Subject Overview");

            $("#modalChoice").append(button_edit);

        }

    }
});

// Add Description Form
$("#addModalForm").on('submit', function(e){
    e.preventDefault();

    var sub_desc = $("#add_description").val();

    $.ajax({
        url: "http://localhost/lm/api/teacher/add_overview.php",
        method: "POST",
        data: {
            classid: classid,
            sub_desc: sub_desc
        },
        success: function(response){
            window.location.reload();
        }
    });

});

// Edit Description Form
$.ajax({
    url: "http://localhost/lm/api/teacher/class_data.php",
    method: "POST",
    data: {
        classid: classid
    },
    success: function(response){
        console.log(response);

        $("#edit_description").html(response[0].class_overview);

        $("#editModalForm").on('submit', function(e){
            e.preventDefault();

            var sub_desc = $("#edit_description").val();

            $.ajax({
                url: "http://localhost/lm/api/teacher/edit_overview.php",
                method: "POST",
                data: {
                    classid: classid,
                    sub_desc: sub_desc
                },
                success: function(response){
                    window.location.reload();
                }
            });

        });

    }
});

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