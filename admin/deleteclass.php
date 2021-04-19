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

if(!isset($_GET['class_id'])){
    header("location:dashboard.php");
    exit;
}

$class_id = $_GET['class_id'];

$sql = "DELETE FROM classes WHERE class_id = :class_id";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":class_id", $class_id, PDO::PARAM_INT);

if($stmt->execute()){
    header("location:class.php?success=class_deleted_successfully");
    exit;
}
