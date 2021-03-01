<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once('../vendor/autoload.php');

use config\Database;
use core\student\Register;
use helper\StudentValidation;

$database = new Database();
$dbconn = $database->connect();

$student_register = new Register($dbconn);
$student_validation = new StudentValidation();

if (isset($_POST['fname'])) {

    $student_register->id = $student_register->studentId();

    // First Name validation
    $fname_valid = $student_validation->fnameValidation($_POST['fname']);
    if ($fname_valid) {
        echo $fname_valid;
    }
    $student_register->fname = $_POST['fname'];

    // Second Name validation
    $lname_valid = $student_validation->lnameValidation($_POST['lname']);
    if ($lname_valid) {
        echo $lname_valid;
    }
    $student_register->lname = $_POST['lname'];

    // Email address validation
    $email_validation = $student_validation->emailValidation($_POST['email_address']);
    if ($email_validation) {
        echo $email_validation;
    }
    $student_register->email = $_POST['email_address'];

    // Password validation
    $password_validation = $student_validation->passwordValidation($_POST['password']);
    if ($password_validation) {
        echo $password_validation;
    }
    $hashpass = $student_validation->hashPassword($_POST['password']);
    $student_register->password = $hashpass;

    // Confirm Password Validation
    $confirm_validation = $student_validation->confirmPasswordValidation($_POST['confirm_password'], $_POST['password']);
    if ($confirm_validation) {
        echo $confirm_validation;
    }
    $student_register->confirm_password = $_POST['confirm_password'];

    // Birthday Validation
    $birthday_validation = $student_validation->birthdayValidation($_POST['birthday']);
    if ($birthday_validation) {
        echo $birthday_validation;
    }
    $student_register->birthday = $_POST['birthday'];

    // Gender Validation
    $gender_validation = $student_validation->genderValidation($_POST['gender']);
    if ($gender_validation) {
        echo $gender_validation;
    }
    $student_register->gender = $_POST['gender'];

    // Profile Validation
    if (isset($_FILES['profile'])) {
        $newName = $student_validation->imageName($_FILES['profile']['name'], $_FILES['profile']['tmp_name']);
        $student_register->profile = $newName;
    } else {
        return;
    }

    if ($student_register->registerStudent()) {
        echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Successfully Register!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
      ';
    } else {
        echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Failed to Register!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
      ';
    }
}
