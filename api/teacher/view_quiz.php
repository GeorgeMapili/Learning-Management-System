<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../../vendor/autoload.php');

use config\Database;
use core\teacher\Quiz;

$db = new Database();
$dbconn = $db->connect();

$quiz = new Quiz($dbconn);

$quiz->quiz_id = $_POST['quiz_id'];
$quiz->class_id = $_POST['classid'];

$result = $quiz->getAllQuizSubmission();

if($result){

    echo json_encode($result);

}else{
    echo json_encode(
    array("message" => "Failed to add class.")
);
}
