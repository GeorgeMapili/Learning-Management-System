<?php

require_once('../vendor/autoload.php');

use config\Database;
use core\student\Quiz;

$db = new Database();
$dbconn = $db->connect();

$quiz = new Quiz($dbconn);

$length = 5;
$newImageName =  substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 1, $length);

$ext = $_FILES['file']['name'];

$ext = explode(".", $ext);

$extension = $ext[1];

$img = $newImageName. "." .$extension;

$quiz->quiz_id = $_POST['assignment_id_task'];
$quiz->student_id = $_POST['student_id'];
$quiz->quiz_file = $img;
$quiz->quiz_description = $_POST['assignment_submission_description'];

$records = $quiz->submitQuiz();

if($records){

  if($_FILES['file']['error'] > 0){
    echo 'Error: ' . $_FILES['file']['error'] . '<br>';
  }else{
    if(move_uploaded_file($_FILES['file']['tmp_name'], '../assets/quiz_submission/'. $img)){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Successfully Submitted Assignment!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            ';
    }
  }

}else{

  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Successfully Submitted Assignment!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        ';
}
