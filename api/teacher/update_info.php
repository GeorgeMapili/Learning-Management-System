<?php

session_start();
require_once('../../vendor/autoload.php');

use config\Database;
use core\teacher\Teacher;

$db = new Database();
$dbconn = $db->connect();

$teacher = new Teacher($dbconn);

$teacher->teacher_id = $_POST['teacher_id'];
$teacher->first_name = trim(htmlspecialchars($_POST['first_name']));
$teacher->last_name = trim(htmlspecialchars($_POST['last_name']));
$teacher->email = trim(htmlspecialchars($_POST['email']));
$teacher->fullname = $teacher->first_name. " ". $teacher->last_name;

// Regex if name have integers

if(!preg_match("/^[a-zA-Z'-]+$/", $teacher->first_name)){
    header("location:../../teacher/profile.php");
    exit;
}else if(!preg_match("/^[a-zA-Z'-]+$/", $teacher->last_name)){
    header("location:../../teacher/profile.php");
    exit;
}else if (!filter_var($teacher->email, FILTER_VALIDATE_EMAIL)) {
    header("location:../../teacher/profile.php");
    exit;
}else{

    $records = $teacher->updateTeacherInfo();
    $teacher->updateMessageName();
    $teacher->updateContactName();

    $_SESSION['teacher_fname'] = $teacher->first_name;
    $_SESSION['teacher_lname'] = $teacher->last_name;
    $_SESSION['teacher_email'] = $teacher->email;

    if($records){

        echo "true";

    }else{

        echo "false";

    }

}