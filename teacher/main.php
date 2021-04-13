<?php require_once('../layout/teacher/header1.php'); ?>
<?php

$WshShell = new COM('WScript.Shell'); 
$oExec = $WshShell->Run('C:\xampp\php\php.exe C:\xampp\htdocs\lm\bin\push-server.php', 0, false);

?>
<?php
    if(!isset($_GET['id'])){
        header("location:myclass.php");
        exit;
    }
?>

<div class="container">
    <section></section>
    <h1 class="text-center" id="class_title"></h1>
    <div class="row justify-content-between my-3 mx-2">
        <div class="col-lg-3 col-md-12 col-sm-12 shadow-lg p-3 mb-5 bg-white rounded" style="height:30vh; background: rgb(189, 187, 187);">
            <div style="height: 100px; width:100px; margin: 0 auto;" class="mt-2 text-center" id="teacher_img">
                <!-- <img src="assets/img/directors/perfecto.jpg" class="img-thumbnail" alt=""> -->
            </div>
            <div class="text-center" id="teacher_name"></div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 h-75 shadow-lg p-3 mb-5 bg-white rounded" style="min-height: 35vh; background: rgb(189, 187, 187);">
            <form id="formPost">
                <textarea name="postsVal" class="form-control" id="postsVal" cols="10" rows="4" placeholder="Start a discussion..." required></textarea>
                <div class="mt-4 text-right">
                    <button class="btn btn-primary" type="submit" id="postsBtn">Post</button>
                </div>
            </form>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12 shadow-lg p-3 mb-5 bg-white rounded task_here" style="max-height: 50vh; background: rgb(189, 187, 187);">
            <h5 class="mt-1">Task list</h5>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Add Task
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Task</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="formTask">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Deadline:</label>
                                    <input type="date" id="form_deadline" class="form-control" id="recipient-name" required>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Title</label>
                                    <input type="text" id="form_title" class="form-control" placeholder="..." required/>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Body:</label>
                                    <textarea class="form-control" id="form_body" placeholder="..." required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="list-group list-group-flush overflow-auto h-50 task_show"></div>

        </div>
    </div>

    <hr class="my-1">

</div>

<section>
    <div class="container">
        <h2 class="my-1">Posts</h2>

        <div id="postsHolder"></div>

    </div>
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
<script src="../js/autobahn.js"></script>
<script src="../js/teacher/main.js"></script>


</body>

</html>