<?php

require_once('../vendor/autoload.php');

use config\Database;

$db = new Database();
$dbconn = $db->connect();

$class_id = $_POST['class_id'];
$student_id = $_POST['student_id'];
$teacher_id = $_POST['teacher_id'];
$student_name = $_POST['student_name'];

$sql = "INSERT INTO class_students(class_id, student_id, teacher_id, student_name)VALUES(:class_id, :student_id, :teacher_id, :student_name)";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":class_id", $class_id, PDO::PARAM_INT);
$stmt->bindParam(":student_id", $student_id, PDO::PARAM_INT);
$stmt->bindParam(":teacher_id", $teacher_id, PDO::PARAM_INT);
$stmt->bindParam(":student_name", $student_name, PDO::PARAM_STR);


if($stmt->execute()){

    echo "true";

}else{

    echo "false";

}