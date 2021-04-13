    // Get the class id
    var classId = new URLSearchParams(window.location.search);
    var classid = classId.get('id');

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


    // Get all the students
    $.ajax({
        url: "http://localhost/lm/api/teacher/my_students.php",
        method: "POST",
        data: {
            classid: classid
        },
        success: function(response1){

            response1.forEach(element => {

                var col_sm = $("<div>", {
                    "class": "col-sm-12 col-md-4 col-lg-2 my-3"
                });

                var card = $("<div>", {
                    "class": "card"
                })

                // Div1

                var d_flex = $("<div>", {
                    "class": "d-flex justify-content-end"
                });

                var dropdown = $("<div>", {
                    "class": "dropdown-menu"
                })

                var a = $("<a>", {
                    "class": "dropdown-item",
                    "href": `http://localhost/lm/teacher/deletestudent.php?student_id=${element.class_student_id}&class_id=${element.class_id}`,
                    "onclick": `return confirm(\'Are you sure to delete?\')`
                });

                a.html("Remove Student");

                dropdown.append(a);
                d_flex.append(dropdown);

                var button = $("<button>", {
                    "type": "button",
                    "class": "btn btn-sm dropdown-toggle dropdown-toggle-split",
                    "data-toggle": "dropdown",
                    "aria-haspopup": "true",
                    "aria-expanded": "false"
                });

                var span = $("<span>", {
                    "class": "sr-only"
                });

                span.html("Toggle Dropdown");

                button.append(span);
                d_flex.append(button);

                // Div2

                var text_center = $("<div>", {
                    "class": "text-center mt-2"
                });

                var img = $("<img>", {
                    "src": "../assets/img/students/" +element.student_image,
                    "style": "border:1px solid #fff; border-radius:50%; width: 60px; height: 60px;"
                });

                text_center.append(img);


                // Div3
                var card_body = $("<div>", {
                    "class": "card-body"
                });

                var h5 = $("<h5>", {
                    "class": "card-title text-center"
                });

                h5.html(element.student_fullname);

                var h6 = $("<div>", {
                    "class": "card-subtitle mb-2 text-muted text-center"
                });

                h6.html("Student");

                card_body.append(h5);
                card_body.append(h6);

                // Merge

                card.append(d_flex);
                card.append(text_center);
                card.append(card_body);

                col_sm.append(card);

                $(".row").append(col_sm);

            });

        }
    });

    // Search Name
    var formStudent = $("#formStudent");

    formStudent.keyup(function(){

        var student_name = $("#student_name").val();

        $.ajax({
            url: "http://localhost/lm/api/teacher/search_name.php",
            method: "POST",
            data: {
                student_name: student_name,
                classid: classid
            },
            success: function(response2){

                var searchResults = $("#resultName");
                var list_group = $("<div>", {
                    "class": "list-group"
                });

                if (response2.message !== "No Student.") {

                    response2.forEach(element => {

                        if(element.student_id){

                            var id = element.student_id;
                            var a = $("<a>", {
                                "class": "list-group-item list-group-item-action",
                                "href": `requeststudent.php?class_id=${classid}&student_name=${element.student_fullname}&student_id=${element.student_id}`
                            });
                            a.attr("title", "Click to send request");
                            a.html(element.student_fullname);
                            list_group.append(a);
                            searchResults.html(list_group);

                        }

                    });

                } else {
                    var p = $("<p>");
                    p.html(response2.message);
                    list_group.append(p);
                    searchResults.html(list_group);
                }

            }
        });

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