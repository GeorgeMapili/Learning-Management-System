<?php

require_once('../../vendor/autoload.php');

use config\Database;
use core\teacher\Teacher;

$db = new Database();
$dbconn = $db->connect();

$teacher = new Teacher($dbconn);

$teacher->teacher_id = $_POST['teacher_id'];
$teacher->current_password = $_POST['current_password'];
$teacher->new_password = $_POST['new_password'];
$teacher->confirm_new_password = $_POST['confirm_new_password'];

if(strlen($teacher->current_password) < 5){
    echo "current_password=need greater or equal to 5 characters";
    exit;
}

if(strlen($teacher->new_password) < 5){
    echo "new_password=need greater or equal to 5 characters";
    exit;
}

$sql = "SELECT * FROM teachers WHERE teacher_id = :teacher_id";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":teacher_id", $teacher->teacher_id,PDO::PARAM_INT);
$stmt->execute();

while($result = $stmt->fetch(PDO::FETCH_ASSOC)){

    if(password_verify($teacher->current_password,$result['teacher_password'])){

        if($teacher->new_password === $teacher->confirm_new_password){
            $new_password = password_hash($teacher->new_password, PASSWORD_DEFAULT);

            $sql = "UPDATE teachers SET teacher_password = :teacher_password WHERE teacher_id = :teacher_id";
            $stmt = $dbconn->prepare($sql);
            $stmt->bindParam(":teacher_password", $new_password, PDO::PARAM_STR);
            $stmt->bindParam(":teacher_id", $teacher->teacher_id, PDO::PARAM_INT);
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