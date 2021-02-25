<?php require_once('../layout/admin/header.php'); ?>

<!-- ======= Hero Section ======= -->
<section>

    <div class="container">


        <div class="d-flex justify-content-between">
            <h2 class="my-4">Teacher</h2>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Add Teacher
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Teacher</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Firstname">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Last Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Lastname">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Birthday</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Gender</label>
                                <select class="form-control" name="" id="">
                                    <option value="">Select a gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Profile Image</label>
                                <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
                        <th scope="col">Teacher ID</th>
                        <th scope="col">Profile</th>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">2198372</th>
                        <td><img src="../assets/img/directors/joel.jpg" style="border-radius:50%; border:1px solid #333;" width="50px" height="50px" alt=""></td>
                        <td>Test Name</td>
                        <td>Male</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editModalCenter">
                                Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="editModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Teacher</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">First Name</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Firstname">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Last Name</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Lastname">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Birthday</label>
                                                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Gender</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Select a gender</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Profile Image</label>
                                                    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
                        <th scope="row">2198372</th>
                        <td><img src="../assets/img/directors/joel.jpg" style="border-radius:50%; border:1px solid #333;" width="50px" height="50px" alt=""></td>
                        <td>Test Name</td>
                        <td>Male</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editModalCenter">
                                Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="editModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Teacher</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">First Name</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Firstname">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Last Name</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Lastname">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Birthday</label>
                                                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Gender</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Select a gender</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Profile Image</label>
                                                    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
                        <th scope="row">2198372</th>
                        <td><img src="../assets/img/directors/joel.jpg" style="border-radius:50%; border:1px solid #333;" width="50px" height="50px" alt=""></td>
                        <td>Test Name</td>
                        <td>Male</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editModalCenter">
                                Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="editModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Teacher</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">First Name</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Firstname">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Last Name</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Lastname">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Birthday</label>
                                                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Gender</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Select a gender</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Profile Image</label>
                                                    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
                        <th scope="row">2198372</th>
                        <td><img src="../assets/img/directors/joel.jpg" style="border-radius:50%; border:1px solid #333;" width="50px" height="50px" alt=""></td>
                        <td>Test Name</td>
                        <td>Male</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editModalCenter">
                                Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="editModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Teacher</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">First Name</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Firstname">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Last Name</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Lastname">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Birthday</label>
                                                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Gender</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Select a gender</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Profile Image</label>
                                                    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
                        <th scope="row">2198372</th>
                        <td><img src="../assets/img/directors/joel.jpg" style="border-radius:50%; border:1px solid #333;" width="50px" height="50px" alt=""></td>
                        <td>Test Name</td>
                        <td>Male</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editModalCenter">
                                Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="editModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Teacher</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">First Name</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Firstname">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Last Name</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Lastname">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Birthday</label>
                                                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Gender</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Select a gender</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Profile Image</label>
                                                    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
                        <th scope="row">2198372</th>
                        <td><img src="../assets/img/directors/joel.jpg" style="border-radius:50%; border:1px solid #333;" width="50px" height="50px" alt=""></td>
                        <td>Test Name</td>
                        <td>Male</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editModalCenter">
                                Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="editModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Teacher</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">First Name</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Firstname">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Last Name</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Lastname">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Birthday</label>
                                                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Gender</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Select a gender</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Profile Image</label>
                                                    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
                        <th scope="row">2198372</th>
                        <td><img src="../assets/img/directors/joel.jpg" style="border-radius:50%; border:1px solid #333;" width="50px" height="50px" alt=""></td>
                        <td>Test Name</td>
                        <td>Male</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editModalCenter">
                                Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="editModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Teacher</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">First Name</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Firstname">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Last Name</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Lastname">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Birthday</label>
                                                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Gender</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Select a gender</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Profile Image</label>
                                                    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
                        <th scope="row">2198372</th>
                        <td><img src="../assets/img/directors/joel.jpg" style="border-radius:50%; border:1px solid #333;" width="50px" height="50px" alt=""></td>
                        <td>Test Name</td>
                        <td>Male</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editModalCenter">
                                Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="editModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Teacher</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">First Name</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Firstname">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Last Name</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Lastname">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Birthday</label>
                                                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Gender</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Select a gender</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Profile Image</label>
                                                    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
                        <th scope="row">2198372</th>
                        <td><img src="../assets/img/directors/joel.jpg" style="border-radius:50%; border:1px solid #333;" width="50px" height="50px" alt=""></td>
                        <td>Test Name</td>
                        <td>Male</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editModalCenter">
                                Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="editModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Teacher</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">First Name</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Firstname">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Last Name</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Lastname">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Birthday</label>
                                                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Gender</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Select a gender</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Profile Image</label>
                                                    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
                        <th scope="row">2198372</th>
                        <td><img src="../assets/img/directors/joel.jpg" style="border-radius:50%; border:1px solid #333;" width="50px" height="50px" alt=""></td>
                        <td>Test Name</td>
                        <td>Male</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editModalCenter">
                                Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="editModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Teacher</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">First Name</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Firstname">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Last Name</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Lastname">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Birthday</label>
                                                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Gender</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Select a gender</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Profile Image</label>
                                                    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
                </tbody>
            </table>
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

</body>

</html>