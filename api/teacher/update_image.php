<?php
session_start();
require_once('../../vendor/autoload.php');

use config\Database;
use core\teacher\Teacher;

$db = new Database();
$dbconn = $db->connect();

$teacher = new Teacher($dbconn);

$teacher_id = $_POST['teacher_id'];

$teacher_image = $_FILES['file']['name'];

$sql = "SELECT * FROM teachers WHERE teacher_id = :teacher_id";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":teacher_id", $teacher_id, PDO::PARAM_INT);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

$current_name = $result['teacher_image'];

unlink('../../assets/img/teachers/' . $current_name);

    if($_FILES['file']['error'] > 0){
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }else{

        $ext = explode("/",$_FILES['file']['type']);
        $length = 10;
        $newImagName =  substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 1, $length);

        $newImagName .= '.' . $ext[1]; 

        $teacher->teacher_image = $newImagName;
        $teacher->teacher_id = $_POST['teacher_id'];

        $result = $teacher->updateImage();
        $teacher->image = 'assets/img/teachers/'. $newImagName;
        $teacher->contact_image = '../assets/img/teachers/'. $newImagName;
        $teacher->updateMessageImage();
        $teacher->updateImageContactList();

        if($result){
            move_uploaded_file($_FILES['file']['tmp_name'], '../../assets/img/teachers/'. $newImagName);
            $_SESSION['teacher_image'] = $newImagName;
            echo "Successfully updated image";
        }

      }
