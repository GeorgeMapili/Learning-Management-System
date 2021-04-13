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

if(!isset($_GET['class_id']) && !isset($_GET['student_name']) && !isset($_GET['student_id'])){
    header("location:myclass.php");
    exit;
}

$class_id = trim(htmlspecialchars($_GET['class_id']));
$student_name = trim(htmlspecialchars($_GET['student_name']));
$student_id = trim(htmlspecialchars($_GET['student_id']));

// Get the class name
$sql = "SELECT * FROM classes WHERE class_id = :class_id";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":class_id", $class_id, PDO::PARAM_INT);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

$classname = $result['class_name'];

$teacher_id = $_SESSION['teacher_id'];
$teacher_name = $_SESSION['teacher_fname']. " ". $_SESSION['teacher_lname'];


$sql = "INSERT INTO requests(class_id, class_name, student_name, student_id, teacher_id, teacher_name)VALUES(:class_id, :class_name, :student_name, :student_id, :teacher_id, :teacher_name)";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":class_id", $class_id, PDO::PARAM_INT);
$stmt->bindParam(":class_name", $classname, PDO::PARAM_STR);
$stmt->bindParam(":student_name", $student_name, PDO::PARAM_STR);
$stmt->bindParam(":student_id", $student_id, PDO::PARAM_INT);
$stmt->bindParam(":teacher_id", $teacher_id, PDO::PARAM_INT);
$stmt->bindParam(":teacher_name", $teacher_name, PDO::PARAM_STR);

if($stmt->execute()){
    header("location:mystudents.php?id=$class_id");
}else{
    header("location:myclass.php");
    exit;
}