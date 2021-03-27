$(document).ready(function () {

    var row = $(".row");

    $.ajax({
        url: "http://localhost/lm/api/home.php",
        success: function (response) {
            createElements(response);
        }
    });

    function createElements(response) {

        for (var i = 0; i < response.body.length; i++) {

            var classIds = response.body[i].class_id;

            var div1 = $("<div>", { "class": "col-sm-12 col-md-4 col-lg-3 my-3" });
            var a = $("<a>", {"href": `main.php?id=${classIds}`});
            var div2 = $("<div>", { "class": "card" });
            var div3 = $("<div>", { "class": "card-body" });
            var h5 = $("<h5>", { "class": "card-title text-center" });
            h5.html(response.body[i].class_name);
            var p = $("<p>");
            p.html(response.body[i].teacher_name);

            div3.append(h5);
            div3.append(p);
            div2.append(div3);
            a.append(div2);
            div1.append(a);

            row.append(div1);

        }

    }

    $(".joinClass").on("submit", function (e) {
        e.preventDefault();

        var classCode = $("#classCode").val();

        $.ajax({
            url: "http://localhost/lm/api/join_class.php",
            method: "POST",
            data: {
                class_code: classCode
            },
            success: function (response) {
                $(".codeResult").html(response);

                // Reload the classes
                $.ajax({
                    url: "http://localhost/lm/api/home.php",
                    success: function (response) {
                        $(".row").html("");
                        createElements(response);
                    }
                });
            }
        });

    });

});