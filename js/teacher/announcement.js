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

// Add Announcement
$.ajax({
    url: "http://localhost/lm/api/teacher/main_data.php",
    success: function(response){

        var id_teacher = response.id_teacher;

        $("#announcementForm").on('submit', function(e){
            e.preventDefault();

            var annoucement_desc = $("#annoucement_desc").val();

            $.ajax({
                url: "http://localhost/lm/api/teacher/add_announcement.php",
                method: "POST",
                data: {
                    classid: classid,
                    id_teacher: id_teacher,
                    annoucement_desc: annoucement_desc
                },
                success: function(response1){
                    window. location. reload();
                }
            });

        });

    }
});


// Show all assignment
$.ajax({
    url: "http://localhost/lm/api/teacher/main_data.php",
    success: function(response){

        var id_teacher = response.id_teacher;

        $.ajax({
            url: "http://localhost/lm/api/teacher/show_announcement.php",
            method: "POST",
            data: {
                classid: classid,
                id_teacher: id_teacher
            },
            success: function(response2){
                
                response2.forEach(element => {

                    var tr = $("<tr>");

                    var th = $("<th>", {
                        "scope": "row"
                    });

                    th.html(element.announcement_created_at.slice(0,11));

                    var td2 = $("<td>");

                    td2.html(element.announcement_description);

                    var td3 = $("<td>");

                    var a = $("<a>", {
                        "href": `deleteannouncement.php?class_id=${classid}&announcement_id=${element.announcement_id}`,
                        "class": "btn btn-danger",
                        "onclick": `return confirm(\'Are you sure to delete ? \')`
                    })

                    a.html("Delete");

                    td3.append(a);

                    tr.append(th);
                    tr.append(td2);
                    tr.append(td3);

                    $("#showAnnouncement").append(tr);

                });

            }
        });
}
});