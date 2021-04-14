$.ajax({
        url: "http://localhost/lm/api/teacher/main_data.php",
        success: function(response){

            var teacher_id = response.id_teacher;

                // Information VALIDATION
                $.ajax({
                    url: "http://localhost/lm/api/teacher/latest_data.php",
                    method: "POST",
                    data: {
                        teacher_id:teacher_id
                    },
                    success: function(response){

                        $("#first_name").val(response[0].teacher_fname);
                        $("#last_name").val(response[0].teacher_lname);
                        $("#email").val(response[0].teacher_email);

                        $("#formInfo").on('submit', function(e){
                            e.preventDefault();

                            var first_name = $("#first_name").val();
                            var last_name = $("#last_name").val();
                            var email = $("#email").val();

                                $.ajax({
                                url: "http://localhost/lm/api/teacher/update_info.php",
                                method: "POST",
                                data: {
                                    teacher_id: teacher_id,
                                    first_name: first_name,
                                    last_name: last_name,
                                    email: email
                                },
                                success: function(response){
                                    window.location.reload();
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
                        url: "http://localhost/lm/api/teacher/update_password.php",
                        method: "POST",
                        data: {
                            current_password: current_password,
                            new_password: new_password,
                            confirm_new_password: confirm_new_password,
                            teacher_id: teacher_id
                        },
                        success: function(response){
                            window.location.href = 'http://localhost/lm/teacher/profile.php?'+ response;
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
                    form_data.append('teacher_id', teacher_id);

                    $.ajax({
                        url: "http://localhost/lm/api/teacher/update_image.php",
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

                });

        
        }
});