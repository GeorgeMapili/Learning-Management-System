<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../vendor/autoload.php');

use config\Database;
use core\student\Student;

$db = new Database();
$dbconn = $db->connect();

$student = new Student($dbconn);

$student->student_id = $_POST['student_id'];

$records = $student->getLatestData();

if(is_array($records) && count($records) > 0){

    echo json_encode($records);

}else{
    // http_response_code(404);
    echo json_encode(
    array("message" => "No Latest Data.")
);
}