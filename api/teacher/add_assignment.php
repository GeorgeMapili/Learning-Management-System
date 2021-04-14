<?php

require_once('../../vendor/autoload.php');

use config\Database;
use core\teacher\Assignment;

$db = new Database();
$dbconn = $db->connect();

$assignment = new Assignment($dbconn);

$length = 5;
$newImageName =  substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 1, $length);

$ext = $_FILES['file']['name'];

$ext = explode(".", $ext);

$extension = $ext[1];

$img = $newImageName. "." .$extension;

$assignment->class_id = $_POST['classid'];
$assignment->assignment_author = $_POST['teacher_name'];
$assignment->assignment_submission_file = $img;
$assignment->assignment_submission_description = $_POST['file_desc'];

$result = $assignment->addAssignment();

if($result){

    if($_FILES['file']['error'] > 0){

        echo 'Error: ' . $_FILES['file']['error'] . '<br>';

    }else{

        if(move_uploaded_file($_FILES['file']['tmp_name'], '../../assets/assignment/'. $img)){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Successfully Submitted Assignment!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                ';
        }

    }

}else{
    echo json_encode(
    array("message" => "Failed to add class.")
);
}
