<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../vendor/autoload.php');

use config\Database;
use core\student\Posts;

$db = new Database();
$dbconn = $db->connect();

$posts = new Posts($dbconn);

$posts->classId = $_POST['classids'];

$records = $posts->showAllPosts();

if(is_array($records) && count($records) > 0){

    echo json_encode($records);

}else{
    // http_response_code(404);
    echo json_encode(
    array("message" => "No Posts.")
);

}