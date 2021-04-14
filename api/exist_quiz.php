<?php

require_once('../vendor/autoload.php');

use config\Database;
use core\student\Quiz;

$db = new Database();
$dbconn = $db->connect();

$quiz = new Quiz($dbconn);

$quiz->quiz_id = $_POST['quiz_id'];
$quiz->student_id = $_POST['student_id'];

$records = $quiz->duplicateQuiz();

if($records){

    echo "true";

}else{

    echo "false";

}
