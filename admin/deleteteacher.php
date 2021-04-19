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

if(!isset($_GET['teacher_id'])){
    header("location:dashboard.php");
    exit;
}

$teacher_id = $_GET['teacher_id'];

$sql = "DELETE FROM teachers WHERE teacher_id = :teacher_id";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":teacher_id", $teacher_id, PDO::PARAM_INT);

if($stmt->execute()){
    header("location:teacher.php?success=student_delete_successfully");
    exit;
}
