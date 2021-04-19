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
            <h2 class="my-4">Student</h2>
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
        }else if(isset($_GET['error']) && $_GET['error'] == "first_name_is_not_valid"){
        ?>

        <div class="text-center">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>First name is not valid!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

        <?php
        }else if(isset($_GET['error']) && $_GET['error'] == "last_name_is_not_valid"){
        ?>

        <div class="text-center">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Last name is not valid!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

        <?php
        }else if(isset($_GET['error']) && $_GET['error'] == "email_is_not_valid"){
        ?>

        <div class="text-center">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Email is not valid!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

        <?php
        }else if(isset($_GET['error']) && $_GET['error'] == "password_is_at_least_5_characters"){
        ?>

        <div class="text-center">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Password is at least 5 characters!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

        <?php
        }else if(isset($_GET['error']) && $_GET['error'] == "password_do_not_match"){
        ?>

        <div class="text-center">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Password do not match!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

        <?php
        }else if(isset($_GET['error']) && $_GET['error'] == "image_only_2MB_are_acceptable"){
        ?>

        <div class="text-center">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Image size must be less than 2MB!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

        <?php
        }else if(isset($_GET['error']) && $_GET['error'] == "please_upload_image_in_these_format_only(jpg,jpeg,png)"){
        ?>

        <div class="text-center">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Please upload image in these format only(jpg,jpeg,png)!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

        <?php
        }else if(isset($_GET['success']) && $_GET['success'] == "successfully_added_student"){
        ?>

        <div class="text-center">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Successfully Added Student!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

        <?php
        }else if(isset($_GET['success']) && $_GET['success'] == "updated_successfully"){
        ?>

        <div class="text-center">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Successfully Updated!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

        <?php
        }else if(isset($_GET['error']) && $_GET['error'] == "incorrect_password"){
        ?>

        <div class="text-center">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Incorrect Current Password!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

        <?php
        }else if(isset($_GET['success']) && $_GET['success'] == "password_updated"){
        ?>

        <div class="text-center">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Successfully Updated Password!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

        <?php
        }else if(isset($_GET['success']) && $_GET['success'] == "successfully_updated_image"){
        ?>

        <div class="text-center">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Successfully Updated Image!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

        <?php
        }else if(isset($_GET['success']) && $_GET['success'] == "student_delete_successfully"){
        ?>

        <div class="text-center">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Student Deleted Successfully!</strong>
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
            Add Student
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form method="POST" action="student.php" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Student</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">First Name</label>
                                            <input type="text" name="firstnameAdd" class="form-control" aria-describedby="emailHelp" placeholder="Enter Firstname">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Last Name</label>
                                            <input type="text" name="lastnameAdd" class="form-control" aria-describedby="emailHelp" placeholder="Enter Lastname">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email address</label>
                                    <input type="text" name="emailAdd" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="passwordAdd" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Confirm Password</label>
                                    <input type="password" name="confirmPasswordAdd" class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Birthday</label>
                                    <input type="date" name="birthdayAdd" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Gender</label>
                                    <select class="form-control" name="genderAdd">
                                        <option value="">Select a gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Profile Image</label>
                                    <input type="file" name="profileAdd" class="form-control" placeholder="Password">
                                </div>
                            
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" name="submitStudentAdd" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div style="overflow: scroll; height:400px;">
            <table class="table my-5">
                <thead>
                    <tr>
                        <th scope="col">Student ID</th>
                        <th scope="col">Profile</th>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $sql = "SELECT * FROM students";
                    $stmt = $dbconn->prepare($sql);
                    $stmt->execute();

                    while($result = $stmt->fetch(PDO::FETCH_ASSOC)) :
                        $image = $result['student_image'];
                        $modal_edit = explode(".", $image);

                        $updateInfo = substr($image, 0, 5);
                        $updatePass = substr($image, 2, 7);
                        $updateImg = substr($image, 1, 4);

                    ?>

                    <tr>
                        <th scope="row"><?php echo $result['student_id'] ?></th>
                        <td><img src="../assets/img/students/<?php echo $result['student_image'] ?>" style="border-radius:50%; border:1px solid #333;" width="50px" height="50px" alt=""></td>
                        <td><?php echo $result['student_fullname'] ?></td>
                        <td><?php echo ucwords($result['student_gender']) ?></td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#<?php echo $modal_edit[0]; ?>">
                                Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="<?php echo $modal_edit[0]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Student</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                                <form action="student.php" method="POST">
                                                    <input type="hidden" name="student_id" value="<?php echo $result['student_id'] ?>">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">First Name</label>
                                                        <input type="text" class="form-control" name="firstnameEdit" value="<?php echo $result['student_fname']  ?>" aria-describedby="emailHelp" placeholder="Enter Firstname">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Last Name</label>
                                                        <input type="text" class="form-control" name="lastnameEdit" value="<?php echo $result['student_lname'] ?>" aria-describedby="emailHelp" placeholder="Enter Lastname">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Email address</label>
                                                        <input type="text" class="form-control" name="emailEdit" value="<?php echo $result['student_email'] ?>" placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Birthday</label>
                                                        <input type="date" class="form-control" name="birthdayEdit" value="<?php echo $result['student_birthday'] ?>" placeholder="Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Gender</label>
                                                        <?php
                                                        if($result['student_gender'] == "male"){
                                                        ?>
                                                        <select class="form-control" name="genderEdit">
                                                            <option value="">Select a gender</option>
                                                            <option value="male" selected>Male</option>
                                                            <option value="female">Female</option>
                                                        </select>
                                                        <?php   
                                                        }else if($result['student_gender'] == "female"){
                                                        ?>
                                                        <select class="form-control" name="genderEdit">
                                                            <option value="">Select a gender</option>
                                                            <option value="male">Male</option>
                                                            <option value="female" selected>Female</option>
                                                        </select>
                                                        <?php    
                                                        }
                                                        ?>
                                                    </div>
                                                    <input type="submit" class="btn btn-primary" name="<?php echo $updateInfo ?>" value="Update Information">
                                                </form>

                                                <?php
                                                if(isset($_POST[$updateInfo])){

                                                    $firstnameEdit = trim(htmlspecialchars($_POST['firstnameEdit']));
                                                    $lastnameEdit = trim(htmlspecialchars($_POST['lastnameEdit']));
                                                    $emailEdit = trim(htmlspecialchars($_POST['emailEdit']));
                                                    $birthdayEdit = trim(htmlspecialchars($_POST['birthdayEdit']));
                                                    $genderEdit = trim(htmlspecialchars($_POST['genderEdit']));
                                                    $student_id = $_POST['student_id'];

                                                    $fullname = $firstnameEdit. " " .$lastnameEdit;
                                                    
                                                    // Check all required
                                                    if($firstnameEdit == "" || $lastnameEdit == "" || $emailEdit == "" || $birthdayEdit == "" || $genderEdit == "" ){
                                                        header("location:student.php?error=input_all_fields");
                                                        // ob_end_flush();
                                                        exit;
                                                    }

                                                    // First name validation
                                                    if (!preg_match("/^[a-zA-Z\'\-\040]+$/", $firstnameEdit)) {
                                                        header("location:student.php?error=first_name_is_not_valid");
                                                        exit;
                                                    }

                                                    // Last name validation
                                                    if (!preg_match("/^[a-zA-Z\'\-\040]+$/", $lastnameEdit)) {
                                                        header("location:student.php?error=last_name_is_not_valid");
                                                        exit;
                                                    }

                                                    // Email validation
                                                    if (!filter_var($emailEdit, FILTER_VALIDATE_EMAIL)) {  //Check if email is valid
                                                        header("location:student.php?error=email_is_not_valid");
                                                        exit;
                                                    }

                                                    // Update Message Name
                                                    $sql = "UPDATE messages SET message_sender_fname = :message_sender_fname WHERE message_id_sender = :message_id_sender";
                                                    $stmt = $dbconn->prepare($sql);
                                                    $stmt->bindParam(":message_sender_fname", $firstnameEdit, PDO::PARAM_STR);
                                                    $stmt->bindParam(":message_id_sender", $student_id, PDO::PARAM_INT);
                                                    $stmt->execute();

                                                    // Update Contact Name
                                                    $sql = "UPDATE contact_lists SET contact_add_name = :contact_add_name WHERE contact_add_id = :contact_add_id";
                                                    $stmt = $dbconn->prepare($sql);
                                                    $stmt->bindParam(":contact_add_name", $fullname, PDO::PARAM_STR);
                                                    $stmt->bindParam(":contact_add_id", $student_id, PDO::PARAM_INT);
                                                    $stmt->execute();

                                                    // Update Information
                                                    $sql = "UPDATE students SET student_fname = :student_fname, student_lname = :student_lname, student_fullname = :student_fullname, student_email = :student_email, student_birthday = :student_birthday, student_gender = :student_gender WHERE student_id = :student_id";
                                                    $stmt = $dbconn->prepare($sql);
                                                    $stmt->bindParam(":student_fname", $firstnameEdit, PDO::PARAM_STR);
                                                    $stmt->bindParam(":student_lname", $lastnameEdit, PDO::PARAM_STR);
                                                    $stmt->bindParam(":student_fullname", $fullname, PDO::PARAM_STR);
                                                    $stmt->bindParam(":student_email", $emailEdit, PDO::PARAM_STR);
                                                    $stmt->bindParam(":student_birthday", $birthdayEdit, PDO::PARAM_STR);
                                                    $stmt->bindParam(":student_gender", $genderEdit, PDO::PARAM_STR);
                                                    $stmt->bindParam(":student_id", $student_id, PDO::PARAM_INT);

                                                    if($stmt->execute()){
                                                        header("location:student.php?success=updated_successfully");
                                                        exit;
                                                    }

                                                }
                                                ?>

                                                <hr>

                                                <form action="student.php" method="POST">
                                                    <input type="hidden" name="student_id" value="<?php echo $result['student_id'] ?>">
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Current Password</label>
                                                        <input type="password" class="form-control" name="passwordEdit">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">New Password</label>
                                                        <input type="password" class="form-control" name="newPasswordEdit">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Confirm New Password</label>
                                                        <input type="password" class="form-control" name="confirmNewPasswordEdit">
                                                    </div>
                                                    <input type="submit" class="btn btn-primary" name="<?php echo $updatePass ?>" value="Update Password">
                                                </form>

                                                <?php
                                                if(isset($_POST[$updatePass])){

                                                    $student_id = trim(htmlspecialchars($_POST['student_id']));
                                                    $passwordEdit = trim(htmlspecialchars($_POST['passwordEdit']));
                                                    $newPasswordEdit = trim(htmlspecialchars($_POST['newPasswordEdit']));
                                                    $confirmNewPasswordEdit = trim(htmlspecialchars($_POST['confirmNewPasswordEdit']));

                                                    // Check all required
                                                    if($passwordEdit == "" || $newPasswordEdit == "" || $confirmNewPasswordEdit == ""){
                                                        header("location:student.php?error=input_all_fields");
                                                        exit;
                                                    }



                                                    $sql = "SELECT * FROM students WHERE student_id = :student_id";
                                                    $stmt = $dbconn->prepare($sql);
                                                    $stmt->bindParam(":student_id", $student_id, PDO::PARAM_INT);
                                                    $stmt->execute();

                                                    while($result1 = $stmt->fetch(PDO::FETCH_ASSOC)){

                                                        if(password_verify($passwordEdit, $result1['student_password'])){

                                                            // Check if password is greater than 4
                                                            if(strlen($newPasswordEdit) < 5){
                                                                header("location:student.php?error=password_is_at_least_5_characters");
                                                                exit;
                                                            }

                                                            if($newPasswordEdit === $confirmNewPasswordEdit){

                                                                $hashpass = password_hash($newPasswordEdit, PASSWORD_DEFAULT);

                                                                $sql = "UPDATE students SET student_password = :student_password WHERE student_id = :student_id";
                                                                $stmt = $dbconn->prepare($sql);
                                                                $stmt->bindParam(":student_password", $hashpass, PDO::PARAM_STR);
                                                                $stmt->bindParam(":student_id", $student_id, PDO::PARAM_INT);
                                                                
                                                                if($stmt->execute()){
                                                                    header("location:student.php?success=password_updated");
                                                                    exit;
                                                                }

                                                            }else{
                                                                header("location:student.php?error=password_do_not_match");
                                                                exit;
                                                            }
                                                            
                                                        }else{
                                                            header("location:student.php?error=incorrect_password");
                                                            exit;
                                                        }

                                                    }

                                                }
                                                ?>
                                                <hr>

                                                <form action="edit_img.php" method="post" enctype="multipart/form-data">
                                                    <input type="hidden" name="student_id" value="<?php echo $result['student_id'] ?>">
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Profile Image</label>
                                                        <input type="file" class="form-control" name="profileImageEdit">
                                                    </div>
                                                    <input type="submit" class="btn btn-primary" name="<?php echo $updateImg ?>" value="Update Image">
                                                </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a onclick="return confirm('Are you sure to delete ?')" href="deletestudent.php?student_id=<?php echo $result['student_id'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
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

<?php

if(isset($_POST['submitStudentAdd'])){
    
    $firstnameAdd = trim(htmlspecialchars($_POST['firstnameAdd']));
    $lastnameAdd = trim(htmlspecialchars($_POST['lastnameAdd']));
    $emailAdd = trim(htmlspecialchars($_POST['emailAdd']));
    $passwordAdd = trim(htmlspecialchars($_POST['passwordAdd']));
    $confirmPasswordAdd = trim(htmlspecialchars($_POST['confirmPasswordAdd']));
    $birthdayAdd = trim(htmlspecialchars($_POST['birthdayAdd']));
    $genderAdd = trim(htmlspecialchars($_POST['genderAdd']));
    $profileAdd = $_FILES['profileAdd'];

    $fullname = $firstnameAdd. " ". $lastnameAdd;

    $length = 10;
    $newImagName =  substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 1, $length);

    $profileSize = $profileAdd['size'];
    $tmp_name = $profileAdd['tmp_name'];
    $imgType = $profileAdd['type'];
    $ext = explode("/", $imgType);

    $extName = $ext[1];

    $newImagName.= ".".$extName;

    // Check all required
    if($firstnameAdd == "" || $lastnameAdd == "" || $emailAdd == "" || $passwordAdd == "" || $confirmPasswordAdd == "" || $birthdayAdd == "" || $genderAdd == "" || $profileAdd == ""){
        header("location:student.php?error=input_all_fields");
        ob_end_flush();
        exit;
    }

    // First name validation
    if (!preg_match("/^[a-zA-Z\'\-\040]+$/", $firstnameAdd)) {
        header("location:student.php?error=first_name_is_not_valid");
        exit;
    }

    // Last name validation
    if (!preg_match("/^[a-zA-Z\'\-\040]+$/", $lastnameAdd)) {
        header("location:student.php?error=last_name_is_not_valid");
        exit;
    }

    // Email validation
    if (!filter_var($emailAdd, FILTER_VALIDATE_EMAIL)) {  //Check if email is valid
        header("location:student.php?error=email_is_not_valid");
        exit;
    }

    // Password Validation
    if (strlen($passwordAdd) < 5) {
        header("location:student.php?error=password_is_at_least_5_characters");
        exit;
    }

    // Confirm Password Validation
    if ($passwordAdd != $confirmPasswordAdd) {
        header("location:student.php?error=password_do_not_match");
        exit;
    }

    // Check Image size
    if ($profileSize >= 2000000) {
        header("location:student.php?error=image_only_2MB_are_acceptable");
        exit;
    }

    // Check Image extesion
    $extValid = ['png', 'jpeg', 'jpg'];
    if(!in_array($extName, $extValid)){
        header("location:student.php?error=please_upload_image_in_these_format_only(jpg,jpeg,png)");
        exit;
    }

    // Generate a student id
    $year = date('Y');
    $rand = 0;
    for ($i = 0; $i < 9; $i++) {
        $rand .= mt_rand(0, 9);
    }

    $student_id = "$year" . "$rand";

    // Hash the password
    $hashpass = password_hash($passwordAdd, PASSWORD_DEFAULT);

    // Create a student
    $sql = "INSERT INTO students(student_id, student_fname, student_lname, student_fullname, student_email, student_password, student_birthday, student_gender, student_image)VALUES(:student_id, :student_fname, :student_lname, :student_fullname, :student_email, :student_password, :student_birthday, :student_gender, :student_image)";
    $stmt = $dbconn->prepare($sql);
    $stmt->bindParam(":student_id", $student_id, PDO::PARAM_INT);
    $stmt->bindParam(":student_fname", $firstnameAdd, PDO::PARAM_STR);
    $stmt->bindParam(":student_lname", $lastnameAdd, PDO::PARAM_STR);
    $stmt->bindParam(":student_fullname", $fullname, PDO::PARAM_STR);
    $stmt->bindParam(":student_email", $emailAdd, PDO::PARAM_STR);
    $stmt->bindParam(":student_password", $hashpass, PDO::PARAM_STR);
    $stmt->bindParam(":student_birthday", $birthdayAdd, PDO::PARAM_STR);
    $stmt->bindParam(":student_gender", $genderAdd, PDO::PARAM_STR);
    $stmt->bindParam(":student_image", $newImagName, PDO::PARAM_STR);

    if($stmt->execute()){

        // Upload the image
        $target_directory = "../assets/img/students/";

        $target_file = $target_directory . $newImagName;

        move_uploaded_file($tmp_name, $target_file);

        header("location:student.php?success=successfully_added_student");
        exit;

    }
    

}

?>

</body>

</html>