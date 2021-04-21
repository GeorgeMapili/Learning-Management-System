<?php
ob_start();

require_once("../vendor/autoload.php");

use config\Database;

$db = new Database();
$dbconn = $db->connect();

?>
<?php require_once('../layout/admin/header.php'); ?>

<!-- ======= Hero Section ======= -->
<section>

    <div class="container">


        <div class="d-flex justify-content-between">
            <h2 class="my-4">Downloadable</h2>
        </div>

        <?php
        if(isset($_GET['success']) && $_GET['success'] == "successfully_added_downloadables"){
        ?>
        <div class="text-center">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Successfully added downloadables!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <?php  
        }else if(isset($_GET['error']) && $_GET['error'] == "input_all_fields"){
        ?>
        <div class="text-center">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Input all fields!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <?php  
        }else if(isset($_GET['success']) && $_GET['success'] == "successfully_updated_downloadables"){
        ?>
        <div class="text-center">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Successfully updated downloadables!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <?php  
        }else if(isset($_GET['success']) && $_GET['success'] == "downloadable_deleted_successfully"){
        ?>
        <div class="text-center">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Successfully deleted downloadables!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <?php  
        }
        ?>

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
                    <form action="downloadable.php" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <label for="">File Name</label>
                            <input type="file" class="form-control" name="addFile">
                            <label for="">Description</label>
                            <textarea type="text" class="form-control" name="addDescription" rows="2"></textarea>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Select where to place downloadable file</label>
                                <select class="form-control" name="addClass">
                                    <option value="">Select a class</option>
                                    <?php
                                    $sql = "SELECT * FROM classes";
                                    $stmt = $dbconn->prepare($sql);
                                    $stmt->execute();
                                    while($result = $stmt->fetch(PDO::FETCH_ASSOC)):
                                    ?>
                                    <option value="<?php echo $result['class_id'] ?>"><?php echo $result['class_name'] ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" name="addDownloadable" value="Add">
                        </div>
                    </form>

                    <?php

                    if(isset($_POST['addDownloadable'])){

                        $addFile = $_FILES['addFile'];
                        $addDescription = $_POST['addDescription'];
                        $class_id = $_POST['addClass'];

                        if($addFile == "" || $addDescription == "" || $class_id == ""){

                            header("location:downloadable.php?error=input_all_fields");
                            exit;

                        }

                        $length = 5;
                        $newImageName =  substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 1, $length);

                        $ext = $_FILES['addFile']['name'];

                        $ext = explode(".", $ext);

                        $extension = $ext[1];

                        $filename = $newImageName. "." .$extension;

                        // Get the teacher name
                        $sql = "SELECT * FROM classes WHERE class_id = :class_id";
                        $stmt = $dbconn->prepare($sql);
                        $stmt->bindParam(":class_id", $class_id, PDO::PARAM_INT);
                        $stmt->execute();

                        $result = $stmt->fetch(PDO::FETCH_ASSOC);

                        $teacher_name = $result['teacher_name'];

                        // Save the download file 
                        $sql = "INSERT INTO downloadables(class_id, downloadable_author, downloadable_file, downloadable_description)VALUES(:class_id, :downloadable_author, :downloadable_file, :downloadable_description)";
                        $stmt = $dbconn->prepare($sql);
                        $stmt->bindParam(":class_id", $class_id, PDO::PARAM_INT);
                        $stmt->bindParam(":downloadable_author", $teacher_name, PDO::PARAM_STR);
                        $stmt->bindParam(":downloadable_file", $filename, PDO::PARAM_STR);
                        $stmt->bindParam(":downloadable_description", $addDescription, PDO::PARAM_STR);

                        if($stmt->execute()){

                            // Save the file
                            move_uploaded_file($_FILES['addFile']['tmp_name'], '../assets/download/'. $filename);

                            header("location:downloadable.php?success=successfully_added_downloadables");
                            exit;
                        }

                    }

                    ?>

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

                    <?php
                    $sql = "SELECT * FROM downloadables ORDER BY downloadable_created_at DESC";
                    $stmt = $dbconn->prepare($sql);
                    $stmt->execute();

                    while($result = $stmt->fetch(PDO::FETCH_ASSOC)):
                        $image = $result['downloadable_file'];
                        $updateModal = substr($image, 0, 4);
                    ?>

                    <tr>
                        <th scope="row"><?php echo substr($result['downloadable_created_at'], 0 ,10) ?></th>
                        <td><?php echo $result['downloadable_file'] ?></td>
                        <td><?php echo $result['downloadable_description'] ?></td>
                        <?php
                            $class_id1 = $result['class_id'];

                            $sql3 = "SELECT * FROM classes WHERE class_id = :class_id";
                            $stmt3 = $dbconn->prepare($sql3);
                            $stmt3->bindParam(":class_id", $class_id1, PDO::PARAM_INT);
                            $stmt3->execute();

                            $resultss = $stmt3->fetch(PDO::FETCH_ASSOC);
                        ?>
                        <td><?php echo $resultss['class_name'] ?></td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#<?php echo $updateModal ?>">
                                Update
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="<?php echo $updateModal ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Downloadable</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="edit_downloadable.php" method="post" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <input type="hidden" name="download_id" value="<?php echo $result['downloadable_id'] ?>">
                                                <label for="">File Name</label>
                                                <p><?php echo $result['downloadable_file'] ?></p>
                                                <input type="file" class="form-control" name="editFile">
                                                <label for="">Description</label>
                                                <textarea type="text" class="form-control" name="editDescription" rows="2"><?php echo $result['downloadable_description'] ?></textarea>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Select where to place downloadable file</label>
                                                    <select class="form-control" name="editClass">
                                                        <option value="">Select a class</option>
                                                        <?php
                                                        $sql1 = "SELECT * FROM classes";
                                                        $stmt1 = $dbconn->prepare($sql1);
                                                        $stmt1->execute();
                                                        while($result1 = $stmt1->fetch(PDO::FETCH_ASSOC)){
                                                        ?>
                                                        
                                                        <option value="<?php echo $result1['class_id'] ?>" <?php if($result['class_id'] === $result1['class_id']){ echo "selected";}else{ echo ""; } ?>><?php echo $result1['class_name'] ?></option>
                                                        
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="updateClass" class="btn btn-primary" value="Update">
                                            </div>
                                        </form>

                                        

                                    </div>
                                </div>
                            </div>
                            <a onclick="return confirm('Are you sure to delete ?')" href="deletedownloadable.php?downloadable_id=<?php echo $result['downloadable_id'] ?>&downloadable_file=<?php echo $result['downloadable_file'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
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