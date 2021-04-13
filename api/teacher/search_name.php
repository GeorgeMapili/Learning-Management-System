<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../../vendor/autoload.php');

use config\Database;
use core\teacher\Subject;

$db = new Database();
$dbconn = $db->connect();

$subject = new Subject($dbconn);

$subject->student_name = "%" .$_POST['student_name']."%";
$subject->class_id = $_POST['classid'];

$records = $subject->searchName();

if(is_array($records) && count($records) > 0){

    echo json_encode($records);

}else{
    // http_response_code(404);
    echo json_encode(
    array("message" => "No Student.")
);

}