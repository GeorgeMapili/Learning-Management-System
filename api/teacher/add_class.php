<?php

require_once('../../vendor/autoload.php');

use config\Database;
use core\teacher\Main;

$db = new Database();
$dbconn = $db->connect();

$main = new Main($dbconn);

$length = 10;
$classCode =  substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 1, $length);



$main->teacher_id = $_POST['id_teacher'];
$main->teacher_name = $_POST['fullname_teacher'];
$main->class_name = trim(htmlspecialchars($_POST['class_name']));
$main->class_description = trim(htmlspecialchars($_POST['class_description']));
$main->class_yearlvl = $_POST['class_yearlvl'];
$main->class_code = $classCode;

if(!empty($main->class_name) && !empty($main->class_description) && !empty($main->class_yearlvl)){

    $records = $main->addClass();

    if($records){

        echo json_encode($records);

    }else{
        echo json_encode(
        array("message" => "Failed to add class.")
    );
    }

}else{
    echo "Can't add class";
}

