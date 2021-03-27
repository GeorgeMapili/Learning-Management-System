<?php require_once('layout/student/header.php'); ?>
<!-- ======= Hero Section ======= -->

<div class="container">
    <section></section>
    <h1 class="text-center" id="class_title"></h1>
    <div class="row justify-content-between my-3 mx-2">
        <div class="col-lg-3 col-md-12 col-sm-12 shadow-lg p-3 mb-5 bg-white rounded" style="height:30vh; background: rgb(189, 187, 187);">
            <div style="height: 100px; width:100px; margin: 0 auto;" class="mt-2 text-center" id="student_img">
                <!-- <img src="assets/img/directors/perfecto.jpg" class="img-thumbnail" alt=""> -->
            </div>
            <div class="text-center" id="student_name"></div>
            <div class="text-center">
                <a href="">View Profile</a>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 h-75 shadow-lg p-3 mb-5 bg-white rounded" style="min-height: 35vh; background: rgb(189, 187, 187);">
            <form id="formPost">
                <textarea name="postsVal" class="form-control" id="postsVal" cols="10" rows="4" placeholder="Start a discussion..." required></textarea>
                <div class="mt-4 text-right">
                    <button class="btn btn-primary" type="submit" id="postsBtn">Post</button>
                </div>
            </form>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12 shadow-lg p-3 mb-5 bg-white rounded" style="max-height: 50vh; background: rgb(189, 187, 187);">
            <h5 class="mt-1">Task list</h5>
            <!-- <textarea name="" id="" cols="10" rows="3" class="form-control" placeholder="..."></textarea> -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">
                Add Task
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Task</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Deadline:</label>
                                    <input type="date" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Title</label>
                                    <input type="text" class="form-control" placeholder="..." />
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Body:</label>
                                    <textarea class="form-control" id="message-text" placeholder="..."></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="list-group list-group-flush overflow-auto h-50">
                <li class="list-group-item list-group-item-action bg-light">
                    <div class="d-flex justify-content-between">
                        <a href="#">Menu 1</a> <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action bg-light">
                    <div class="d-flex justify-content-between">
                        <a href="#">Menu 1</a> <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action bg-light">
                    <div class="d-flex justify-content-between">
                        <a href="#">Menu 1</a> <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action bg-light">
                    <div class="d-flex justify-content-between">
                        <a href="#">Menu 1</a> <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action bg-light">
                    <div class="d-flex justify-content-between">
                        <a href="#">Menu 1</a> <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action bg-light">
                    <div class="d-flex justify-content-between">
                        <a href="#">Menu 1</a> <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action bg-light">
                    <div class="d-flex justify-content-between">
                        <a href="#">Menu 1</a> <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action bg-light">
                    <div class="d-flex justify-content-between">
                        <a href="#">Menu 1</a> <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                </li>
            </div>

        </div>
    </div>

    <hr class="my-1">

</div>

<section>
    <div class="container">
        <h2 class="my-1">Posts</h2>

        <div id="postsHolder"></div>

    </div>
    </div>
</section>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script src="js/autobahn.js"></script>

<script>
    var conn = new WebSocket('ws://localhost:8080');
    conn.onopen = function(e) {
        console.log("Connection established!");
    };

    conn.onmessage = function(e) {
        // console.log(e.data);

        var data = JSON.parse(e.data);

        console.log(data);

        $.ajax({
            url: "http://localhost/lm/api/main_data.php",
            success: function(response) {
                // console.log(response);

                var id_student = response.id_student;
                var fname_student = response.fname_student;
                var lname_student = response.lname_student;

                var fullname = `${fname_student} ${lname_student}`;

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

                    var img = $("<img>", {
                        "style": "height: 50px; width: 50px;",
                        "src": data.img,
                        "class": "rounded-circle"
                    });

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
                        "class": "d-flex my-2"
                        });

                        // Start here the change

                        var button_toggle = $("<button>", {
                            "type": "button",
                            "class": "btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split",
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
                            "href": `http://localhost/lm/updateposts.php?class_id=${data.classid}&post_id=${data.postid}`
                        });

                        button_class_dropdown_item_update.html("Update");

                        var div_dropdown_divider = $("<div>", {
                            "class": "dropdown-divider"
                        });

                        var a_class_dropdown_iten_delete = $("<a>", {
                            "class": "dropdown-item",
                            "href": `http://localhost/lm/deleteposts.php?class_id=${data.classid}&post_id=${data.postid}`
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
        url: "http://localhost/lm/api/main_data.php",
        success: function(response) {
            // console.log(response);

            var id_student = response.id_student;
            var fname_student = response.fname_student;
            var lname_student = response.lname_student;
            var img_student = "assets/img/students/" + response.img_student;
            var email_student = response.email_student;

            var student_name = $("#student_name");
            var student_img = $("#student_img");

            student_name.html(`${fname_student} ${lname_student}`);

            var img = $("<img>", {
                "src": img_student,
                "class": "img-thumbnail"
            });

            student_img.append(img);


            // Get the class id
            var classId = new URLSearchParams(window.location.search);
            var classid = classId.get('id');

            var fullname = `${fname_student} ${lname_student}`;

            // Get the class title
            $.ajax({
                url: "http://localhost/lm/api/class_data.php",
                method: "POST",
                data: {
                    classid: classid
                },
                success: function(response){
                    $("#class_title").html(response[0].class_name)
                }
            });
            

            // Post Form
            $("#formPost").on('submit', function(e) {

                e.preventDefault();

                // Posting
                var postsContent = $("#postsVal").val();
                var student_img = "assets/img/students/"+ student_img;

                var data = {
                        postsContent: postsContent,
                        classid: classid,
                        fullname: fullname,
                        student_img: img_student
                    }

                $.ajax({
                    url: "http://localhost/lm/api/posts.php",
                    method: "POST",
                    data: {
                        postsContent: postsContent,
                        classid: classid,
                        fullname: fullname,
                        student_img: img_student
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
        url: "http://localhost/lm/api/show_posts.php",
        method: "POST",
        data: {
            classids: classids
        },
        success: function(response){
            // console.log(response);

            response.forEach(element => {
                // console.log(element);

            $.ajax({
                url: "http://localhost/lm/api/main_data.php",
                success: function(response) {
                    // console.log(response);

                    var id_student = response.id_student;
                    var fname_student = response.fname_student;
                    var lname_student = response.lname_student;

                    var fullname = `${fname_student} ${lname_student}`;

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

                    var img = $("<img>", {
                        "style": "height: 50px; width: 50px;",
                        "src": element.post_img,
                        "class": "rounded-circle"
                    });

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
                        "class": "d-flex my-2"
                        });

                        // Start here the change

                        var button_toggle = $("<button>", {
                            "type": "button",
                            "class": "btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split",
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
                            "href": `http://localhost/lm/updateposts.php?class_id=${element.class_id}&post_id=${element.post_id}`
                        });

                        button_class_dropdown_item_update.html("Update");

                        var div_dropdown_divider = $("<div>", {
                            "class": "dropdown-divider"
                        });

                        var a_class_dropdown_iten_delete = $("<a>", {
                            "class": "dropdown-item",
                            "href": `http://localhost/lm/deleteposts.php?class_id=${element.class_id}&post_id=${element.post_id}`
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

</script>

</body>

</html>