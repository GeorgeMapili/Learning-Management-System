<?php require_once('../layout/admin/header.php'); ?>

<!-- ======= Hero Section ======= -->
<section>

    <div class="container">


        <div class="d-flex justify-content-between">
            <h2 class="my-4">Downloadable</h2>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Add Downloadable
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Downloadable</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label for="">File Name</label>
                        <input type="file" class="form-control" name="" id="">
                        <label for="">Description</label>
                        <textarea type="text" class="form-control" name="" id="" rows="2"></textarea>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Select where to place downloadable file</label>
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
                        <th scope="col">File Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Class</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">2020-02-22</th>
                        <td>test.pdf</td>
                        <td>This is a description</td>
                        <td>BSCS I</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#updateDownloadableModalCenter">
                                Update
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="updateDownloadableModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Downloadable</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <label for="">File Name</label>
                                            <input type="file" class="form-control" name="" id="">
                                            <label for="">Description</label>
                                            <textarea type="text" class="form-control" name="" id="" rows="2"></textarea>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Select where to place downloadable file</label>
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
                        <td>test.pdf</td>
                        <td>This is a description</td>
                        <td>BSCS I</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#updateDownloadableModalCenter">
                                Update
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="updateDownloadableModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Downloadable</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <label for="">File Name</label>
                                            <input type="file" class="form-control" name="" id="">
                                            <label for="">Description</label>
                                            <textarea type="text" class="form-control" name="" id="" rows="2"></textarea>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Select where to place downloadable file</label>
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
                        <td>test.pdf</td>
                        <td>This is a description</td>
                        <td>BSCS I</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#updateDownloadableModalCenter">
                                Update
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="updateDownloadableModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Downloadable</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <label for="">File Name</label>
                                            <input type="file" class="form-control" name="" id="">
                                            <label for="">Description</label>
                                            <textarea type="text" class="form-control" name="" id="" rows="2"></textarea>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Select where to place downloadable file</label>
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
                        <td>test.pdf</td>
                        <td>This is a description</td>
                        <td>BSCS I</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#updateDownloadableModalCenter">
                                Update
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="updateDownloadableModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Downloadable</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <label for="">File Name</label>
                                            <input type="file" class="form-control" name="" id="">
                                            <label for="">Description</label>
                                            <textarea type="text" class="form-control" name="" id="" rows="2"></textarea>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Select where to place downloadable file</label>
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
                        <td>test.pdf</td>
                        <td>This is a description</td>
                        <td>BSCS I</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#updateDownloadableModalCenter">
                                Update
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="updateDownloadableModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Downloadable</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <label for="">File Name</label>
                                            <input type="file" class="form-control" name="" id="">
                                            <label for="">Description</label>
                                            <textarea type="text" class="form-control" name="" id="" rows="2"></textarea>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Select where to place downloadable file</label>
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
                        <td>test.pdf</td>
                        <td>This is a description</td>
                        <td>BSCS I</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#updateDownloadableModalCenter">
                                Update
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="updateDownloadableModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Downloadable</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <label for="">File Name</label>
                                            <input type="file" class="form-control" name="" id="">
                                            <label for="">Description</label>
                                            <textarea type="text" class="form-control" name="" id="" rows="2"></textarea>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Select where to place downloadable file</label>
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