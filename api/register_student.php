<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once('../vendor/autoload.php');

use config\Database;
use core\student\Register;

$database = new Database();
$dbconn = $database->connect();

$student_register = new Register($dbconn);

$student_register->id = $student_register->studentId();
$student_register->fname = $_GET['fname'];
$student_register->lname = $_GET['lname'];
$student_register->email = $_GET['email'];
$student_register->password = $_GET['password'];
$student_register->confirm_password = $_GET['confirm_password'];
$student_register->birthday = $_GET['birthday'];
$student_register->gender = $_GET['gender'];
$student_register->profile = $_GET['profile'];

if ($student_register->registerStudent()) {
    echo 'Successfully Register Student';
} else {
    echo 'Failed to Register Student';
}
