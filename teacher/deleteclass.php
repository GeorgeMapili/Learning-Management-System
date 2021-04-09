<?php

session_start();

require_once('../vendor/autoload.php');

use config\Database;

$db = new Database();

$dbconn = $db->connect();

if (!isset($_SESSION['teacher_id']) && !isset($_SESSION['teacher_fname'])) {
    header("location:myclass.php");
    exit;
}

if (!isset($_GET['class_id'])) {
    header("location:myclass.php");
    exit;
} else {

    $sql = "DELETE FROM classes WHERE class_id = :class_id";
    $stmt = $dbconn->prepare($sql);
    $stmt->bindParam(":class_id", $_GET['class_id'], PDO::PARAM_INT);
    $stmt->execute();

    header("location:myclass.php");
    exit;
}
