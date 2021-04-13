<?php

if(!isset($_GET['class_id']) && !isset($_GET['post_id'])){
    header("location:myclass.php");
    exit;
}

use config\Database;

require_once("../vendor/autoload.php");

$database = new Database();
$dbconn = $database->connect();

$class_id = $_GET['class_id'];
$post_id = $_GET['post_id'];

$sql = "DELETE FROM posts WHERE post_id = :post_id AND class_id = :class_id";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":post_id", $post_id, PDO::PARAM_INT);
$stmt->bindParam(":class_id", $class_id, PDO::PARAM_INT);

if($stmt->execute()){
    header("location:main.php?id=$class_id");
    exit;
}