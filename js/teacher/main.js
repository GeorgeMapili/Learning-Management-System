    var conn = new WebSocket('ws://localhost:8080');
    conn.onopen = function(e) {
        console.log("Connection established!");
    };

    conn.onmessage = function(e) {
        // console.log(e.data);

        var data = JSON.parse(e.data);

        console.log(data);

        $.ajax({
            url: "http://localhost/lm/api/teacher/main_data.php",
            success: function(response) {
                // console.log(response);

                var id_teacher = response.id_teacher;
                var fname_teacher = response.fname_teacher;
                var lname_teacher = response.lname_teacher;

                var fullname = `${fname_teacher} ${lname_teacher}`;

                var cId = new URLSearchParams(window.location.search);
                var cid = cId.get('id');

                if(cid === data.classid){

                    var row_5 = $("<div>", {
                        "class": "row mb-5"
                    });

                    var w_50 = $("<div>", {
                        "class": "w-50 h-100 m-auto shadow-lg p-3 mb-3 bg-white rounded",
                        "style": "min-height: 35vh; background: rgb(189,187,187)"
                    });

                    // 1st

                    var d_flex1 = $("<div>", {
                        "class": "d-flex"
                    });

                    if(~data.img.indexOf("teachers")){

                        var img = $("<img>", {
                            "style": "height: 50px; width: 50px;",
                            "src": data.img,
                            "class": "rounded-circle"
                        });

                    }else{

                        var img = $("<img>", {
                            "style": "height: 50px; width: 50px;",
                            "src": "../" +data.img,
                            "class": "rounded-circle"
                        });

                    }

                    var h5 = $("<h5>", {
                        "class": "ml-2 mt-2"
                    });

                    h5.html(data.fullname);

                    var small = $("<small>", {
                        "class": "ml-auto"
                    });

                    small.html(data.dt);

                    d_flex1.append(img);
                    d_flex1.append(h5);
                    d_flex1.append(small);

                    // 2nd

                    // Get the users information like id,name,etc.

                    if(data.fullname === fullname){

                        var d_flex2 = $("<div>", {
                        "class": "d-flex justify-content-end my-2"
                        });

                        // Start here the change

                        var button_toggle = $("<button>", {
                            "type": "button",
                            "class": "btn btn-sm dropdown-toggle dropdown-toggle-split",
                            "data-toggle": "dropdown",
                            "aria-haspopup": "true",
                            "aria-expanded": "false"
                        });

                        var span_sr_only = $("<span>", {
                            "class": "sr-only"
                        });

                        span_sr_only.html("Toggle Dropdown");

                        button_toggle.append(span_sr_only);

                        var div_dropdown = $("<div>", {
                            "class": "dropdown-menu"
                        });

                        var button_class_dropdown_item_update = $("<a>", {
                            "class": "dropdown-item",
                            "href": `http://localhost/lm/teacher/updateposts.php?class_id=${data.classid}&post_id=${data.postid}`
                        });

                        button_class_dropdown_item_update.html("Update");

                        var div_dropdown_divider = $("<div>", {
                            "class": "dropdown-divider"
                        });

                        var a_class_dropdown_iten_delete = $("<a>", {
                            "class": "dropdown-item",
                            "href": `http://localhost/lm/teacher/deleteposts.php?class_id=${data.classid}&post_id=${data.postid}`,
                            "onclick": `return confirm(\'Are you sure to delete ?\')`
                        });

                        a_class_dropdown_iten_delete.html("Delete");

                        div_dropdown.append(button_class_dropdown_item_update);
                        div_dropdown.append(div_dropdown_divider);
                        div_dropdown.append(a_class_dropdown_iten_delete);

                        d_flex2.append(div_dropdown);

                        d_flex2.append(button_toggle);
                        
                    }

                    // 3rd

                    var div_jumbotron = $("<div>", {
                        "class": "jumbotron jumbotron-fluid mt-2"
                    });

                    var div_container = $("<div>", {
                        "class": "container"
                    });

                    var p_lead = $("<p>", {
                        "class": "lead"
                    });

                    p_lead.html(data.content);

                    div_container.append(p_lead);
                    div_jumbotron.append(div_container);

                    // Final

                    w_50.append(d_flex1);

                    if(data.fullname === fullname){
                    w_50.append(d_flex2);
                    }

                    w_50.append(div_jumbotron);

                    row_5.append(w_50);

                    $("#postsHolder").prepend(row_5);

                }

            }
        });

    };

    // Get the users information like id,name,etc.
    $.ajax({
        url: "http://localhost/lm/api/teacher/main_data.php",
        success: function(response) {
            // console.log(response);

            var id_student = response.id_teacher;
            var fname_teacher = response.fname_teacher;
            var lname_teacher = response.lname_teacher;
            var img_teacher = "../assets/img/teachers/" + response.img_teacher;
            var email_teacher = response.email_teacher;

            var teacher_name = $("#teacher_name");
            var teacher_img = $("#teacher_img");

            teacher_name.html(`${fname_teacher} ${lname_teacher}`);

            var img = $("<img>", {
                "src": img_teacher,
                "class": "img-thumbnail",
                "style": "width: 80px; height:80px;"
                
            });

            teacher_img.append(img);


            // Get the class id
            var classId = new URLSearchParams(window.location.search);
            var classid = classId.get('id');

            console.log(classid);

            var fullname = `${fname_teacher} ${lname_teacher}`;

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
            

            // Post Form
            $("#formPost").on('submit', function(e) {

                e.preventDefault();

                // Posting
                var postsContent = $("#postsVal").val();
                var teacher_img = img_teacher;

                var data = {
                        postsContent: postsContent,
                        classid: classid,
                        fullname: fullname,
                        teacher_img: teacher_img
                    }

                $.ajax({
                    url: "http://localhost/lm/api/teacher/posts.php",
                    method: "POST",
                    data: {
                        postsContent: postsContent,
                        classid: classid,
                        fullname: fullname,
                        teacher_img: teacher_img
                    },
                    success: function(response) {
                        // console.log(response);

                        // Port 8080
                        conn.send(JSON.stringify(response));
                    }
                });

                $("#postsVal").val("");

                });

        }

    });

    // Show all posts

    var classIds = new URLSearchParams(window.location.search);
    var classids = classIds.get('id');

    $.ajax({
        url: "http://localhost/lm/api/teacher/show_posts.php",
        method: "POST",
        data: {
            classids: classids
        },
        success: function(response){
            // console.log(response);

            response.forEach(element => {
                // console.log(element);

            $.ajax({
                url: "http://localhost/lm/api/teacher/main_data.php",
                success: function(response) {
                    // console.log(response);

                    var id_student = response.id_teacher;
                    var fname_teacher = response.fname_teacher;
                    var lname_teacher = response.lname_teacher;

                    var fullname = `${fname_teacher} ${lname_teacher}`;

                var cId = new URLSearchParams(window.location.search);
                var cid = cId.get('id');

                if(element.class_id === cid){

                    var row_5 = $("<div>", {
                    "class": "row mb-5"
                    });

                    var w_50 = $("<div>", {
                        "class": "w-50 h-100 m-auto shadow-lg p-3 mb-3 bg-white rounded",
                        "style": "min-height: 35vh; background: rgb(189,187,187)"
                    });

                    // 1st

                    var d_flex1 = $("<div>", {
                        "class": "d-flex"
                    });

                    if(~element.post_img.indexOf("teachers")){

                        var img = $("<img>", {
                            "style": "height: 50px; width: 50px;",
                            "src": element.post_img,
                            "class": "rounded-circle"
                        });

                    }else{

                        var img = $("<img>", {
                            "style": "height: 50px; width: 50px;",
                            "src": "../" +element.post_img,
                            "class": "rounded-circle"
                        });

                    }

                    var h5 = $("<h5>", {
                        "class": "ml-2 mt-2"
                    });

                    h5.html(element.post_author);

                    var small = $("<small>", {
                        "class": "ml-auto"
                    });

                    small.html(element.post_created_at);

                    d_flex1.append(img);
                    d_flex1.append(h5);
                    d_flex1.append(small);

                    // 2nd

                    if(element.post_author === fullname){

                        var d_flex2 = $("<div>", {
                        "class": "d-flex justify-content-end my-2"
                        });

                        // Start here the change

                        var button_toggle = $("<button>", {
                            "type": "button",
                            "class": "btn btn-sm dropdown-toggle dropdown-toggle-split",
                            "data-toggle": "dropdown",
                            "aria-haspopup": "true",
                            "aria-expanded": "false"
                        });

                        var span_sr_only = $("<span>", {
                            "class": "sr-only"
                        });

                        span_sr_only.html("Toggle Dropdown");

                        button_toggle.append(span_sr_only);

                        var div_dropdown = $("<div>", {
                            "class": "dropdown-menu"
                        });

                        var button_class_dropdown_item_update = $("<a>", {
                            "class": "dropdown-item",
                            "href": `http://localhost/lm/teacher/updateposts.php?class_id=${element.class_id}&post_id=${element.post_id}`
                        });

                        button_class_dropdown_item_update.html("Update");

                        var div_dropdown_divider = $("<div>", {
                            "class": "dropdown-divider"
                        });

                        var a_class_dropdown_iten_delete = $("<a>", {
                            "class": "dropdown-item",
                            "href": `http://localhost/lm/teacher/deleteposts.php?class_id=${element.class_id}&post_id=${element.post_id}`,
                            "onclick": `return confirm(\'Are you sure to delete ?\')`
                        });
                        
                        a_class_dropdown_iten_delete.html("Delete");

                        div_dropdown.append(button_class_dropdown_item_update);
                        div_dropdown.append(div_dropdown_divider);
                        div_dropdown.append(a_class_dropdown_iten_delete);

                        d_flex2.append(div_dropdown);

                        d_flex2.append(button_toggle);

                    }

                    // 3rd

                    var div_jumbotron = $("<div>", {
                        "class": "jumbotron jumbotron-fluid mt-2"
                    });

                    var div_container = $("<div>", {
                        "class": "container"
                    });

                    var p_lead = $("<p>", {
                        "class": "lead"
                    });

                    p_lead.html(element.post_body);

                    div_container.append(p_lead);
                    div_jumbotron.append(div_container);

                    // Final

                    w_50.append(d_flex1);

                    if(element.post_author === fullname){
                    w_50.append(d_flex2);
                    }

                    w_50.append(div_jumbotron);

                    row_5.append(w_50);

                    $("#postsHolder").append(row_5);

                }

                }
            });

            });
        }
    });

        // Task list
    
        $("#formTask").on('submit', function(e){

                e.preventDefault();

                var task_deadline = $("#form_deadline").val();
                var task_title = $("#form_title").val();
                var task_body = $("#form_body").val();

                // Nested with the main data API

                $.ajax({
                        url: "http://localhost/lm/api/teacher/main_data.php",
                        success: function(response) {

                            var student_id = response.id_teacher;
                            var task_author = `${response.fname_teacher} ${response.lname_teacher}`;

                            $.ajax({
                                url: "http://localhost/lm/api/teacher/task_list.php",
                                method: "POST",
                                data: {
                                    classids: classids,
                                    student_id: student_id,
                                    task_author: task_author,
                                    task_deadline: task_deadline,
                                    task_title: task_title,
                                    task_body: task_body
                                },
                                success: function(response1){
                                    console.log(response1);

                                }
                            });

                            $("#form_deadline").val("");
                            $("#form_title").val("");
                            $("#form_body").val("");

                            location.reload();
                        }
                })

        });


    // Show all the current tasks
    $.ajax({
        url: "http://localhost/lm/api/teacher/main_data.php",
        success: function(response) {
            // console.log(response);

            var student_id = response.id_teacher;

            $.ajax({
                url: "http://localhost/lm/api/teacher/show_tasks.php",
                method: "POST",
                data: {
                    classids: classids,
                    student_id: student_id
                },
                success: function(response){

                    response.forEach(element => {

                            var random_number = Math.floor((Math.random() * 3) + 1);
                            var id_modals = element.task_body.slice(0, random_number);

                            var random_number = Math.floor((Math.random() * 3) + 1);
                            var id_modals_update = element.task_title.slice(0, random_number) + element.student_id.slice(0,4);

                            var task_list = $("<div>", {
                                "class": "task_list"
                            });

                            // List Group
                            var li_group = $("<li>", {
                                "class": "list-group-item list-group-item-action bg-light"
                            })

                            // Div inside li
                            var div_dflex = $("<div>", {
                                "class": "d-flex justify-content-between"
                            });

                            // a view tags
                            var a_view = $("<a>", {
                                "href": "#",
                                "data-toggle": "modal",
                                "data-target": `#${id_modals}`
                            })

                            a_view.html(element.task_body.slice(0,7) + "...");

                            // a update tags
                            var a_update = $("<a>", {
                                "href": "#",
                                "data-toggle": "modal",
                                "data-target": `#${id_modals_update}`
                            })

                            var i_pencil_update = $("<i>", {
                                "class": "fa fa-pencil",
                                "aria-hidden": "true"
                            });

                            a_update.append(i_pencil_update);

                            var a_delete = $("<a>", {
                                "href": `deletetask.php?task_id=${element.task_id}&class_id=${element.class_id}`,
                                "onclick": `return confirm(\'Are you sure to delete ?\')`
                            });

                            var i_delete = $("<i>", {
                                "class": "fa fa-trash",
                                "aria-hidden": "true"
                            });

                            a_delete.append(i_delete);

                            // append all the list

                            div_dflex.append(a_view);
                            div_dflex.append(a_update);
                            div_dflex.append(a_delete);

                            li_group.append(div_dflex);
                            task_list.append(li_group);

                            $(".task_show").append(task_list);

                            // MODALS ------------------------------------------------------------------------------------

                            // main head
                            var modals = $("<div>", {
                                "class": "modals"
                            });

                            // modal_fade
                            var moda_fade = $("<div>", {
                                "class": "modal fade",
                                "id": id_modals  //-----------------------
                            });

                            // modal dialog
                            var modal_dialog = $("<div>", {
                                "class": "modal-dialog",
                                "role": "document"
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

                            h5_modal_title.html("Current Task");

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
                                "class": "formTaskView"
                            });

                            // class_id
                            var input_hidden_class_id = $("<input>", {
                                "type": "hidden",
                                "class": "class_id_task",
                                "value": element.class_id
                            });

                            // task_id
                            var input_hidden_task_id = $("<input>", {
                                "type": "hidden",
                                "class": "task_id_task",
                                "value": element.task_id
                            });

                            form_task.append(input_hidden_class_id);
                            form_task.append(input_hidden_task_id);

                            // form-group1
                            var form_group1 = $("<div>", {
                                "class": "form-group"
                            });

                            var label_deadline = $("<label>", {
                                "for": "recipient-name",
                                "class": "col-form-label"
                            });

                            label_deadline.html("Deadline:");

                            var input_date = $("<input>", {
                                "type": "text",
                                "id": "form_deadline",
                                "value": element.task_deadline,
                                "class": "form-control",
                                "id": "recipient-name",
                                "required": "",
                                "readonly": ""
                            });

                            form_group1.append(label_deadline);
                            form_group1.append(input_date);

                            // form-group2
                            var form_group2 = $("<div>", {
                                "class": "form-group"
                            });

                            var label_title = $("<label>", {
                                "for": "message-text",
                                "class": "col-form-label"
                            });

                            label_title.html("Title:");

                            var input_title = $("<input>", {
                                "type": "text",
                                "id": "form_title",
                                "value": element.task_title,
                                "class": "form-control",
                                "required": "",
                                "readonly": ""
                            });

                            form_group2.append(label_title);
                            form_group2.append(input_title);

                            // form-group3
                            var form_group3 = $("<div>", {
                                "class": "form-group"
                            });

                            var label_body = $("<label>", {
                                "for": "message-text",
                                "class": "col-form-label"
                            });

                            label_body.html("Body:");

                            var input_body = $("<textarea>", {
                                "class": "form-control",
                                "id": "form_body",
                                "required": "",
                                "readonly": ""
                            });

                            input_body.html(element.task_body);

                            form_group3.append(label_body);
                            form_group3.append(input_body);

                            // Button done-----------------------
                            var button_done = $("<button>", {
                                "type": "submit",
                                "class": "btn btn-primary"
                            });

                            button_done.html("Done")

                            form_task.append(form_group1);
                            form_task.append(form_group2);
                            form_task.append(form_group3);
                            form_task.append(button_done);

                            modal_body.append(form_task);
                            modal_content.append(modal_body);

                            // Overall append

                            modal_dialog.append(modal_content);
                            moda_fade.append(modal_dialog);
                            modals.append(moda_fade);

                            task_list.append(modals);


                            // FOR UPDATE MODAL !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

                            // MODALS ------------------------------------------------------------------------------------

                            // modal_fade
                            var moda_fade = $("<div>", {
                                "class": "modal fade",
                                "id": id_modals_update  //-----------------------
                            });

                            // modal dialog
                            var modal_dialog = $("<div>", {
                                "class": "modal-dialog",
                                "role": "document"
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

                            h5_modal_title.html("Update Task");

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
                                "class": "formTaskUpdate"
                            });

                            // class_id
                            var input_hidden_class_id = $("<input>", {
                                "type": "hidden",
                                "class": "class_id_task",
                                "value": element.class_id
                            });

                            // task_id
                            var input_hidden_task_id = $("<input>", {
                                "type": "hidden",
                                "class": "task_id_task",
                                "value": element.task_id
                            });

                            form_task.append(input_hidden_class_id);
                            form_task.append(input_hidden_task_id);

                            // form-group1
                            var form_group1 = $("<div>", {
                                "class": "form-group"
                            });

                            var label_deadline = $("<label>", {
                                "for": "recipient-name",
                                "class": "col-form-label"
                            });

                            label_deadline.html("Deadline:");

                            var input_date = $("<input>", {
                                "type": "date",
                                "id": "form_deadline",
                                "value": element.task_deadline,
                                "class": "form-control",
                                "id": "recipient-name",
                                "required": ""
                            });

                            form_group1.append(label_deadline);
                            form_group1.append(input_date);

                            // form-group2
                            var form_group2 = $("<div>", {
                                "class": "form-group"
                            });

                            var label_title = $("<label>", {
                                "for": "message-text",
                                "class": "col-form-label"
                            });

                            label_title.html("Title:");

                            var input_title = $("<input>", {
                                "type": "text",
                                "id": "form_title",
                                "value": element.task_title,
                                "class": "form-control",
                                "required": ""
                            });

                            form_group2.append(label_title);
                            form_group2.append(input_title);

                            // form-group3
                            var form_group3 = $("<div>", {
                                "class": "form-group"
                            });

                            var label_body = $("<label>", {
                                "for": "message-text",
                                "class": "col-form-label"
                            });

                            label_body.html("Body:");

                            var input_body = $("<textarea>", {
                                "class": "form-control",
                                "id": "form_body",
                                "required": ""
                            });

                            input_body.html(element.task_body);

                            form_group3.append(label_body);
                            form_group3.append(input_body);

                            // Button done-----------------------
                            var button_done = $("<button>", {
                                "type": "submit",
                                "class": "btn btn-primary"
                            });

                            button_done.html("Update")

                            form_task.append(form_group1);
                            form_task.append(form_group2);
                            form_task.append(form_group3);
                            form_task.append(button_done);

                            modal_body.append(form_task);
                            modal_content.append(modal_body);

                            // Overall append

                            modal_dialog.append(modal_content);
                            moda_fade.append(modal_dialog);
                            task_list.append(moda_fade);
                    
                            
                            $(".formTaskView").on("submit", function(e){
                                e.preventDefault();
                                e.stopPropagation();
                                e.stopImmediatePropagation();
                                var class_id = this.children[0].value;
                                var task_id = this.children[1].value;

                                $.ajax({
                                    url: "http://localhost/lm/api/teacher/done_task.php",
                                    method: "POST",
                                    data: {
                                        class_id: class_id,
                                        task_id: task_id
                                    },
                                    success: function(response){
                                        console.log(response);
                                        if(response == "true"){
                                            location.reload();
                                        }
                                    }
                                });

                            });

                            $(".formTaskUpdate").on("submit", function(e){
                                e.preventDefault();
                                e.stopPropagation();
                                e.stopImmediatePropagation();
                                var class_id = this.children[0].value;
                                var task_id = this.children[1].value;
                                var task_deadline = this.children[2].parentElement[2].value;
                                var task_title = this.children[2].parentElement[3].value;
                                var task_body = this.children[2].parentElement[4].value;

                                $.ajax({
                                    url: "http://localhost/lm/api/teacher/update_tasks.php",
                                    method: "POST",
                                    data: {
                                        class_id: class_id,
                                        task_id: task_id,
                                        task_deadline: task_deadline,
                                        task_title: task_title,
                                        task_body: task_body
                                    },
                                    success: function(response){
                                        console.log(response);
                                        if(response == "true"){
                                            location.reload();
                                        }
                                    }
                                });

                            });

                    });

                }
            });

        }
    });