<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../../vendor/autoload.php');

use config\Database;
use core\admin\Login;

$database = new Database();
$dbconn = $database->connect();

// Get All students
$sql = "SELECT * FROM students";
$stmt = $dbconn->prepare($sql);
$stmt->execute();

$studentCount = $stmt->rowCount();

$data['student'] = $studentCount;

// Get all teachers
$sql = "SELECT * FROM teachers";
$stmt = $dbconn->prepare($sql);
$stmt->execute();

$teacherCount = $stmt->rowCount();

$data['teacher'] = $teacherCount;

// Get all class
$sql = "SELECT * FROM classes";
$stmt = $dbconn->prepare($sql);
$stmt->execute();

$classCount = $stmt->rowCount();

$data['class'] = $classCount;

// Get all active students
$sql = "SELECT DISTINCT student_name FROM class_students";
$stmt = $dbconn->prepare($sql);
$stmt->execute();

$activeStudents = $stmt->rowCount();

$data['active_students'] = $activeStudents;

// Get all the male students
$male_gender = "male";
$sql = "SELECT * FROM students WHERE student_gender =:male";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":male", $male_gender, PDO::PARAM_STR);
$stmt->execute();

$male_students = $stmt->rowCount();

$data['male_students'] = $male_students;

// Get all the female students
$female_gender = "female";
$sql = "SELECT * FROM students WHERE student_gender =:female";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":female", $female_gender, PDO::PARAM_STR);
$stmt->execute();

$female_students = $stmt->rowCount();

$data['female_students'] = $female_students;

// Get all the male teachers
$male = "male";
$sql = "SELECT * FROM teachers WHERE teacher_gender =:male";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":male", $male, PDO::PARAM_STR);
$stmt->execute();

$male_teacher = $stmt->rowCount();

$data['male_teacher'] = $male_teacher;

// Get all the female teachers
$female = "female";
$sql = "SELECT * FROM teachers WHERE teacher_gender =:female";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":female", $female, PDO::PARAM_STR);
$stmt->execute();

$female_teacher = $stmt->rowCount();

$data['female_teacher'] = $female_teacher;

echo json_encode($data);