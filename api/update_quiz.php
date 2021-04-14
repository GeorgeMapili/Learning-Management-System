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

$assignment_id = $_POST['assignment_id_task'];
$student_id = $_POST['student_id'];

$sql= "SELECT * FROM quiz_submission WHERE quiz_id = :assignment_id AND student_id = :student_id";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":assignment_id", $assignment_id, PDO::PARAM_INT);
$stmt->bindParam(":student_id", $student_id, PDO::PARAM_INT);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);
$file_name = $result['quiz_submission_file'];

echo $file_name;

unlink('../assets/quiz_submission/'. $file_name);

$records = $quiz->updateQuiz();

if($records){

    move_uploaded_file($_FILES['file']['tmp_name'], '../assets/quiz_submission/'. $img);
    // if($_FILES['file']['error'] > 0){
    //     echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    //   }else{
    //     if(move_uploaded_file($_FILES['file']['tmp_name'], '../assets/assignment_submission/'. $_FILES['file']['name'])){
    //       echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //               <strong>Successfully Submitted Assignment!</strong>
    //               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //               <span aria-hidden="true">&times;</span>
    //               </button>
    //             </div>
    //             ';
    //     }
    //   }

              echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Successfully Submitted Assignment!</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                ';

}else{

  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Successfully Submitted Assignment!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        ';

}
