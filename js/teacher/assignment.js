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

// Add Assignment
$.ajax({
    url: "http://localhost/lm/api/teacher/main_data.php",
    success: function(response){

        $("#formAssignment").on('submit', function(e){
            e.preventDefault();
            
            var file_data = $("#file_assignment").prop('files')[0];
            var file_description= $("#file_description").val();
            var form_data = new FormData();

            form_data.append('file', file_data);
            form_data.append('file_desc', file_description);
            form_data.append('teacher_name', response.fname_teacher+ " " +response.lname_teacher);
            form_data.append('classid', classid);

            $.ajax({
                url: "http://localhost/lm/api/teacher/add_assignment.php",
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
    url: "http://localhost/lm/api/teacher/show_assignment.php",
    method: "POST",
    data: {
        classid: classid
    },
    success: function(response2){
        
        response2.forEach(element => {

            var tr = $("<tr>");

            var th = $("<th>", {
                "scope": "row"
            });

            th.html(element.assignment_created_at.slice(0,11));

            var td1 = $("<td>");

            td1.html(element.assignment_file);

            var td2 = $("<td>");

            td2.html(element.assignment_description);

            var td3 = $("<td>");

            var a = $("<a>", {
                "href": `deleteassignment.php?class_id=${classid}&assignment_id=${element.assignment_id}&file_name=${element.assignment_file}`,
                "class": "btn btn-danger",
                "onclick": `return confirm(\'Are you sure to delete ? \')`
            })

            a.html("Delete");
        
            var td_sub = $("<td>");

            var a_sub = $("<a>", {
                "href": `submitted.php?assignment_id=${element.assignment_id}&id=${classid}`,
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

            $("#showAssignment").append(tr);

        });

    }
});