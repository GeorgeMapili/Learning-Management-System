<?php
session_start();
require_once('../vendor/autoload.php');

use config\Database;
use core\student\Student;

$db = new Database();
$dbconn = $db->connect();

$student = new Student($dbconn);

$student_id = $_POST['student_id'];

$student_image = $_FILES['file']['name'];

$sql = "SELECT * FROM students WHERE student_id = :student_id";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":student_id", $student_id, PDO::PARAM_INT);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

$current_name = $result['student_image'];

unlink('../assets/img/students/' . $current_name);

    if($_FILES['file']['error'] > 0){
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }else{

        $ext = explode("/",$_FILES['file']['type']);
        $length = 10;
        $newImagName =  substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 1, $length);

        $newImagName .= '.' . $ext[1]; 

        $student->student_image = $newImagName;
        $student->student_id = $_POST['student_id'];

        $result = $student->updateImage();
        $student->image = 'assets/img/students/'. $newImagName;
        $student->updateMessageImage();
        $student->updateImageContactList();

        if($result){
            move_uploaded_file($_FILES['file']['tmp_name'], '../assets/img/students/'. $newImagName);
            $_SESSION['image'] = $newImagName;
            echo "Successfully updated image";
        }

      }
