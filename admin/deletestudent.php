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

if(!isset($_GET['student_id'])){
    header("location:dashboard.php");
    exit;
}

$student_id = $_GET['student_id'];

$sql = "DELETE FROM students WHERE student_id = :student_id";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":student_id", $student_id, PDO::PARAM_INT);

if($stmt->execute()){
    header("location:student.php?success=student_delete_successfully");
    exit;
}
