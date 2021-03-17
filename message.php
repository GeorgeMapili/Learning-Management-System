<?php require_once('layout/student/header1.php') ?>

<!-- ======= Hero Section ======= -->
<section>
    <div class="container">

        <!-- Page header start -->
        <div class="page-title">
            <div class="row gutters">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <h5 class="title">Message</h5>
                </div>
            </div>
        </div>
        <!-- Page header end -->

        <!-- Content wrapper start -->
        <div class="content-wrapper">

            <!-- Row start -->
            <div class="row gutters">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="card m-0">

                        <!-- Row start -->
                        <div class="row no-gutters">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3">
                                <div class="users-container">
                                    <div class="chat-search-box">
                                        <form action="" id="search-contacts">
                                            <div class="input-group">
                                                <input class="form-control" placeholder="Search" id="searchbar">
                                                <div class="input-group-btn">
                                                    <button type="submit" class="btn btn-info">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div id="searchResults"></div>
                                        </form>
                                    </div>
                                    <ul class="users" style="height:400px; overflow:scroll;">
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9">
                                <div class="selected-user">
                                    <input type="hidden" name="chat_mate" id="chat_mate" value="<?php echo $_SESSION['contact_add_id'] ?? NULL; ?>">
                                    <input type="hidden" name="chat_mate_image" id="chat_mate_image" value="<?php echo $_SESSION['contact_add_img'] ?? NULL; ?>">
                                    <span>To: <span class="name"><?php echo $_SESSION['contact_add_name'] ?? NULL; ?></span></span>
                                </div>
                                <div class="chat-container">
                                    <ul class="chat-box chatContainerScroll" style="height:500px; overflow:scroll;">

                                    </ul>

                                    <form action="" id="chat_form">
                                        <input type="hidden" id="student_id" value="<?php echo $_SESSION['id']; ?>">
                                        <input type="hidden" id="student_fname" value="<?php echo $_SESSION['fname']; ?>">
                                        <input type="hidden" id="student_image" value="<?php echo "assets/img/students/" . $_SESSION['image']; ?>">
                                        <div class="form-group mt-3 mb-0">
                                            <textarea class="form-control" id="message_chat" rows="2" placeholder="Type your message here..." required></textarea>
                                        </div>
                                        <div class="form-group mt-3 mb-0">
                                            <button class="btn btn-info">Send</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Row end -->
                    </div>

                </div>

            </div>
            <!-- Row end -->

        </div>
        <!-- Content wrapper end -->

    </div>

</section>
<!-- End Hero -->

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

<script>
    var conn = new WebSocket('ws://localhost:8080');
    conn.onopen = function(e) {
        console.log("Connection established!");
    };

    var chat_mate = $("#chat_mate").val();

    conn.onmessage = function(e) {
        console.log(e.data);

        var data = JSON.parse(e.data);

        console.log(data);

        if (chat_mate == "") {

        } else {

            if (data.from == 'Me') {

                var li = $("<li>", {
                    "class": "chat-left"
                });
                var div1 = $("<div>", {
                    "class": "chat-avatar"
                });
                var img = $("<img>", {
                    "src": data.student_image
                });
                var div_name = $("<div>", {
                    "class": "chat-name"
                });

                var chat_box = $(".chat-box");

                // Insert a name
                div_name.html(data.from);

                var div2 = $("<div>", {
                    "class": "chat-text"
                });
                var div3 = $("<div>", {
                    "class": "chat-hour"
                });
                // insert a message
                div2.html(data.message);
                div3.html(data.dt)

                div1.append(img);
                div1.append(div_name);

                li.append(div1);
                li.append(div2);
                li.append(div3);

                chat_box.append(li);

            } else {
                var li = $("<li>", {
                    "class": "chat-right"
                });
                var div1 = $("<div>", {
                    "class": "chat-avatar"
                });
                var img = $("<img>", {
                    "src": data.student_image
                });
                var div_name = $("<div>", {
                    "class": "chat-name"
                });

                var chat_box = $(".chat-box");

                // Insert a name
                div_name.html(data.from);

                var div2 = $("<div>", {
                    "class": "chat-text"
                });
                var div3 = $("<div>", {
                    "class": "chat-hour"
                });
                // insert a message
                div2.html(data.message);
                div3.html(data.dt)

                div1.append(img);
                div1.append(div_name);

                li.append(div3);
                li.append(div2);
                li.append(div1);

                chat_box.append(li);
            }

            $(".chat-box").scrollTop($(".chat-box")[0].scrollHeight);

        }

    };

    $("#chat_form").on('submit', function(e) {
        e.preventDefault();

        var message = $("#message_chat").val();
        var student_id = $("#student_id").val();
        var student_fname = $("#student_fname").val();
        var student_image = $("#student_image").val();
        var student_image = $("#student_image").val();
        var chat_mate_image = $("#chat_mate_image").val();

        if (chat_mate == "") {
            // window.location.replace("http://localhost/lm/message.php");
            window.location.href = "http://localhost/lm/message.php";
        } else {

            var data = {
                student_id: student_id,
                message: message,
                student_fname: student_fname,
                student_image: "assets/img/students/" + student_image,
                chat_mate: chat_mate,
                student_image: student_image,
                chat_mate_image: chat_mate_image

            };

            conn.send(JSON.stringify(data));

            $("#message_chat").val('');

        }



    });

    // Ajax Call for messages
    var id_sender = $("#student_id").val();
    var id_receiver = $("#chat_mate").val();

    $.ajax({
        url: "http://localhost/lm/api/messages.php",
        method: "POST",
        data: {
            id_sender: id_sender,
            id_receiver: id_receiver
        },
        success: function(response) {
            // console.log(response);

            response.forEach(element => {

                if (id_sender === element.message_id_sender) {

                    var li = $("<li>", {
                        "class": "chat-left"
                    });
                    var div1 = $("<div>", {
                        "class": "chat-avatar"
                    });
                    var img = $("<img>", {
                        "src": element.message_sender_image
                    });
                    var div_name = $("<div>", {
                        "class": "chat-name"
                    });

                    var chat_box = $(".chat-box");

                    // Insert a name
                    div_name.html("Me");

                    var div2 = $("<div>", {
                        "class": "chat-text"
                    });
                    var div3 = $("<div>", {
                        "class": "chat-hour"
                    });
                    // insert a message
                    div2.html(element.message_body);
                    div3.html(element.message_created_at)

                    div1.append(img);
                    div1.append(div_name);

                    li.append(div1);
                    li.append(div2);
                    li.append(div3);

                    chat_box.append(li);

                } else {

                    var li = $("<li>", {
                        "class": "chat-right"
                    });
                    var div1 = $("<div>", {
                        "class": "chat-avatar"
                    });
                    var img = $("<img>", {
                        "src": element.message_sender_image
                    });
                    var div_name = $("<div>", {
                        "class": "chat-name"
                    });

                    var chat_box = $(".chat-box");

                    // Insert a name
                    div_name.html(element.message_sender_fname);

                    var div2 = $("<div>", {
                        "class": "chat-text"
                    });
                    var div3 = $("<div>", {
                        "class": "chat-hour"
                    });
                    // insert a message
                    div2.html(element.message_body);
                    div3.html(element.message_created_at);

                    div1.append(img);
                    div1.append(div_name);

                    li.append(div3);
                    li.append(div2);
                    li.append(div1);

                    chat_box.append(li);

                }

                $(".chat-box").scrollTop($(".chat-box")[0].scrollHeight);
            });

        }
    });

    var search_contacts = $("#search-contacts");

    search_contacts.keyup(function() {

        var searchbar = $("#searchbar").val();

        $.ajax({
            url: "http://localhost/lm/api/search_contact.php",
            method: "POST",
            data: {
                searchbar: searchbar,
                id_sender: id_sender
            },
            success: function(response) {

                var searchResults = $("#searchResults");
                var list_group = $("<div>", {
                    "class": "list-group"
                });

                if (response.message !== "No Result Found.") {

                    response.forEach(element => {
                        var id = element.student_id;
                        var a = $("<a>", {
                            "class": "list-group-item list-group-item-action",
                            "href": `addcontactlist.php?id=${id}&userid=${id_sender}`
                        });
                        a.attr("title", "Click to add to the contact list");
                        a.html(element.student_fullname);
                        list_group.append(a);
                        searchResults.html(list_group);
                    });

                } else {
                    var p = $("<p>");
                    p.html(response.message);
                    list_group.append(p);
                    searchResults.html(list_group);
                }

            }
        });
    });


    // Contact List
    $.ajax({
        url: "http://localhost/lm/api/contact_list.php",
        method: "POST",
        data: {
            id_sender: id_sender
        },
        success: function(response) {

            var users = $(".users");

            response.forEach(element => {

                var a = $("<a>", {
                    "href": `showmessage.php?id=${element.contact_add_id}&img=${element.contact_image}&name=${element.contact_add_name}`
                });

                var li = $("<li>", {
                    "class": "person"
                });
                var div1 = $("<div>", {
                    "class": "user"
                });
                var img = $("<img>", {
                    "src": element.contact_image
                });
                var p = $("<p>", {
                    "class": "name-time"
                });
                var name = $("<span>", {
                    "class": "name"
                });
                name.html(element.contact_add_name);

                div1.append(img);
                p.append(name);

                li.append(div1);
                li.append(p);

                a.append(li);

                users.append(a);

                // console.log(element);
            });

        }
    });

    // Select to the contact list
    // trigger before ajax
</script>

</body>

</html>