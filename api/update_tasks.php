<?php

require_once("../vendor/autoload.php");

use config\Database;
use core\student\Tasks;

$database = new Database();
$dbconn = $database->connect();
$tasks = new Tasks($dbconn);


$tasks->class_id = $_POST['class_id'];
$tasks->task_id = $_POST['task_id'];
$tasks->task_deadline = $_POST['task_deadline'];
$tasks->task_title = $_POST['task_title'];
$tasks->task_body = $_POST['task_body'];

$result = $tasks->updateTasks();

if($result){
    echo "true";
}else{
    echo "false";
}

