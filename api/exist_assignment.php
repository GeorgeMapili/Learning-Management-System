<?php

// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");

require_once('../vendor/autoload.php');

use config\Database;
use core\student\Assignment;

$db = new Database();
$dbconn = $db->connect();

$assignment = new Assignment($dbconn);

$assignment->assignment_id = $_POST['assignment_id'];
$assignment->student_id = $_POST['student_id'];

$records = $assignment->duplicateAssignment();

// if(is_array($records) && count($records) > 0){

//     echo json_encode($records);

// }else{

//     // echo json_encode(array("message"=>"No Duplicate"));
//     echo null;

// }

if($records){

    echo "true";

}else{

    echo "false";

}
