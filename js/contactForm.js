$(document).ready(function() {

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

    $("#contactForm").validate({

        rules: {
            name: {
                required: true,
                minlength: 3,
                textOnly: true
            },
            email: {
                required: true,
                email: true
            },
            subject: {
                required: true
            },
            message: {
                required: true
            }
        },
        messages: {
            name: {
                required: "Name is required!",
                minlength: "Please enter at least 3 characters!",
                textOnly: "Please enter a valid name!"
            },
            email: {
                required: "Email is required!",
                email: "Please enter a valid email!"
            },
            subject: {
                required: "Subject is required!"
            },
            message: {
                required: "Message is required!"
            }
        }

    });

    var contactForm = $("#contactForm");

    contactForm.on("submit", function(e) {

        e.preventDefault();

        var name = $("#name").val();
        var email = $("#email").val();
        var subject = $("#subject").val();
        var message = $("#message").val();

        var nameErr = ["Name is required", "Please enter at least 3 characters", "Name is not valid"];
        var emailErr = ["Email is required", "Please enter a valid email"];
        var subjectErr = ["Subject is required"];
        var messageErr = ["Message is required"];

        if (name && email && subject && message) {

            $.ajax({
                url: "http://localhost/lm/api/sendcontact.php",
                method: "POST",
                data: {
                    name: name,
                    email: email,
                    subject: subject,
                    message: message,
                },
                success: function(response) {

                    if ($.inArray(response, nameErr) != -1) {
                        $(".nameError").html(response);
                    }else if ($.inArray(response, emailErr) != -1) {
                        $(".emailError").html(response);
                    }else if ($.inArray(response, subjectErr) != -1) {
                        $(".subjectError").html(response);
                    }else if ($.inArray(response, messageErr) != -1) {
                        $(".messageError").html(response);
                    }else{
                        $("#ajaxResult").html(response);
                    }
                    
                    $("#name").val("");
                    $("#email").val("");
                    $("#subject").val("");
                    $("#message").val("");
                }
            });
        }

    });

})