<?php

session_start();

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once('../vendor/autoload.php');

use config\Database;
use core\student\Home;

$database = new Database();
$dbconn = $database->connect();

$homepage = new Home($dbconn);

// Class code
$classcode = $homepage->class_code = trim(htmlspecialchars($_POST['class_code']));
$homepage->studentId = $_SESSION['id'];
$homepage->student_name = $_SESSION['fname'] . " " . $_SESSION['lname'];

$checkCode = $homepage->validateClassCode($classcode);

if ($checkCode === true) {
  echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Successfully Join Class!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
  ';
} else if ($checkCode === "already_join_the_class") {
  echo '
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Already joined the class!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
  </div>
';
} else if ($checkCode === false) {
  echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Class Code don\'t exists!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
  ';
}
