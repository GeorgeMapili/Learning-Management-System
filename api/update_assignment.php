<?php

require_once('../vendor/autoload.php');

use config\Database;
use core\student\Assignment;

$db = new Database();
$dbconn = $db->connect();

$assignment = new Assignment($dbconn);

$assignment->assignment_id = $_POST['assignment_id_task'];
$assignment->student_id = $_POST['student_id'];
$assignment->assignment_submission_file = $_POST['assignment_submission_file'];
$assignment->assignment_submission_description = $_POST['assignment_submission_description'];

$assignment_id = $_POST['assignment_id_task'];
$student_id = $_POST['student_id'];

$sql= "SELECT * FROM assignments_submission WHERE assignment_id = :assignment_id AND student_id = :student_id";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":assignment_id", $assignment_id, PDO::PARAM_INT);
$stmt->bindParam(":student_id", $student_id, PDO::PARAM_INT);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);
$file_name = $result['assignment_submission_file'];

echo $file_name;

unlink('../assets/assignment_submission/'. $file_name);

$records = $assignment->updateAssignment();

if($records){

    move_uploaded_file($_FILES['file']['tmp_name'], '../assets/assignment_submission/'. $_FILES['file']['name']);
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
