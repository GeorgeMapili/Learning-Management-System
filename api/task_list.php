<?php

// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");

require_once('../vendor/autoload.php');

use config\Database;
use core\student\Tasks;

$db = new Database();
$dbconn = $db->connect();

$tasks = new Tasks($dbconn);

$tasks->class_id = $_POST['classids'];
$tasks->student_id = $_POST['student_id'];
$tasks->task_author = $_POST['task_author'];
$tasks->task_deadline = $_POST['task_deadline'];
$tasks->task_title = $_POST['task_title'];
$tasks->task_body = $_POST['task_body'];

$result = $tasks->saveTask();

if($result){

    echo "Successfully added tasks";

}else{

    echo json_encode(
        array("error" => "Error occur when adding task.")
    );

}