<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../../vendor/autoload.php');

use config\Database;
use core\student\Posts;

$db = new Database();
$dbconn = $db->connect();

$posts = new Posts($dbconn);

$posts->postBody = trim(htmlspecialchars($_POST['postsContent']));
$posts->classId = $_POST['classid'];
$posts->postAuthor = $_POST['fullname'];
$posts->postImage = $_POST['teacher_img'];
$posts->postDate = date("F j, Y g:i a");
$posts->post_date = date("Y-m-d");
$posts->post_time = date("H:i:s");

$records = $posts->savePosts();

$entryData = array(
    'post' => 'feed',
    'content' => trim(htmlspecialchars($_POST['postsContent'])),
    'classid' => $_POST['classid'],
    'fullname' => $_POST['fullname'],
    'img' => $_POST['teacher_img'],
    'date' => $posts->postDate,
    'postid' => $records['post_id']
);

if($records){

    echo json_encode($entryData);
    
}else{
    // http_response_code(404);
    echo json_encode(
    array("message" => "No Posts.")
);
}