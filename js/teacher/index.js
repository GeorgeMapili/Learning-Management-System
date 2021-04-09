$(document).ready(function(){
    $("#formTeacherLogin").validate({
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


    $("#formTeacherLogin").on('submit', function(e){
        e.preventDefault();

        var email = $("#email").val();
        var password = $("#password").val();

        $.ajax({
            url: "http://localhost/lm/api/teacher/login.php",
            method: "POST",
            dataType: "json",
            data: {
                email: email,
                password: password
            },
            success: function(response){
                
                if (response.default === response.answer) {
                    $(".loginResult").html(response.answer);
                    $("#email").val("");
                    $("#password").val("");
                    window.location.href = "myclass.php";
                } else {
                    $(".loginResult").html(response.answer);
                    $("#email").val("");
                    $("#password").val("");
                }

            }
        });

    });

    // End of jquery
});