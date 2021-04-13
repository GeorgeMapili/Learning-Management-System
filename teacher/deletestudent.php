<?php
session_start();

if(!isset($_SESSION['teacher_fname']) && !isset($_SESSION['teacher_lname'])){
    header("location:index.php");
    exit;
}

if(!isset($_GET['student_id']) && !isset($_GET['class_id'])){
    header("location:myclass.php");
    exit;
}

use config\Database;

require_once("../vendor/autoload.php");

$database = new Database();
$dbconn = $database->connect();

$student_id = $_GET['student_id'];
$class_id = $_GET['class_id'];

$sql = "DELETE FROM class_students WHERE class_student_id = :student_id AND class_id = :class_id";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":student_id", $student_id, PDO::PARAM_INT);
$stmt->bindParam(":class_id", $class_id, PDO::PARAM_INT);

if($stmt->execute()){
    header("location:mystudents.php?id=$class_id");
    exit;
}