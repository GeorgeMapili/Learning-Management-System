$(document).ready(function(){

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

    $(".register_form").validate({

        rules: {
            fname: {
                required: true,
                textOnly: true
            },
            lname: {
                required: true,
                textOnly: true
            },
            email_address: {
                required: true,
                email: true,
                remote: {
                    url: "http://localhost/lm/api/register_email_check.php",
                    type: "post",
                    data: {
                        email_address: function() {
                        return $( "#email_address" ).val();
                    }
                    }
                }
            },
            password: {
                required: true,
                minlength: 5
            },
            confirm_password: {
                required: true,
                equalTo: '#password'
            },
            birthday: {
                required: true,
                dateISO: true
            },
            gender: {
                required: true
            },
            profile: {
                required: true,
                filesize: 2000000,
                extension: "jpg|jpeg|png"
            }
        },
        messages: {
            fname: {
                required: "First Name is required!",
                textOnly: "Please enter a valid name!"
            },
            lname: {
                required: "Last Name is required!",
                textOnly: "Please enter a valid name!"
            },
            email_address: {
                required: "Email is required!",
                email: "Please enter a valid email!",
                remote: "Email is already existed!"
            },
            password: {
                required: "Password is required!",
                minlength: "Please input at least 5 characters!"
            },
            confirm_password: {
                required: "Confirm Password is required!",
                equalTo: "Password do not match!"
            },
            birthday: {
                required: "Birthday is required!",
                dateISO: "Please enter a valid date!"
            },
            gender: {
                required: "Gender is required!"
            },
            profile: {
                required: "Profile Image is required!",
                filesize:" File size must be less than 2MB",
                extension: "Please upload file in these format only (jpg, jpeg, png)."
            }
        }

    });

    var student_register_form = $("#student_register_form");

    student_register_form.on("submit",function(e) {
        e.preventDefault();
        
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var email_address = $("#email_address").val();
        var password = $("#password").val();
        var confirm_password = $("#confirm_password").val();
        var birthday = $("#birthday").val();
        var gender = $("#gender").val();
        var profile = $("#profile").prop('files')[0];

        var form_data = new FormData();
        form_data.append('fname',fname);
        form_data.append('lname',lname);
        form_data.append('email_address',email_address);
        form_data.append('password',password);
        form_data.append('confirm_password',confirm_password);
        form_data.append('birthday',birthday);
        form_data.append('gender',gender);
        form_data.append('profile',profile);

        if(fname && lname && email_address && password && confirm_password && birthday && gender && profile){

            $.ajax({
                url: "http://localhost/lm/api/register_student.php",
                type: "POST",
                dataType: 'script',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                success: function(response){
                    $(".registerResult").html(response);


                    $("#fname").val("");
                    $("#lname").val("");
                    $("#email_address").val("");
                    $("#password").val("");
                    $("#confirm_password").val("");
                    $("#birthday").val("");
                    $("#gender").val("");
                    $("#profile").val("");
                }
            });

        }

    });

});