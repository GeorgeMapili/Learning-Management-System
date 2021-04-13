<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../../vendor/autoload.php');

use config\Database;
use core\teacher\Posts;

$db = new Database();
$dbconn = $db->connect();

$posts = new Posts($dbconn);

$posts->classId = $_POST['classid'];
$posts->postId = $_POST['postid'];

$result = $posts->getSingleContent();

if(is_array($result) && count($result) > 0){

    echo json_encode($result);

}else{

    echo json_encode(
        array("message" => "No Posts To Be Updated.")
    );

}