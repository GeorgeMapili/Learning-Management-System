<?php

session_start();

require_once("../vendor/autoload.php");

use config\Database;

$db = new Database();
$dbconn = $db->connect();

if(!isset($_SESSION['admin_id']) && !isset($_SESSION['admin_name'])){
    header("location:index.php");
    exit;
}

if(!isset($_GET['quiz_id']) && !isset($_GET['quiz_file'])){
    header("location:dashboard.php");
    exit;
}

$quiz_id = $_GET['quiz_id'];
$quiz_file = $_GET['quiz_file'];

$sql = "DELETE FROM quiz WHERE quiz_id = :quiz_id AND quiz_file = :quiz_file";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":quiz_id", $quiz_id, PDO::PARAM_INT);
$stmt->bindParam(":quiz_file", $quiz_file, PDO::PARAM_STR);

if($stmt->execute()){

    unlink("../assets/quiz/$quiz_file");

    header("location:quiz.php?success=quiz_deleted_successfully");
    exit;
}
