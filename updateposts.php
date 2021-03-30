<?php require_once('layout/student/header.php'); ?>
<?php require_once('layout/student/update_post_header.php'); ?>
<!-- ======= Hero Section ======= -->

<div class="container">
    <section></section>

    <div>
        <h2 class="text-center">Post</h2>
        <form id="formPost">
            <textarea name="postsVal" class="form-control" id="postsVal" cols="10" rows="4" placeholder="Update a post..." required></textarea>
            <div class="mt-4 text-right">
                <button class="btn btn-primary" type="submit" id="postsBtn">Update</button>
            </div>
        </form>
    </div>

</div>

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
    var classId = new URLSearchParams(window.location.search);
    var classid = classId.get('class_id');

    var postId = new URLSearchParams(window.location.search);
    var postid = postId.get('post_id');

    $("#formPost").on('submit', function(e){

        e.preventDefault();
        
        var contentUpdate = $("#postsVal").val();

        $.ajax({
            url: "http://localhost/lm/api/update_post.php",
            method: "POST",
            data: {
                classid: classid,
                postid: postid,
                contentUpdate: contentUpdate
            },
            success: function(response){
                if(response === "true"){
                    window.location.replace(`http://localhost/lm/main.php?id=${classid}`);
                }
            }
        });

    });

    // Get the post
    $.ajax({
        url: "http://localhost/lm/api/updated_post.php",
        method: "POST",
        data: {
            classid: classid,
            postid: postid
        },
        success: function(response){

            $("#postsVal").val(response[0].post_body);
        }
    });
</script>

</body>

</html>