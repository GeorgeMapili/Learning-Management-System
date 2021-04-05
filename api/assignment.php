<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../vendor/autoload.php');

use config\Database;
use core\student\Assignment;

$db = new Database();
$dbconn = $db->connect();

$assignment = new Assignment($dbconn);

$assignment->class_id = $_POST['classid'];

$records = $assignment->getClassAssignment();

if(is_array($records) && count($records) > 0){

    echo json_encode($records);

}else{

    echo json_encode(array("message"=> "No Assignment"));

}
