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

if(!isset($_GET['class_id']) && !isset($_GET['announcement_id'])){
    header("location:myclass.php");
    exit;
}

$class_id = $_GET['class_id'];
$announcement_id = $_GET['announcement_id'];

$sql = "DELETE FROM announcements WHERE class_id = :class_id AND announcement_id = :announcement_id";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":class_id", $class_id, PDO::PARAM_INT);
$stmt->bindParam(":announcement_id", $announcement_id, PDO::PARAM_INT);

if($stmt->execute()){

    header("location:announcement.php?id=$class_id");
    exit;

}