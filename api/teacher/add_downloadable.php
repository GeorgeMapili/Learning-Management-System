<?php

require_once('../../vendor/autoload.php');

use config\Database;
use core\teacher\Downloadable;

$db = new Database();
$dbconn = $db->connect();

$downloadable = new Downloadable($dbconn);

$length = 5;
$newImageName =  substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 1, $length);

$ext = $_FILES['file']['name'];

$ext = explode(".", $ext);

$extension = $ext[1];

$img = $newImageName. "." .$extension;

$downloadable->class_id = $_POST['classid'];
$downloadable->downloadable_author = $_POST['teacher_name'];
$downloadable->downloadable_file = $img;
$downloadable->downloadable_description = $_POST['file_desc'];

$result = $downloadable->addDownloadable();

if($result){

    if($_FILES['file']['error'] > 0){

        echo 'Error: ' . $_FILES['file']['error'] . '<br>';

    }else{

        if(move_uploaded_file($_FILES['file']['tmp_name'], '../../assets/download/'. $img)){
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
