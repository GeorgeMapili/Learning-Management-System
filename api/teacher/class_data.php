<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../../vendor/autoload.php');
date_default_timezone_set("Asia/Manila");

use config\Database;
use core\teacher\Posts;

$db = new Database();
$dbconn = $db->connect();

$posts = new Posts($dbconn);

$posts->classId = $_POST['classid'];

$records = $posts->getClassData();

if($records){

    echo json_encode($records);
    
}else{
    // http_response_code(404);
    echo json_encode(
    array("message" => "No Message.")
);
}