<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>NORSU</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/norsu.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <style>
        .error{
            color: red;
        }
    </style>

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <header id="headers" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="home.php">NORSU</a></h1>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active">
                        <div class="btn-group">
                            <a href="home.php" class="btn btn-secondary">My Class</a>
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuReference">
                                <a class="dropdown-item" href="home.php">My Class</a>
                                <a class="dropdown-item" href="message.php">Message</a>
                                <a class="dropdown-item" href="request.php">Request</a>
                            </div>
                        </div>
                    </li>

                </ul>

            </nav>

            <a href="profile.php" class="get-started-btn scrollto">Profile</a>
            <a href="logout.php" class="get-started-btn scrollto">Logout</a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section>

        <div class="container">


            <div class="d-flex justify-content-between">
                <h2 class="my-4">Profile</h2>
            </div>

            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <form id="formInfo">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" class="form-control" name="fname" id="first_name">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" class="form-control" name="lname" id="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" name="email_address" id="email">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update Information</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <form id="formPass">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Current Password</label>
                            <input type="password" class="form-control" name="current_password" id="current_password">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">New Password</label>
                                    <input type="password" class="form-control" name="new_password" id="new_password">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Confirm New Password</label>
                                    <input type="password" class="form-control" name="confirm_new_password" id="confirm_new_password">
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update Password</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <form id="formImg">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Image</label>
                            <input type="file" name="profile" class="form-control" id="file_image">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update Password</button>
                        </div>
                    </form>
                </div>
            </div>

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

    <!-- Jquery Validator -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>

    <!-- Jquery extension validator -->
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script>

    <!-- Jquery File Validation -->
    <script src="js/js/vendor/jquery.ui.widget.js"></script>
    <script src="js/js/jquery.iframe-transport.js"></script>
    <script src="js/js/jquery.fileupload.js"></script>

    <script>
    $.ajax({
        url: "http://localhost/lm/api/main_data.php",
        success: function(response){

            var student_id = response.id_student;

            // Information VALIDATION
            $.ajax({
                    url: "http://localhost/lm/api/latest_data.php",
                    method: "POST",
                    data: {
                        student_id:student_id
                    },
                    success: function(response){
                        console.log(response);

                        $("#first_name").val(response[0].student_fname);
                        $("#last_name").val(response[0].student_lname);
                        $("#email").val(response[0].student_email);

                        $("#formInfo").on('submit', function(e){
                            e.preventDefault();

                            var first_name = $("#first_name").val();
                            var last_name = $("#last_name").val();
                            var email = $("#email").val();

                                $.ajax({
                                url: "http://localhost/lm/api/update_info.php",
                                method: "POST",
                                data: {
                                    student_id: student_id,
                                    first_name: first_name,
                                    last_name: last_name,
                                    email: email
                                },
                                success: function(response){
                                    window.location.reload();
                                    // console.log(response);
                                }
                            });

                        }); 

                    }
                });

                // Password VALIDATION

                $("#formPass").validate({
                rules: {
                    current_password: {
                        required: true,
                        minlength: 5
                    },
                    new_password: {
                        required: true,
                        minlength: 5
                    },
                    confirm_new_password: {
                        required: true,
                        equalTo: '#new_password'
                    }
                },
                messages: {
                    current_password: {
                        required: "Current Password is required!",
                        minlength: "Please input at least 5 characters!"
                    },
                    new_password: {
                        required: "New Password is required!",
                        minlength: "Please input at least 5 characters!"
                    },
                    confirm_new_password: {
                        required: "Confirm Password is required!",
                        equalTo: "Password do not match!"
                    }
                }
                });

                $("#formPass").on('submit', function(e){
                    e.preventDefault();

                    var current_password = $("#current_password").val();
                    var new_password = $("#new_password").val();
                    var confirm_new_password = $("#confirm_new_password").val();

                    $.ajax({
                        url: "http://localhost/lm/api/update_password.php",
                        method: "POST",
                        data: {
                            current_password: current_password,
                            new_password: new_password,
                            confirm_new_password: confirm_new_password,
                            student_id: student_id
                        },
                        success: function(response){
                            window.location.href = 'profile.php?'+ response;
                        }
                    });

                });

                // Image VALIDATION

                $.validator.addMethod("textOnly",
                    function (value, element) {

                        var numArray = 
                            ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
                        var containsNumber = false;
                        
                        $.each(value.split(''), function () {
                            if (numArray.indexOf($(this)[0]) > -1) {
                                containsNumber = true;
                                return false;
                            }
                        });
                        
                        return !containsNumber;
                    }
                );

                $.validator.addMethod('filesize', function (value, element, arg) {
                    var minsize=2000; // min 1kb
                    if((element.files[0].size>minsize)&&(element.files[0].size<=arg)){
                        return true;
                    }else{
                        return false;
                    }
                });

                $("#formImg").validate({

                rules: {
                    profile: {
                        required: true,
                        filesize: 2000000,
                        extension: "jpg|jpeg|png"
                    }
                },
                messages: {
                    profile: {
                        required: "Profile Image is required!",
                        filesize:" File size must be less than 2MB",
                        extension: "Please upload file in these format only (jpg, jpeg, png)."
                    }
                }

                });

                $("#formImg").on('submit', function(e){
                    e.preventDefault();

                    var file_data = $("#file_image").prop('files')[0];
                    var form_data = new FormData();

                    form_data.append('file', file_data);
                    form_data.append('student_id', student_id);

                    $.ajax({
                        url: "http://localhost/lm/api/update_image.php",
                        method: "POST",
                        enctype: 'multipart/form-data',
                        dataType: 'text',  // what to expect back from the PHP script, if anything
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,
                        success: function(response){
                            // window. location. reload();
                            console.log(response);
                        }
                    });

                });


                }
                });

    </script>

</body>

</html>