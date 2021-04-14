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

// Nested with main_data API
// Get all the assignments

$.ajax({
    url: "http://localhost/lm/api/main_data.php",
    success: function(response){
        var student_id = response.id_student;

        $.ajax({
            url: "http://localhost/lm/api/assignment.php",
            method: "POST",
            data: {
                classid:classid
            },
            success: function(response){

                var assignment_list = $("#assignment_list");

                response.forEach(element => {
                    var assignment_id = element.assignment_id;

                    // Nest with another API that calls if the student is already passed an assignment
                    $.ajax({
                        url: "http://localhost/lm/api/exist_assignment.php",
                        method: "POST",
                        data: {
                            student_id: student_id,
                            assignment_id: assignment_id
                        },
                        success: function(response){
                            // console.log(response);

                            // response.forEach(elements => {
                                // console.log(elements);
                            

                            if(response == "true"){

                            var assign = $("<div>", {
                                "class": "assignments"
                            })

                            var li = $("<li>", {
                                "href": "#",
                                "class": "list-group-item list-group-item-action my-2"
                            });

                            var d_flex = $("<div>", {
                                "class": "d-flex w-100 justify-content-between"
                            });

                            var h5 = $("<h5>", {
                                "class": "mb-1"
                            });

                            h5.html(element.assignment_file);

                            var small = $("<small>");

                            small.html(element.assignment_created_at.slice(0,10));

                            var small1 = $("<small>");

                            small1.html(element.assignment_description);

                            var a = $("<a>", {
                                "download": "",
                                "href": `../lm/assets/assignment/${element.assignment_file}`,
                                "class": "btn btn-info"
                            });

                            a.html("Download");

                            var random_number = Math.floor((Math.random() * 4) + 1);
                            var id_modals = element.assignment_file.slice(0, random_number);

                            var button = $("<button>", {
                                "type": "button",
                                "class": "btn btn-primary",
                                "data-toggle": "modal",
                                "data-target": `#${id_modals}`
                            });

                            button.html("Update Assignment");

                            d_flex.append(h5);
                            d_flex.append(small);
                            d_flex.append(small1);
                            d_flex.append(a);
                            d_flex.append(button);

                            li.append(d_flex);

                            // Modal
                            // modal_fade
                            var moda_fade = $("<div>", {
                                "class": "modal fade",
                                "id": id_modals  //-----------------------
                            });

                            // modal dialog
                            var modal_dialog = $("<div>", {
                                "class": "modal-dialog"
                            });

                            // modal-content
                            var modal_content = $("<div>", {
                                "class": "modal-content"
                            })

                            // modal-header HEADER----------------
                            var modal_header = $("<div>", {
                                "class": "modal-header"
                            });

                            // title
                            var h5_modal_title = $("<h5>", {
                                "class": "modal-title"
                            });

                            h5_modal_title.html("Update Assignment");

                            var button_close = $("<button>", {
                                "type": "button",
                                "class": "close",
                                "data-dismiss": "modal",
                                "aria-label": "Close"
                            });

                            var span_x = $("<span>", {
                                "aria-hidden": "true"
                            });

                            span_x.html("&times;");

                            button_close.append(span_x);

                            modal_header.append(h5_modal_title);
                            modal_header.append(button_close);

                            modal_content.append(modal_header);


                            // Modal body----------------------------------------------------
                            var modal_body = $("<div>", {
                                "class": "modal-body"
                            });

                            // form
                            var form_task = $("<form>", {
                                "class": "formUpdateAssignment"
                            });

                            // assignment_id
                            var input_hidden_assignment_id = $("<input>", {
                                "type": "hidden",
                                "class": "assignment_id_task",
                                "value": element.assignment_id
                            });

                            // student_id
                            var input_hidden_student_id = $("<input>", {
                                "type": "hidden",
                                "class": "student_id",
                                "value": student_id
                            });

                            form_task.append(input_hidden_assignment_id);
                            form_task.append(input_hidden_student_id);

                            // form-group1
                            var form_group1 = $("<div>", {
                                "class": "form-group"
                            });

                            var label_desc = $("<label>", {
                                "for": "recipient-name",
                                "class": "col-form-label"
                            });

                            label_desc.html("Description:");

                            var textarea = $("<textarea>", {
                                "class": "form-control",
                                "id": "message-text",
                                "required": ""
                            });

                            form_group1.append(label_desc);
                            form_group1.append(textarea);

                            // form-group2
                            var form_group2 = $("<div>", {
                                "class": "form-group"
                            });

                            var label_file = $("<label>", {
                                "for": "message-text",
                                "class": "col-form-label"
                            });

                            label_file.html("File:");

                            var input_file = $("<input>", {
                                "type": "file",
                                "class": "form-control input_file",
                                "required": ""
                            });

                            form_group2.append(label_file);
                            form_group2.append(input_file);

                            // Button send-----------------------
                            var button_send = $("<button>", {
                                "type": "submit",
                                "class": "btn btn-info"
                            });

                            button_send.html("Update")

                            form_task.append(form_group1);
                            form_task.append(form_group2);
                            form_task.append(button_send);

                            modal_body.append(form_task);

                            modal_content.append(modal_body);
                            modal_dialog.append(modal_content);
                            moda_fade.append(modal_dialog);

                            assign.append(li);
                            assign.append(moda_fade);
                            assignment_list.append(assign);

                            // Update Assignment 
                            $(".formUpdateAssignment").on('submit', function(e){
                                e.preventDefault();
                                e.stopPropagation();
                                e.stopImmediatePropagation();

                                var assignment_id_task = this.children[0].value;
                                var student_id = this.children[1].value;
                                var assignment_submission_description = this.children[2].parentElement[2].value;
                                var assignment_submission_file = this.children[3].parentElement[3].value;

                                assignment_submission_file = assignment_submission_file.replace(/^C:\\fakepath\\/i, '');

                                var file_data = $(".input_file").prop('files')[0];
                                var form_data = new FormData();

                                form_data.append('file', file_data);
                                form_data.append('assignment_id_task', assignment_id_task);
                                form_data.append('student_id', student_id);
                                form_data.append('assignment_submission_description', assignment_submission_description);
                                form_data.append('assignment_submission_file', assignment_submission_file);

                                $.ajax({
                                    url: "http://localhost/lm/api/update_assignment.php",
                                    method: "POST",
                                    enctype: 'multipart/form-data',
                                    dataType: 'text',  // what to expect back from the PHP script, if anything
                                    cache: false,
                                    contentType: false,
                                    processData: false,
                                    data: form_data,
                                    success: function(response){
                                        window. location. reload();
                                    }
                                });

                                this.children[2].parentElement[2].value = "";
                                this.children[3].parentElement[3].value = "";
                                
                            });

                            }else{
                                var assign = $("<div>", {
                                    "class": "assignments"
                                })

                                var li = $("<li>", {
                                    "href": "#",
                                    "class": "list-group-item list-group-item-action my-2"
                                });

                                var d_flex = $("<div>", {
                                    "class": "d-flex w-100 justify-content-between"
                                });

                                var h5 = $("<h5>", {
                                    "class": "mb-1"
                                });

                                h5.html(element.assignment_file);

                                var small = $("<small>");

                                small.html(element.assignment_created_at.slice(0,10));

                                var small1 = $("<small>");

                                small1.html(element.assignment_description);

                                var a = $("<a>", {
                                    "download": "",
                                    "href": `../lm/assets/assignment/${element.assignment_file}`,
                                    "class": "btn btn-info"
                                });

                                a.html("Download");

                                var random_number = Math.floor((Math.random() * 4) + 1);
                                var id_modals = element.assignment_file.slice(0, random_number);

                                var button = $("<button>", {
                                    "type": "button",
                                    "class": "btn btn-info",
                                    "data-toggle": "modal",
                                    "data-target": `#${id_modals}`
                                });

                                button.html("Submit Assignment");

                                d_flex.append(h5);
                                d_flex.append(small);
                                d_flex.append(small1);
                                d_flex.append(a);
                                d_flex.append(button);

                                li.append(d_flex);

                                // Modal
                                // modal_fade
                                var moda_fade = $("<div>", {
                                    "class": "modal fade",
                                    "id": id_modals  //-----------------------
                                });

                                // modal dialog
                                var modal_dialog = $("<div>", {
                                    "class": "modal-dialog"
                                });

                                // modal-content
                                var modal_content = $("<div>", {
                                    "class": "modal-content"
                                })

                                // modal-header HEADER----------------
                                var modal_header = $("<div>", {
                                    "class": "modal-header"
                                });

                                // title
                                var h5_modal_title = $("<h5>", {
                                    "class": "modal-title"
                                });

                                h5_modal_title.html("Submit Assignment");

                                var button_close = $("<button>", {
                                    "type": "button",
                                    "class": "close",
                                    "data-dismiss": "modal",
                                    "aria-label": "Close"
                                });

                                var span_x = $("<span>", {
                                    "aria-hidden": "true"
                                });

                                span_x.html("&times;");

                                button_close.append(span_x);

                                modal_header.append(h5_modal_title);
                                modal_header.append(button_close);

                                modal_content.append(modal_header);


                                // Modal body----------------------------------------------------
                                var modal_body = $("<div>", {
                                    "class": "modal-body"
                                });

                                // form
                                var form_task = $("<form>", {
                                    "class": "formSubmitAssignment"
                                });

                                // assignment_id
                                var input_hidden_assignment_id = $("<input>", {
                                    "type": "hidden",
                                    "class": "assignment_id_task",
                                    "value": element.assignment_id
                                });

                                // student_id
                                var input_hidden_student_id = $("<input>", {
                                    "type": "hidden",
                                    "class": "student_id",
                                    "value": student_id
                                });

                                form_task.append(input_hidden_assignment_id);
                                form_task.append(input_hidden_student_id);

                                // form-group1
                                var form_group1 = $("<div>", {
                                    "class": "form-group"
                                });

                                var label_desc = $("<label>", {
                                    "for": "recipient-name",
                                    "class": "col-form-label"
                                });

                                label_desc.html("Description:");

                                var textarea = $("<textarea>", {
                                    "class": "form-control",
                                    "id": "message-text",
                                    "required": ""
                                });

                                form_group1.append(label_desc);
                                form_group1.append(textarea);

                                // form-group2
                                var form_group2 = $("<div>", {
                                    "class": "form-group"
                                });

                                var label_file = $("<label>", {
                                    "for": "message-text",
                                    "class": "col-form-label"
                                });

                                label_file.html("File:");

                                var input_file = $("<input>", {
                                    "type": "file",
                                    "class": "form-control input_file",
                                    "required": ""
                                });

                                form_group2.append(label_file);
                                form_group2.append(input_file);

                                // Button send-----------------------
                                var button_send = $("<button>", {
                                    "type": "submit",
                                    "class": "btn btn-info"
                                });

                                button_send.html("Send")

                                form_task.append(form_group1);
                                form_task.append(form_group2);
                                form_task.append(button_send);

                                modal_body.append(form_task);

                                modal_content.append(modal_body);
                                modal_dialog.append(modal_content);
                                moda_fade.append(modal_dialog);

                                assign.append(li);
                                assign.append(moda_fade);
                                assignment_list.append(assign);

                                // Submit Assignment 
                                $(".formSubmitAssignment").on('submit', function(e){
                                    e.preventDefault();
                                    e.stopPropagation();
                                    e.stopImmediatePropagation();

                                    var assignment_id_task = this.children[0].value;
                                    var student_id = this.children[1].value;
                                    var assignment_submission_description = this.children[2].parentElement[2].value;
                                    var assignment_submission_file = this.children[3].parentElement[3].value;

                                    assignment_submission_file = assignment_submission_file.replace(/^C:\\fakepath\\/i, '');

                                    var file_data = $(".input_file").prop('files')[0];
                                    var form_data = new FormData();

                                    form_data.append('file', file_data);
                                    form_data.append('assignment_id_task', assignment_id_task);
                                    form_data.append('student_id', student_id);
                                    form_data.append('assignment_submission_description', assignment_submission_description);
                                    form_data.append('assignment_submission_file', assignment_submission_file);

                                    $.ajax({
                                        url: "http://localhost/lm/api/submit_assignment.php",
                                        method: "POST",
                                        enctype: 'multipart/form-data',
                                        dataType: 'text',  // what to expect back from the PHP script, if anything
                                        cache: false,
                                        contentType: false,
                                        processData: false,
                                        data: form_data,
                                        success: function(response){
                                            window. location. reload();
                                        }
                                    });

                                    this.children[2].parentElement[2].value = "";
                                    this.children[3].parentElement[3].value = "";
                                    
                                });
                            }

                        // });

                        }
                    });

                });

            }
        });


    // End of success
    }
    // End of ajax
});


// Outer document.ready
});