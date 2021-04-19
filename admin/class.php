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
            <h2 class="my-4">Class</h2>
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
        }else if(isset($_GET['success']) && $_GET['success'] == "successfully_added_class"){
        ?>
        <div class="text-center">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Successfully added class!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <?php  
        }else if(isset($_GET['success']) && $_GET['success'] == "updated_class_successfully"){
        ?>
        <div class="text-center">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Successfully updated class!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <?php  
        }else if(isset($_GET['success']) && $_GET['success'] == "class_deleted_successfully"){
        ?>
        <div class="text-center">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Successfully deleted class!</strong>
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
            Add Class
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form action="class.php" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add Class</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <label for="">Teacher</label>
                            <select class="form-control" name="teacher" id="teacher">
                                <option value="">Select Teacher</option>
                                <?php
                                $sql = "SELECT * FROM teachers";
                                $stmt = $dbconn->prepare($sql);
                                $stmt->execute();

                                while($result = $stmt->fetch(PDO::FETCH_ASSOC)):
                                ?>
                                <option value="<?php echo $result['teacher_id'] ?>"><?php echo $result['teacher_fullname'] ?></option>
                                <?php endwhile; ?>
                            </select>
                            <label for="">Class Name</label>
                            <input type="text" class="form-control" name="classname" id="classname">
                            <label for="">Class Description</label>
                            <textarea type="text" class="form-control" name="classdescription" id="classdescription" rows="2"></textarea>
                            <label for="">Select Grade</label>
                            <select class="form-control" name="classgrade" id="classgrade">
                                <option value="1st Year">First Year</option>
                                <option value="2nd Year">Second Year</option>
                                <option value="3rd Year">Third Year</option>
                                <option value="4th Year">Fourth Year</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" name="addclassbtn" value="Add Class">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php

        if(isset($_POST['addclassbtn'])){

            $classname = trim(htmlspecialchars($_POST['classname']));
            $classdescription = trim(htmlspecialchars($_POST['classdescription']));
            $classgrade = trim(htmlspecialchars($_POST['classgrade']));
            $teacher_id = trim(htmlspecialchars($_POST['teacher']));

            if($classname == "" || $classdescription == "" || $classgrade == "" || $teacher_id == ""){
                header("location:class.php?error=input_all_fields");
                ob_end_flush();
                exit;
            }

            // Get the teacher name
            $sql = "SELECT * FROM teachers WHERE teacher_id = :teacher_id";
            $stmt = $dbconn->prepare($sql);
            $stmt->bindParam(":teacher_id", $teacher_id, PDO::PARAM_INT);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $teacher_name = $result['teacher_fullname'];

            // Create a class code
            $length = 10;
            $classCode =  substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 1, $length);

            // Create a class
            $sql = "INSERT INTO classes(teacher_id, teacher_name, class_name, class_description, class_yearlvl, class_code)VALUES(:teacher_id, :teacher_name, :class_name, :class_description, :class_yearlvl, :class_code)";
            $stmt = $dbconn->prepare($sql);
            $stmt->bindParam(":teacher_id", $teacher_id, PDO::PARAM_INT);
            $stmt->bindParam(":teacher_name", $teacher_name, PDO::PARAM_STR);
            $stmt->bindParam(":class_name", $classname, PDO::PARAM_STR);
            $stmt->bindParam(":class_description", $classdescription, PDO::PARAM_STR);
            $stmt->bindParam(":class_yearlvl", $classgrade, PDO::PARAM_STR);
            $stmt->bindParam(":class_code", $classCode, PDO::PARAM_STR);

            if($stmt->execute()){
                header("location:class.php?success=successfully_added_class");
                exit;
            }

        }

        ?>

        <div style="overflow: scroll; height:400px;">
            <table class="table my-5">
                <thead>
                    <tr>
                        <th scope="col">Class ID</th>
                        <th scope="col">Class Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Teacher Name</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Code</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM classes";
                    $stmt = $dbconn->prepare($sql);
                    $stmt->execute();

                    while($result = $stmt->fetch(PDO::FETCH_ASSOC)){

                        $length = 10;
                        $updateClass =  substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 1, $length);
                    ?>
                    <tr>
                        <th scope="row"><?php echo $result['class_id'] ?></th>
                        <td><?php echo $result['class_name'] ?></td>
                        <td><?php echo $result['class_description'] ?></td>
                        <td><?php echo $result['teacher_name'] ?></td>
                        <td><?php echo $result['class_yearlvl'] ?></td>
                        <td><?php echo $result['class_code'] ?></td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#<?php echo $updateClass ?>">
                                Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="<?php echo $updateClass ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Class</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="class.php" method="POST">
                                            <input type="hidden" name="class_id" value="<?php echo $result['class_id'] ?>">
                                            <div class="modal-body">
                                                <label for="">Teacher</label>
                                                <select class="form-control" name="teacher_id">
                                                    <option value="">Select Teacher</option>
                                                    <?php
                                                    $sql = "SELECT * FROM teachers";
                                                    $stmt1 = $dbconn->prepare($sql);
                                                    $stmt1->execute();
                                                    
                                                    while($result1 = $stmt1->fetch(PDO::FETCH_ASSOC)){
                                                    ?>
                                                    <option value="<?php echo $result1['teacher_id'] ?>" <?php if($result['teacher_id'] === $result1['teacher_id']){ echo "selected"; }else{ echo "";} ?>><?php echo $result1['teacher_fullname'] ?></option>
                                                    <?php    
                                                    }
                                                    ?>
                                                </select>
                                                <label for="">Class Name</label>
                                                <input type="text" class="form-control" value="<?php echo $result['class_name'] ?>" name="classNameEdit">
                                                <label for="">Class Description</label>
                                                <textarea type="text" class="form-control" name="classDescriptionEdit" rows="2"><?php echo $result['class_description'] ?></textarea>
                                                <label for="">Select Grade</label>
                                                <select class="form-control" name="gradeEdit">
                                                    <?php
                                                    if($result['class_yearlvl'] == "1st Year"){
                                                    ?>
                                                    <option value="1st Year" selected>First Year</option>
                                                    <option value="2nd Year">Second Year</option>
                                                    <option value="3rd Year">Third Year</option>
                                                    <option value="4th Year">Fourth Year</option>
                                                    <?php    
                                                    }else if($result['class_yearlvl'] == "2nd Year"){
                                                    ?>
                                                    <option value="1st Year">First Year</option>
                                                    <option value="2nd Year" selected>Second Year</option>
                                                    <option value="3rd Year">Third Year</option>
                                                    <option value="4th Year">Fourth Year</option>
                                                    <?php
                                                    }else if($result['class_yearlvl'] == "3rd Year"){
                                                    ?>
                                                    <option value="1st Year">First Year</option>
                                                    <option value="2nd Year">Second Year</option>
                                                    <option value="3rd Year" selected>Third Year</option>
                                                    <option value="4th Year">Fourth Year</option>
                                                    <?php
                                                    }else if($result['class_yearlvl'] == "4th Year"){
                                                    ?>
                                                    <option value="1st Year">First Year</option>
                                                    <option value="2nd Year">Second Year</option>
                                                    <option value="3rd Year">Third Year</option>
                                                    <option value="4th Year" selected>Fourth Year</option>
                                                    <?php
                                                    }else{
                                                    ?>
                                                    <option value="1st year">First Year</option>
                                                    <option value="2nd year">Second Year</option>
                                                    <option value="3rd year">Third Year</option>
                                                    <option value="4th year">Fourth Year</option>
                                                    <?php    
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" class="btn btn-primary" name="updateClass" value="Update">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <a href="deleteclass.php?class_id=<?php echo $result['class_id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete ?')">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
        </div>

        <?php
        if(isset($_POST['updateClass'])){

            $class_id = $_POST['class_id'];
            $teacher_id = $_POST['teacher_id'];
            $classNameEdit = trim(htmlspecialchars($_POST['classNameEdit']));
            $classDescriptionEdit = trim(htmlspecialchars($_POST['classDescriptionEdit']));
            $gradeEdit = $_POST['gradeEdit'];

            // var_dump($class_id);
            // var_dump($teacher_id);
            // var_dump($classNameEdit);
            // var_dump($classDescriptionEdit);
            // var_dump($gradeEdit);
            // exit;

            // Get the teacher name
            $sql = "SELECT * FROM teachers WHERE teacher_id = :teacher_id";
            $stmt = $dbconn->prepare($sql);
            $stmt->bindParam(":teacher_id", $teacher_id, PDO::PARAM_INT);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $teacher_name = $result['teacher_fullname'];

            // Check all required
            if($teacher_id == "" || $classNameEdit == "" || $classDescriptionEdit == "" || $gradeEdit == ""){
                header("location:class.php?error=input_all_fields");
                exit;
            }

            // Update class
            $sql = "UPDATE classes SET teacher_id = :teacher_id, teacher_name = :teacher_name, class_name = :class_name, class_description = :class_description, class_yearlvl = :class_yearlvl WHERE class_id = :class_id";
            $stmt = $dbconn->prepare($sql);
            $stmt->bindParam(":teacher_id", $teacher_id, PDO::PARAM_INT);
            $stmt->bindParam(":teacher_name", $teacher_name, PDO::PARAM_STR);
            $stmt->bindParam(":class_name", $classNameEdit, PDO::PARAM_STR);
            $stmt->bindParam(":class_description", $classDescriptionEdit, PDO::PARAM_STR);
            $stmt->bindParam(":class_yearlvl", $gradeEdit, PDO::PARAM_STR);
            $stmt->bindParam(":class_id", $class_id, PDO::PARAM_INT);
            
            if($stmt->execute()){
                header("location:class.php?success=updated_class_successfully");
                exit;
            }

        }
        ?>

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