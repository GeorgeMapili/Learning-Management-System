<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../vendor/autoload.php');

use config\Database;
use core\student\Subject;

$db = new Database();
$dbconn = $db->connect();

$subjects = new Subject($dbconn);

$subjects->class_id = $_POST['class_id'];

$records = $subjects->getStudent();

if(is_array($records) && count($records) > 0){

    echo json_encode($records);
    
}else{
    // http_response_code(404);
    echo json_encode(
    array("message" => "No Student.")
);
}