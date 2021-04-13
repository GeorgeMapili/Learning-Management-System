// Nested with main_data
$.ajax({
    url: "http://localhost/lm/api/main_data.php",
    success: function(response){

        var student_name = `${response.fname_student} ${response.lname_student}`;

        // Get the request data
        $.ajax({
            url: "http://localhost/lm/api/request_student.php",
            method: "POST",
            data: {
                student_name:student_name 
            },
            success: function(response){

                var tbody = $(".tbody");

                response.forEach(element => {
                    console.log(element);

                    var tr = $("<tr>", {
                        "class": "d-flex justify-content-between"
                    });

                    var form = $("<form>", {
                        "class": "formRequest d-flex justify-content-between bg-light my-2 p-3"
                    });

                    var request_id = $("<input>", {
                        "type": "hidden",
                        "class": "request_id",
                        "value": element.request_id
                    })

                    var class_name = $("<th>");

                    class_name.html(element.class_name);

                    var teacher_name = $("<td>");

                    teacher_name.html(element.teacher_name);

                    var td = $("<td>");

                    var button_accept = $("<button>", {
                        "class": "btn btn-primary",
                        "type": "submit"
                    });

                    button_accept.html("Accept");

                    var button_decline = $("<a>", {
                        "href": `deleterequest.php?request_id=${element.request_id}`,
                        "class": "btn btn-danger",
                        "onclick": `return confirm(\'Are you sure to delete ?\')`
                    });

                    button_decline.html("Decline");

                    td.append(button_accept);
                    td.append(button_decline);

                    form.append(request_id);
                    form.append(class_name);
                    form.append(teacher_name);
                    form.append(td);

                    tbody.append(form);

                    tbody.append(tr);

                    // Accept Request
                    $(".formRequest").on('submit', function(e){
                        e.preventDefault();
                        e.stopPropagation();
                        e.stopImmediatePropagation();

                        var request_id = this.children[0].value;
                        
                        var class_id = element.class_id;
                        var student_id = element.student_id;
                        var teacher_id = element.teacher_id;
                        // Accept request
                        $.ajax({
                            url: "http://localhost/lm/api/accept_request.php",
                            method: "POST",
                            data: {
                                request_id: request_id 
                            },
                            success: function(response){
                                if(response == "true"){

                                    // Add to the class
                                    $.ajax({
                                        url: "http://localhost/lm/api/add_request_class.php",
                                        method: "POST",
                                        data: {
                                            class_id: class_id,
                                            student_id: student_id,
                                            teacher_id: teacher_id,
                                            student_name: student_name
                                        },
                                        success: function(response1){
                                            console.log(response1);
                                        }
                                    });

                                    window.location.reload();
                                }
                            }
                        });

                    });

                });



            }
        });

    }
});