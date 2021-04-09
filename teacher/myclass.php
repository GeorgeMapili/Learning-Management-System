<?php require_once('../layout/teacher/header.php'); ?>

<!-- ======= Hero Section ======= -->
<section>

    <div class="container">


        <div class="d-flex justify-content-between">
            <h2 class="my-4">Class</h2>
            <!-- <button class="get-started-btn scrollto my-4 text-dark">Add Class</button> -->
            <button type="button" class="get-started-btn scrollto my-4 text-dark" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add Class
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Create New Class</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="formCreateClass">
                                <label for="">Class Name</label>
                                <input type="text" class="form-control" name="class_name" id="class_name">
                                <label for="">Class Description</label>
                                <textarea type="text" class="form-control" name="class_description" id="class_description" rows="2"></textarea>
                                <label for="">Select Grade</label>
                                <select class="form-control" name="class_grade" id="class_grade">
                                    <option value="none">None</option>
                                    <option value="1st Year">First Year</option>
                                    <option value="2nd Year">Second Year</option>
                                    <option value="3rd Year">Third Year</option>
                                    <option value="4th Year">Fourth Year</option>
                                </select>
                                <button type="submit" class="btn btn-primary my-3">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row"></div>

    </div>

</section>

<!-- Vendor JS Files -->
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>
<script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../assets/vendor/venobox/venobox.min.js"></script>
<script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="../assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>

<script>

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
                                "href": `main.php`,
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
</script>

</body>

</html>