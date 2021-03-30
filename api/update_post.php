<?php

require_once("../vendor/autoload.php");

use config\Database;
use core\student\Posts;

$database = new Database();
$dbconn = $database->connect();
$post = new Posts($dbconn);


$post->classId = $_POST['classid'];
$post->postId = $_POST['postid'];
$post->postBody = $_POST['contentUpdate'];

$result = $post->updatePost();

if($result){
    echo "true";
}else{
    echo "false";
}

