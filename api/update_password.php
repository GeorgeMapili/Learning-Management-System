<?php

require_once('../vendor/autoload.php');

use config\Database;
use core\student\Student;

$db = new Database();
$dbconn = $db->connect();

$student = new Student($dbconn);

$student->student_id = $_POST['student_id'];
$student->current_password = $_POST['current_password'];
$student->new_password = $_POST['new_password'];
$student->confirm_new_password = $_POST['confirm_new_password'];

if(strlen($student->current_password) < 5){
    echo "current_password=need greater or equal to 5 characters";
    exit;
}

if(strlen($student->new_password) < 5){
    echo "new_password=need greater or equal to 5 characters";
    exit;
}

$sql = "SELECT * FROM students WHERE student_id = :student_id";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":student_id", $student->student_id,PDO::PARAM_INT);
$stmt->execute();

while($result = $stmt->fetch(PDO::FETCH_ASSOC)){

    if(password_verify($student->current_password,$result['student_password'])){

        if($student->new_password === $student->confirm_new_password){
            $new_password = password_hash($student->new_password, PASSWORD_DEFAULT);

            $sql = "UPDATE students SET student_password = :student_password WHERE student_id = :student_id";
            $stmt = $dbconn->prepare($sql);
            $stmt->bindParam(":student_password", $new_password, PDO::PARAM_STR);
            $stmt->bindParam(":student_id", $student->student_id, PDO::PARAM_INT);
            $stmt->execute();

            echo "new_password=successfully changed password";
            exit;

        }else{
            echo "password_match=password do not match";
            exit;
        }

    }else{
        echo "current_password=incorrect correct password";
        exit;
    }

}