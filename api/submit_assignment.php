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

$records = $assignment->submitAssignment();

if($records){

  if($_FILES['file']['error'] > 0){
    echo 'Error: ' . $_FILES['file']['error'] . '<br>';
  }else{
    if(move_uploaded_file($_FILES['file']['tmp_name'], '../assets/assignment_submission/'. $_FILES['file']['name'])){
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
