<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../../vendor/autoload.php');

use config\Database;
use core\teacher\Tasks;

$db = new Database();
$dbconn = $db->connect();

$tasks = new Tasks($dbconn);

$tasks->class_id = $_POST['classids'];
$tasks->student_id = $_POST['student_id'];

$records = $tasks->getTasks();

if(is_array($records) && count($records) > 0){

    echo json_encode($records);

}else{
    // http_response_code(404);
    echo json_encode(
    array("message" => "No Tasks.")
);

}