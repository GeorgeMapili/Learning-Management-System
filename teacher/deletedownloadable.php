<?php

session_start();

require_once("../vendor/autoload.php");

use config\Database;

$db = new Database();

$dbconn = $db->connect();

if(!isset($_SESSION['teacher_fname']) && !isset($_SESSION['teacher_lname'])){
    header("location:index.php");
    exit;
}

if(!isset($_GET['class_id']) && !isset($_GET['downloadable_id']) && !isset($_GET['file_name'])){
    header("location:myclass.php");
    exit;
}

$class_id = $_GET['class_id'];
$downloadable_id = $_GET['downloadable_id'];
$file_name = $_GET['file_name'];

$sql = "DELETE FROM downloadables WHERE downloadable_id = :downloadable_id AND class_id = :class_id";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":downloadable_id", $downloadable_id, PDO::PARAM_INT);
$stmt->bindParam(":class_id", $class_id, PDO::PARAM_INT);

if($stmt->execute()){

    unlink("../assets/download/$file_name");

    header("location:downloadable.php?id=$class_id");
    exit;
}