    var conn = new WebSocket('ws://localhost:3000');
    conn.onopen = function(e) {
        console.log("Connection established!");
    };

    var chat_mate = $("#chat_mate").val();

    conn.onmessage = function(e) {
        console.log(e.data);

        var data = JSON.parse(e.data);

        console.log(data);

        // console.log(data.chat_mate);
        // console.log(data.student_id);
        // console.log("WALL");
        // console.log($("#student_id").val());
        // console.log(data.student_id);
        // console.log($("#student_id").val());
        // console.log("WALL");
        // console.log(data.chat_mate);
        // console.log(chat_mate);

        if($("#student_id").val() == data.chat_mate || data.student_id == $("#student_id").val()){

        if(((data.student_id == $("#student_id").val()) && (data.chat_mate == chat_mate)) || ((data.student_id == chat_mate) && ($("#student_id").val() == data.chat_mate))){

        
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

                    if(~data.student_image.indexOf("students")){

                        var img = $("<img>", {
                            "src": data.student_image
                        });

                    }else{

                        var img = $("<img>", {
                            "src": "/lm/lm/"+data.student_image
                        });

                    }


                    var div_name = $("<div>", {
                        "class": "chat-name"
                    });
    
                    var chat_box = $(".chat-box");
    
                    // Insert a name
                    div_name.html(data.student_fname);
    
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

        }
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

                    if(~element.message_sender_image.indexOf("students")){

                        var img = $("<img>", {
                            "src": element.message_sender_image
                        });
                        
                    }else{

                        var img = $("<img>", {
                            "src": "/lm/lm/"+element.message_sender_image
                        });

                    }

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


    // Search For Contacts
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
                console.log(response);

                var searchResults = $("#searchResults");
                var list_group = $("<div>", {
                    "class": "list-group"
                });

                if (response.message !== "No Result Found.") {

                    response.forEach(element => {

                        if(element.student_id){

                            var id = element.student_id;
                            var a = $("<a>", {
                                "class": "list-group-item list-group-item-action",
                                "href": `addcontactlist.php?id=${id}&userid=${id_sender}`
                            });
                            a.attr("title", "Click to add to the contact list");
                            a.html(element.student_fullname);
                            list_group.append(a);
                            searchResults.html(list_group);

                        }else{
                            
                            var id = element.teacher_id;
                            var a = $("<a>", {
                                "class": "list-group-item list-group-item-action",
                                "href": `addcontactlist.php?id=${id}&userid=${id_sender}`
                            });
                            a.attr("title", "Click to add to the contact list");
                            a.html(element.teacher_fullname);
                            list_group.append(a);
                            searchResults.html(list_group);

                        }

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

                var div2 = $("<div>", {
                    "class": "d-flex align-items-start"
                });

                var a1 = $("<a>", {
                    "class": "dropdown-item",
                    "href": `deletecontact.php?delete_user_id=${element.contact_user_id}&delete_add_id=${element.contact_add_id}`
                });

                a1.html("<small class='text-danger'>Delete</small>");

                div2.append(a1);

                div1.append(img);
                p.append(name);

                li.append(div1);
                li.append(p);

                a.append(li);

                users.append(a);
                users.append(div2);
            });

        }
    });