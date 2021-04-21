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
            <h2 class="my-4">Quiz</h2>
        </div>

        <?php
        if(isset($_GET['error']) && $_GET['error'] == "input_all_fields"){
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
        }else if(isset($_GET['success']) && $_GET['success'] == "successfully_added_quiz"){
        ?>
        <div class="text-center">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Successfully added quiz!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <?php  
        }else if(isset($_GET['success']) && $_GET['success'] == "successfully_updated_quiz"){
        ?>
        <div class="text-center">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Successfully updated quiz!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <?php  
        }else if(isset($_GET['success']) && $_GET['success'] == "quiz_deleted_successfully"){
        ?>
        <div class="text-center">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Successfully deleted quiz!</strong>
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
                    <form action="quiz.php" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <label for="">File Name</label>
                            <input type="file" class="form-control" name="addFile">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" name="addTitle">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Instruction</label>
                                <textarea class="form-control" name="addInstruction" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Select where to place assignment file</label>
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
                            <input type="submit" class="btn btn-primary" name="addQuiz" value="Add">
                        </div>
                    </form>

                    <?php

                    if(isset($_POST['addQuiz'])){

                        $addFile = $_FILES['addFile'];
                        $addTitle = $_POST['addTitle'];
                        $addInstruction = $_POST['addInstruction'];
                        $class_id = $_POST['addClass'];

                        if($addFile == "" || $addTitle == "" || $addInstruction == "" || $class_id == ""){

                            header("location:quiz.php?error=input_all_fields");
                            exit;

                        }

                        $length = 5;
                        $newImageName =  substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 1, $length);

                        $ext = $_FILES['addFile']['name'];

                        $ext = explode(".", $ext);

                        $extension = $ext[1];

                        $filename = $newImageName. "." .$extension;

                        // Save the quiz file 
                        $sql = "INSERT INTO quiz(quiz_class_id, quiz_file, quiz_title, quiz_instruction)VALUES(:quiz_class_id, :quiz_file, :quiz_title, :quiz_instruction)";
                        $stmt = $dbconn->prepare($sql);
                        $stmt->bindParam(":quiz_class_id", $class_id, PDO::PARAM_INT);
                        $stmt->bindParam(":quiz_file", $filename, PDO::PARAM_STR);
                        $stmt->bindParam(":quiz_title", $addTitle, PDO::PARAM_STR);
                        $stmt->bindParam(":quiz_instruction", $addInstruction, PDO::PARAM_STR);

                        if($stmt->execute()){

                            // Save the file
                            move_uploaded_file($_FILES['addFile']['tmp_name'], '../assets/quiz/'. $filename);

                            header("location:quiz.php?success=successfully_added_quiz");
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
                        <th scope="col">Title</th>
                        <th scope="col">Instruction</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $sql = "SELECT * FROM quiz ORDER BY quiz_created_at DESC";
                    $stmt = $dbconn->prepare($sql);
                    $stmt->execute();

                    while($result = $stmt->fetch(PDO::FETCH_ASSOC)):
                        $image = $result['quiz_file'];
                        $updateModal = substr($image, 0, 4);
                    ?>

                    <tr>
                        <th scope="row"><?php echo substr($result['quiz_created_at'], 0 ,10) ?></th>
                        <td><?php echo $result['quiz_file'] ?></td>
                        <td><?php echo $result['quiz_instruction'] ?><td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#<?php echo $updateModal ?>">
                                Update
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="<?php echo $updateModal ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Quiz</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="edit_quiz.php" method="post" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                    <input type="hidden" name="quiz_id" value="<?php echo $result['quiz_id'] ?>">
                                                    <label for="">File Name</label>
                                                    <p><?php echo $result['quiz_file'] ?></p>
                                                    <input type="file" class="form-control" name="editFile">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Title</label>
                                                        <input type="text" class="form-control" name="editTitle" value="<?php echo $result['quiz_title'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Instruction</label>
                                                        <textarea class="form-control" rows="3" name="editInstruction"><?php echo $result['quiz_instruction'] ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Select where to place assignment file</label>
                                                        <select class="form-control" name="editClass">
                                                            <option value="">Select a class</option>
                                                            <?php
                                                            $sql1 = "SELECT * FROM classes";
                                                            $stmt1 = $dbconn->prepare($sql1);
                                                            $stmt1->execute();
                                                            while($result1 = $stmt1->fetch(PDO::FETCH_ASSOC)){
                                                            ?>
                                                            
                                                            <option value="<?php echo $result1['class_id'] ?>" <?php if($result['quiz_class_id'] === $result1['class_id']){ echo "selected";}else{ echo ""; } ?>><?php echo $result1['class_name'] ?></option>
                                                            
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="updateQuiz" class="btn btn-primary" value="Update">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <a onclick="return confirm('Are you sure to delete ?')" href="deletequiz.php?quiz_id=<?php echo $result['quiz_id'] ?>&quiz_file=<?php echo $result['quiz_file'] ?>" class="btn btn-danger">Delete</a>
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