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
                    $("#teacher_name").html(response[0].teacher_name);

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

            // Get all the classmates students
            $.ajax({
                url: "http://localhost/lm/api/subject_classmates.php",
                method: "POST",
                data: {
                    class_id: classid
                },
                success: function(response){

                    response.forEach(element => {

                        var row = $(".row");

                        var div1 = $("<div>", {
                            "class": "col-sm-12 col-md-4 col-lg-2 my-3 mt-4"
                        });

                        var card = $("<div>", {
                            "class": "card"
                        });

                        var div_text_center = $("<div>", {
                            "class": "text-center mt-2"
                        });

                        var img = $("<img>", {
                            "src": `assets/img/students/${element.student_image}`,
                            "style": "border:1px solid #fff; border-radius:50%;",
                            "alt": "",
                            "width": "50"
                        });

                        var card_body = $("<div>", {
                            "class": "card-body"
                        });

                        var card_title = $("<h5>", {
                            "class": "card-title text-center"
                        });

                        card_title.html(element.student_fullname);

                        var card_subtitle = $("<h6>", {
                            "class": "card-subtitle mb-2 text-muted text-center"
                        });

                        card_subtitle.html("Student");

                        div_text_center.append(img);
                        card_body.append(card_title);
                        card_body.append(card_subtitle);

                        card.append(div_text_center);
                        card.append(card_body);

                        div1.append(card);

                        row.append(div1);

                    });

                }
            
            });

});