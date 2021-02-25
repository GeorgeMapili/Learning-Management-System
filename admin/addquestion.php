<?php require_once('../layout/admin/header.php'); ?>

<!-- ======= Hero Section ======= -->
<section>

    <div class="container">


        <div class="d-flex justify-content-between">
            <h2 class="my-4">Add Question</h2>
        </div>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <form>
                    <h5>Question</h5>
                    <div>
                        <div class="form-group">
                            <p>1</p>
                            <label for="exampleInputEmail1">Type of Question</label>
                            <select name="" id="" class="form-control">
                                <option value="">True or False</option>
                                <option value="">Multiple Choice</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="" id="" rows="3" placeholder="Question Here..."></textarea>
                        </div>
                        <div class="form-check my-2">
                            <div class="d-flex justify-content-between">
                                <h3 class="text-weight-bold">Responses</h3>
                                <h4>Correct Answer</h4>
                            </div>
                            <div class="border p-2 my-2 d-flex justify-content-between">
                                <p>True</p>
                                <input type="radio" name="answer" id="answer">

                            </div>
                            <div class="border p-2 my-2 d-flex justify-content-between">
                                <p>False</p>
                                <input type="radio" name="answer" id="answer">
                            </div>
                        </div>
                        <div class="my-2">
                            <h4>Grading</h4>
                            <form action="">
                                <input type="number" class="form-control" name="" id="" style="width: 70px;">
                            </form>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Add Question</button>
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Assign</button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Assign To</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Select where to place quiz</label>
                                                <form action="">
                                                    <div class="form-group">
                                                        <input type="checkbox" name="" id="" checked>BSCS I
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="checkbox" name="" id="">BSCS I
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="checkbox" name="" id="">BSCS I
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="checkbox" name="" id="">BSCS I
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="checkbox" name="" id="">BSCS I
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="checkbox" name="" id="">BSCS I
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="checkbox" name="" id="">BSCS I
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="checkbox" name="" id="">BSCS I
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Due on</label>
                                                <form action="">
                                                    <div class="form-group">
                                                        <input type="date" class="form-control" name="" id="" />
                                                        <input type="time" class="form-control" name="" id="" />
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Time Limit</label>
                                                <form action="">
                                                    <div class="form-group d-flex justity-content-center">
                                                        <input type="number" class="form-control" name="" id="" style="width: 75px;" />
                                                        <p class="ml-3">Minutes</p>
                                                    </div>
                                                </form>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Assign</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            </form>
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

</body>

</html>