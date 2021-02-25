<?php require_once('../layout/admin/header.php'); ?>

<!-- ======= Hero Section ======= -->
<section>

    <div class="container">


        <div class="d-flex justify-content-between">
            <h2 class="my-4">Quiz</h2>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Add Quiz
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Quiz</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" name="" id="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Instruction</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </div>
        </div>

        <div style="overflow: scroll; height:400px;">
            <table class="table my-5">
                <thead>
                    <tr>
                        <th scope="col">Date Upload</th>
                        <th scope="col">Title</th>
                        <th scope="col">Question</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">2020-02-22</th>
                        <td>Chaper I and Chaper II</td>
                        <td>
                            <a href="addquestion.php" class="btn btn-primary">Add Question</a>
                        </td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#updateQuizModalCenter">
                                Update
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="updateQuizModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Quiz</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Title</label>
                                                    <input type="text" class="form-control" name="" id="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Instruction</label>
                                                    <textarea class="form-control" rows="3"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2020-02-22</th>
                        <td>Chaper I and Chaper II</td>
                        <td>
                            <a href="addquestion.php" class="btn btn-primary">Add Question</a>
                        </td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#updateQuizModalCenter">
                                Update
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="updateQuizModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Quiz</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Title</label>
                                                    <input type="text" class="form-control" name="" id="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Instruction</label>
                                                    <textarea class="form-control" rows="3"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2020-02-22</th>
                        <td>Chaper I and Chaper II</td>
                        <td>
                            <a href="addquestion.php" class="btn btn-primary">Add Question</a>
                        </td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#updateQuizModalCenter">
                                Update
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="updateQuizModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Quiz</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Title</label>
                                                    <input type="text" class="form-control" name="" id="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Instruction</label>
                                                    <textarea class="form-control" rows="3"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2020-02-22</th>
                        <td>Chaper I and Chaper II</td>
                        <td>
                            <a href="addquestion.php" class="btn btn-primary">Add Question</a>
                        </td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#updateQuizModalCenter">
                                Update
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="updateQuizModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Quiz</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Title</label>
                                                    <input type="text" class="form-control" name="" id="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Instruction</label>
                                                    <textarea class="form-control" rows="3"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2020-02-22</th>
                        <td>Chaper I and Chaper II</td>
                        <td>
                            <a href="addquestion.php" class="btn btn-primary">Add Question</a>
                        </td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#updateQuizModalCenter">
                                Update
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="updateQuizModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Quiz</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Title</label>
                                                    <input type="text" class="form-control" name="" id="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Instruction</label>
                                                    <textarea class="form-control" rows="3"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2020-02-22</th>
                        <td>Chaper I and Chaper II</td>
                        <td>
                            <a href="addquestion.php" class="btn btn-primary">Add Question</a>
                        </td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#updateQuizModalCenter">
                                Update
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="updateQuizModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Quiz</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Title</label>
                                                    <input type="text" class="form-control" name="" id="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Instruction</label>
                                                    <textarea class="form-control" rows="3"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
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