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

$entryData = array(
    'post' => 'feed',
    'content' => 'content',
    'classid' => 'classid',
    'fullname' => 'fullname'
);

// $sql = "INSERT INTO posts(class_id, post_author, post_body)VALUES(:class_id, :post_author, :post_body)";
// $stmt = $dbconn->prepare($sql);
// $stmt->bindParam(":class_id", $classid, PDO::PARAM_INT);
// $stmt->bindParam(":post_author", $fullname, PDO::PARAM_STR);
// $stmt->bindParam(":post_body", $post, PDO::PARAM_STR);
// $stmt->execute();

// This is our new stuff
$context = new ZMQContext();
$socket = $context->getSocket(ZMQ::SOCKET_PUSH, 'my pusher');
$socket->connect("tcp://localhost:6379");

$socket->send(json_encode($entryData));