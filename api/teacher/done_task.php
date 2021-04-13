<?php

require_once("../../vendor/autoload.php");

use config\Database;
use core\teacher\Tasks;

$database = new Database();
$dbconn = $database->connect();
$tasks = new Tasks($dbconn);

$tasks->class_id = $_POST['class_id'];
$tasks->task_id = $_POST['task_id'];

$result = $tasks->doneTasks();

if($result){
    echo "true";
}else{
    echo "false";
}

