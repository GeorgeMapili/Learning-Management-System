<?php

require_once('../vendor/autoload.php');

use config\Database;
use core\student\Assignment;

$db = new Database();
$dbconn = $db->connect();

$assignment = new Assignment($dbconn);

$assignment->assignment_id = $_POST['assignment_id'];
$assignment->student_id = $_POST['student_id'];

$records = $assignment->duplicateAssignment();

if($records){

    echo "true";

}else{

    echo "false";

}
