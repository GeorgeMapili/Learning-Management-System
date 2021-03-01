$(document).ready(function () {

    $("#login_form_student").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true
            }
        },
        messages: {
            email: {
                required: "Email is required!",
                email: "Please enter a valid email!"
            },
            password: {
                required: "Password is required!"
            }
        }

    });

    $("#login_form_student").on("submit", function (e) {
        e.preventDefault();

        var email = $("#email_address").val();
        var password = $("#password").val();

        if (email && password) {

            var data_stored = {
                "email": email,
                "password": password
            }

            $.ajax({
                url: "http://localhost/lm/api/login_student.php",
                method: "POST",
                dataType: "json",
                data: data_stored,
                success: function (response) {

                    if (response.default === response.answer) {
                        $(".loginResult").html(response.answer);
                        $("#email_address").val("");
                        $("#password").val("");
                        window.location.href = "home.php";
                    } else {
                        $(".loginResult").html(response.answer);
                        $("#email_address").val("");
                        $("#password").val("");
                    }

                    
                }
            });

        }


    });

});