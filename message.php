<?php require_once('layout/student/header1.php') ?>
<?php

$WshShell = new COM('WScript.Shell'); 
$oExec = $WshShell->Run('C:\xampp\php\php.exe C:\xampp\htdocs\lm\bin\chat-servers.php', 0, false);

?>
<!-- ======= Hero Section ======= -->
<section>
    <div class="container">

        <!-- Page header start -->
        <div class="page-title">
            <div class="row gutters">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <h5 class="title">Message</h5>
                </div>
            </div>
        </div>
        <!-- Page header end -->

        <!-- Content wrapper start -->
        <div class="content-wrapper">

            <!-- Row start -->
            <div class="row gutters">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="card m-0">

                        <!-- Row start -->
                        <div class="row no-gutters">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3">
                                <div class="users-container">
                                    <div class="chat-search-box">
                                        <form action="" id="search-contacts">
                                            <div class="input-group">
                                                <input class="form-control" placeholder="Search" id="searchbar">
                                                <div class="input-group-btn">
                                                    <button type="submit" class="btn btn-info">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div id="searchResults"></div>
                                        </form>
                                    </div>
                                    <ul class="users" style="height:400px; overflow:scroll;">
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9">
                                <div class="selected-user">
                                    <input type="hidden" name="chat_mate" id="chat_mate" value="<?php echo $_SESSION['contact_add_id'] ?? NULL; ?>">
                                    <input type="hidden" name="chat_mate_image" id="chat_mate_image" value="<?php echo $_SESSION['contact_add_img'] ?? NULL; ?>">
                                    <span>To: <span class="name"><?php echo $_SESSION['contact_add_name'] ?? NULL; ?></span></span>
                                </div>
                                <div class="chat-container">
                                    <ul class="chat-box chatContainerScroll" style="height:500px; overflow:scroll;">

                                    </ul>

                                    <form action="" id="chat_form">
                                        <input type="hidden" id="student_id" value="<?php echo $_SESSION['id']; ?>">
                                        <input type="hidden" id="student_fname" value="<?php echo $_SESSION['fname']; ?>">
                                        <input type="hidden" id="student_image" value="<?php echo "assets/img/students/" . $_SESSION['image']; ?>">
                                        <div class="form-group mt-3 mb-0">
                                            <textarea class="form-control" id="message_chat" rows="2" placeholder="Type your message here..." required></textarea>
                                        </div>
                                        <div class="form-group mt-3 mb-0">
                                            <button class="btn btn-info">Send</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Row end -->
                    </div>

                </div>

            </div>
            <!-- Row end -->

        </div>
        <!-- Content wrapper end -->

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

<script>
    $.ajax({
        url: "http://localhost/lm/api/main_data.php",
        success: function(response){

            var span = $("<span>", {
                "style": "color: white; ",
                "class": "lead mt-3 px-3"
            });

            span.html(`${response.fname_student} ${response.lname_student}`);

            $("#studentName").append(span);
        }
    });
</script>

<script src="js/message.js"></script>

</body>

</html>