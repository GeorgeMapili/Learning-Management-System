<?php

session_start();
require_once('../vendor/autoload.php');

use config\Database;
use core\student\Student;

$db = new Database();
$dbconn = $db->connect();

$student = new Student($dbconn);

$student->student_id = $_POST['student_id'];
$student->first_name = trim(htmlspecialchars($_POST['first_name']));
$student->last_name = trim(htmlspecialchars($_POST['last_name']));
$student->email = trim(htmlspecialchars($_POST['email']));
$student->fullname = $student->first_name. " ". $student->last_name;

// Regex if name have integers

if(!preg_match("/^[a-zA-Z'-]+$/", $student->first_name)){
    header("location:../profile.php");
    exit;
}else if(!preg_match("/^[a-zA-Z'-]+$/", $student->last_name)){
    header("location:../profile.php");
    exit;
}else if (!filter_var($student->email, FILTER_VALIDATE_EMAIL)) {
    header("location:../profile.php");
    exit;
}else{

    $records = $student->updateStudentInfo();
    $student->updateMessageName();
    $student->updateContactName();

    $_SESSION['fname'] = $student->first_name;
    $_SESSION['lname'] = $student->last_name;
    $_SESSION['email'] = $student->email;

    if($records){

        echo "true";

    }else{

        echo "false";

    }

}