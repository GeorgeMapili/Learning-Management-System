<?php

if(!isset($_GET['class_id']) && !isset($_GET['task_id'])){
    header("location:myclass.php");
    exit;
}

use config\Database;

require_once("../vendor/autoload.php");

$database = new Database();
$dbconn = $database->connect();

$class_id = $_GET['class_id'];
$task_id = $_GET['task_id'];

$sql = "DELETE FROM tasks WHERE task_id = :task_id AND class_id = :class_id";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":task_id", $task_id, PDO::PARAM_INT);
$stmt->bindParam(":class_id", $class_id, PDO::PARAM_INT);

if($stmt->execute()){
    header("location:main.php?id=$class_id");
    exit;
}