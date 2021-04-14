<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../../vendor/autoload.php');

use config\Database;
use core\teacher\Assignment;

$db = new Database();
$dbconn = $db->connect();

$assignment = new Assignment($dbconn);

$assignment->assignment_id = $_POST['assignment_id'];
$assignment->class_id = $_POST['classid'];

$result = $assignment->getAllAssignmentSubmission();

if($result){

    echo json_encode($result);

}else{
    echo json_encode(
    array("message" => "Failed to add class.")
);
}
