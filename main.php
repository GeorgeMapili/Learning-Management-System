<?php require_once('layout/student/header.php'); ?>
<!-- ======= Hero Section ======= -->

<div class="container">
    <section></section>
    <h1 class="text-center">BSCS I</h1>
    <div class="row justify-content-between my-3 mx-2">
        <div class="col-lg-3 col-md-12 col-sm-12 shadow-lg p-3 mb-5 bg-white rounded" style="height:30vh; background: rgb(189, 187, 187);">
            <div style="height: 100px; width:100px; margin: 0 auto;" class="mt-2 text-center">
                <img src="assets/img/directors/perfecto.jpg" class="img-thumbnail" alt="">
            </div>
            <div class="text-center">
                <h5>Test Name</h5>
            </div>
            <div class="text-center">
                <a href="">View Profile</a>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 h-75 shadow-lg p-3 mb-5 bg-white rounded" style="min-height: 35vh; background: rgb(189, 187, 187);">
            <textarea name="" class="form-control" id="" cols="10" rows="4" placeholder="Start a discussion..."></textarea>
            <div class="mt-4 text-right">
                <button class="get-started-btn scrollto text-dark">Post</button>
            </div>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12 shadow-lg p-3 mb-5 bg-white rounded" style="max-height: 50vh; background: rgb(189, 187, 187);">
            <h5 class="mt-1">Task list</h5>
            <!-- <textarea name="" id="" cols="10" rows="3" class="form-control" placeholder="..."></textarea> -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">
                Add Task
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Todo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Deadline:</label>
                                    <input type="date" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Title</label>
                                    <input type="text" class="form-control" placeholder="..." />
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Body:</label>
                                    <textarea class="form-control" id="message-text" placeholder="..."></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="list-group list-group-flush overflow-auto h-50">
                <li class="list-group-item list-group-item-action bg-light">
                    <div class="d-flex justify-content-between">
                        <a href="#">Menu 1</a> <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action bg-light">
                    <div class="d-flex justify-content-between">
                        <a href="#">Menu 1</a> <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action bg-light">
                    <div class="d-flex justify-content-between">
                        <a href="#">Menu 1</a> <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action bg-light">
                    <div class="d-flex justify-content-between">
                        <a href="#">Menu 1</a> <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action bg-light">
                    <div class="d-flex justify-content-between">
                        <a href="#">Menu 1</a> <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action bg-light">
                    <div class="d-flex justify-content-between">
                        <a href="#">Menu 1</a> <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action bg-light">
                    <div class="d-flex justify-content-between">
                        <a href="#">Menu 1</a> <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                </li>
                <li class="list-group-item list-group-item-action bg-light">
                    <div class="d-flex justify-content-between">
                        <a href="#">Menu 1</a> <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                </li>
            </div>

        </div>
    </div>

    <hr class="my-1">

</div>

<section>
    <div class="container">
        <h2 class="my-1">Posts</h2>
        <div class="row mb-5">
            <div class="w-50 h-100 m-auto shadow-lg p-3 mb-5 bg-white rounded" style="min-height: 35vh;background: rgb(189, 187, 187);">
                <div class="d-flex">
                    <img style="height: 50px; width:50px;" src="assets/img/directors/perfecto.jpg" alt="..." class="rounded-circle">
                    <h5 class="ml-2 mt-2">Test Name</h5>
                    <small class="ml-auto">2020-2-16</small>
                </div>
                <div class="d-flex my-2">
                    <i class="fa fa-ellipsis-h ml-auto" aria-hidden="true" style="cursor:pointer" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Update</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </i>
                </div>
                <div class="jumbotron jumbotron-fluid mt-2">
                    <div class="container">
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum natus nisi doloribus debitis molestiae nemo repellat, adipisci et eum eligendi magni voluptatibus laudantium exercitationem maiores tempore voluptas vero ab aliquam.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="w-50 h-100 m-auto shadow-lg p-3 mb-5 bg-white rounded" style="min-height: 35vh;background: rgb(189, 187, 187);">
                <div class="d-flex">
                    <img style="height: 50px; width:50px;" src="assets/img/directors/perfecto.jpg" alt="..." class="rounded-circle">
                    <h5 class="ml-2 mt-2">Test Name</h5>
                    <small class="ml-auto">2020-2-16</small>
                </div>
                <div class="d-flex my-2">
                    <i class="fa fa-ellipsis-h ml-auto" aria-hidden="true" style="cursor:pointer" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Update</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </i>
                </div>
                <div class="jumbotron jumbotron-fluid mt-2">
                    <div class="container">
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum natus nisi doloribus debitis molestiae nemo repellat, adipisci et eum eligendi magni voluptatibus laudantium exercitationem maiores tempore voluptas vero ab aliquam.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="w-50 h-100 m-auto shadow-lg p-3 mb-5 bg-white rounded" style="min-height: 35vh;background: rgb(189, 187, 187);">
                <div class="d-flex">
                    <img style="height: 50px; width:50px;" src="assets/img/directors/perfecto.jpg" alt="..." class="rounded-circle">
                    <h5 class="ml-2 mt-2">Test Name</h5>
                    <small class="ml-auto">2020-2-16</small>
                </div>
                <div class="d-flex my-2">
                    <i class="fa fa-ellipsis-h ml-auto" aria-hidden="true" style="cursor:pointer" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Update</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </i>
                </div>
                <div class="jumbotron jumbotron-fluid mt-2">
                    <div class="container">
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum natus nisi doloribus debitis molestiae nemo repellat, adipisci et eum eligendi magni voluptatibus laudantium exercitationem maiores tempore voluptas vero ab aliquam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

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

</body>

</html>