$.ajax({
        url: "http://localhost/lm/api/teacher/main_data.php",
        success: function(response){
            
            var id_teacher = response.id_teacher;
            var fullname_teacher = `${response.fname_teacher} ${response.lname_teacher}`;
       
                $.ajax({
                    url: "http://localhost/lm/api/teacher/myclass.php",
                    method: "POST",
                    data: {
                        id_teacher: id_teacher
                    },
                    success: function(responses){

                        responses.forEach(element => {

                            var col_sm = $("<div>", {
                                "class": "col-sm-12 col-md-4 col-lg-3 my-3"
                            });

                            var card = $("<div>", {
                                "class": "card"
                            });

                            var a = $("<a>", {
                                "href": `main.php?id=${element.class_id}`,
                                "style": "background-color: #459BC8; color: white;"
                            });

                            var card_body = $("<div>", {
                                "class": "card-body"
                            });

                            var h5 = $("<h5>", {
                                "class": "card-title text-center"
                            });

                            h5.html(element.class_name);

                            var p = $("<p>", {
                                "class": "text-center"
                            });

                            p.html(element.class_yearlvl);

                            card_body.append(h5);
                            card_body.append(p);

                            a.append(card_body);
                            card.append(a);

                            var d_flex = $("<div>", {
                                "class": "d-flex justify-content-center"
                            });

                            var a_delete = $("<a>", {
                                "href": `deleteclass.php?class_id=${element.class_id}`,
                                "class": "p-2 text-danger",
                                "onclick": `return confirm(\'Are you sure to delete ?\')`
                            });

                            var small_delete = $("<small>");

                            small_delete.html("Delete Class");

                            a_delete.append(small_delete);

                            p_class_code = $("<p>", {
                                "class": "p-2"
                            });

                            p_class_code.html(element.class_code);

                            d_flex.append(a_delete);
                            d_flex.append(p_class_code);
                            card.append(d_flex);

                            col_sm.append(card);

                            $(".row").append(col_sm);

                        });

                    }
                });

                $("#formCreateClass").on('submit', function(e){
                    e.preventDefault();

                    var class_name = $("#class_name").val();
                    var class_description = $("#class_description").val();
                    var class_yearlvl = $("#class_grade").val();

                    $.ajax({
                        url: "http://localhost/lm/api/teacher/add_class.php",
                        method: "POST",
                        data: {
                            id_teacher: id_teacher,
                            fullname_teacher: fullname_teacher,
                            class_name: class_name,
                            class_description: class_description,
                            class_yearlvl: class_yearlvl
                        },
                        success: function(responses1){
                            window.location.reload();
                        }
                    });

                });

        }
    });