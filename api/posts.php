<?php

// require_once('../vendor/autoload.php');

// use config\Database;
// use core\student\Login;

// $database = new Database();
// $dbconn = $database->connect();

// $post = trim(htmlspecialchars($_POST['postsContent']));
// $classid = $_POST['classid'];
// $fullname = $_POST['fullname'];

// $entryData = array(
//     'post' => 'feed',
//     'content' => $post,
//     'classid' => $classid,
//     'fullname' => $fullname
// );

// $entryData = array(
//     'post' => 'feed',
//     'content' => 'content',
//     'classid' => 'classid',
//     'fullname' => 'fullname'
// );

// // $sql = "INSERT INTO posts(class_id, post_author, post_body)VALUES(:class_id, :post_author, :post_body)";
// // $stmt = $dbconn->prepare($sql);
// // $stmt->bindParam(":class_id", $classid, PDO::PARAM_INT);
// // $stmt->bindParam(":post_author", $fullname, PDO::PARAM_STR);
// // $stmt->bindParam(":post_body", $post, PDO::PARAM_STR);
// // $stmt->execute();

// // This is our new stuff
// $context = new ZMQContext();
// $socket = $context->getSocket(ZMQ::SOCKET_PUSH, 'my pusher');
// $socket->connect("tcp://localhost:5555");

// $socket->send(json_encode($entryData));

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../vendor/autoload.php');

use config\Database;
use core\student\Posts;

$db = new Database();
$dbconn = $db->connect();

$posts = new Posts($dbconn);

$posts->postBody = trim(htmlspecialchars($_POST['postsContent']));
$posts->classId = $_POST['classid'];
$posts->postAuthor = $_POST['fullname'];
$posts->postImage = $_POST['student_img'];
$posts->postDate = date("F j, Y g:i a");
$posts->post_date = date("Y-m-d");
$posts->post_time = date("H:i:s");

$records = $posts->savePosts();

$entryData = array(
    'post' => 'feed',
    'content' => trim(htmlspecialchars($_POST['postsContent'])),
    'classid' => $_POST['classid'],
    'fullname' => $_POST['fullname'],
    'img' => $_POST['student_img'],
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