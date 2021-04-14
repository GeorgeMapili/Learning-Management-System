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

if(!isset($_GET['class_id']) && !isset($_GET['quiz_id']) && !isset($_GET['file_name'])){
    header("location:myclass.php");
    exit;
}

$class_id = $_GET['class_id'];
$quiz_id = $_GET['quiz_id'];
$file_name = $_GET['file_name'];

$sql = "DELETE FROM quiz WHERE quiz_id = :quiz_id AND quiz_class_id = :quiz_class_id";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":quiz_id", $quiz_id, PDO::PARAM_INT);
$stmt->bindParam(":quiz_class_id", $class_id, PDO::PARAM_INT);

if($stmt->execute()){

    unlink("../assets/quiz/$file_name");

    header("location:quiz.php?id=$class_id");
    exit;
}