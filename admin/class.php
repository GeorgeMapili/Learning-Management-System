<?php require_once('../layout/admin/header.php'); ?>

<!-- ======= Hero Section ======= -->
<section>

    <div class="container">


        <div class="d-flex justify-content-between">
            <h2 class="my-4">Class</h2>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Add Class
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Class</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label for="">Class Name</label>
                        <input type="text" class="form-control" name="" id="">
                        <label for="">Class Description</label>
                        <textarea type="text" class="form-control" name="" id="" rows="2"></textarea>
                        <label for="">Select Grade</label>
                        <select class="form-control" name="" id="">
                            <option value="none">None</option>
                            <option value="first_year">First Year</option>
                            <option value="second_year">Second Year</option>
                            <option value="third_year">Third Year</option>
                            <option value="fourth_year">Fourth Year</option>
                        </select>
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
                        <th scope="col">Class ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Code</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">2198372</th>
                        <td>BSCS I</td>
                        <td>This is a description</td>
                        <td>1st Year</td>
                        <td>Sh231aJksd</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#classModalCenter">
                                Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="classModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Class</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <label for="">Class Name</label>
                                            <input type="text" class="form-control" name="" id="">
                                            <label for="">Class Description</label>
                                            <textarea type="text" class="form-control" name="" id="" rows="2"></textarea>
                                            <label for="">Select Grade</label>
                                            <select class="form-control" name="" id="">
                                                <option value="none">None</option>
                                                <option value="first_year">First Year</option>
                                                <option value="second_year">Second Year</option>
                                                <option value="third_year">Third Year</option>
                                                <option value="fourth_year">Fourth Year</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2198372</th>
                        <td>BSCS I</td>
                        <td>This is a description</td>
                        <td>1st Year</td>
                        <td>Sh231aJksd</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#classModalCenter">
                                Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="classModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Class</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <label for="">Class Name</label>
                                            <input type="text" class="form-control" name="" id="">
                                            <label for="">Class Description</label>
                                            <textarea type="text" class="form-control" name="" id="" rows="2"></textarea>
                                            <label for="">Select Grade</label>
                                            <select class="form-control" name="" id="">
                                                <option value="none">None</option>
                                                <option value="first_year">First Year</option>
                                                <option value="second_year">Second Year</option>
                                                <option value="third_year">Third Year</option>
                                                <option value="fourth_year">Fourth Year</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2198372</th>
                        <td>BSCS I</td>
                        <td>This is a description</td>
                        <td>1st Year</td>
                        <td>Sh231aJksd</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#classModalCenter">
                                Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="classModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Class</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <label for="">Class Name</label>
                                            <input type="text" class="form-control" name="" id="">
                                            <label for="">Class Description</label>
                                            <textarea type="text" class="form-control" name="" id="" rows="2"></textarea>
                                            <label for="">Select Grade</label>
                                            <select class="form-control" name="" id="">
                                                <option value="none">None</option>
                                                <option value="first_year">First Year</option>
                                                <option value="second_year">Second Year</option>
                                                <option value="third_year">Third Year</option>
                                                <option value="fourth_year">Fourth Year</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2198372</th>
                        <td>BSCS I</td>
                        <td>This is a description</td>
                        <td>1st Year</td>
                        <td>Sh231aJksd</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#classModalCenter">
                                Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="classModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Class</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <label for="">Class Name</label>
                                            <input type="text" class="form-control" name="" id="">
                                            <label for="">Class Description</label>
                                            <textarea type="text" class="form-control" name="" id="" rows="2"></textarea>
                                            <label for="">Select Grade</label>
                                            <select class="form-control" name="" id="">
                                                <option value="none">None</option>
                                                <option value="first_year">First Year</option>
                                                <option value="second_year">Second Year</option>
                                                <option value="third_year">Third Year</option>
                                                <option value="fourth_year">Fourth Year</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2198372</th>
                        <td>BSCS I</td>
                        <td>This is a description</td>
                        <td>1st Year</td>
                        <td>Sh231aJksd</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#classModalCenter">
                                Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="classModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Class</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <label for="">Class Name</label>
                                            <input type="text" class="form-control" name="" id="">
                                            <label for="">Class Description</label>
                                            <textarea type="text" class="form-control" name="" id="" rows="2"></textarea>
                                            <label for="">Select Grade</label>
                                            <select class="form-control" name="" id="">
                                                <option value="none">None</option>
                                                <option value="first_year">First Year</option>
                                                <option value="second_year">Second Year</option>
                                                <option value="third_year">Third Year</option>
                                                <option value="fourth_year">Fourth Year</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2198372</th>
                        <td>BSCS I</td>
                        <td>This is a description</td>
                        <td>1st Year</td>
                        <td>Sh231aJksd</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#classModalCenter">
                                Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="classModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Class</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <label for="">Class Name</label>
                                            <input type="text" class="form-control" name="" id="">
                                            <label for="">Class Description</label>
                                            <textarea type="text" class="form-control" name="" id="" rows="2"></textarea>
                                            <label for="">Select Grade</label>
                                            <select class="form-control" name="" id="">
                                                <option value="none">None</option>
                                                <option value="first_year">First Year</option>
                                                <option value="second_year">Second Year</option>
                                                <option value="third_year">Third Year</option>
                                                <option value="fourth_year">Fourth Year</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Add</button>
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