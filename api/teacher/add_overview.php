<?php

require_once('../../vendor/autoload.php');
date_default_timezone_set("Asia/Manila");

use config\Database;
use core\teacher\Subject;

$db = new Database();
$dbconn = $db->connect();

$subject = new Subject($dbconn);

$subject->class_id = $_POST['classid'];
$subject->class_overview = trim(htmlspecialchars($_POST['sub_desc']));

$records = $subject->addOverview();

if($records){

    echo json_encode($records);
    
}else{
    // http_response_code(404);
    echo json_encode(
    array("message" => "false.")
);
}