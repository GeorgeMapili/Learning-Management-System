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

if(!isset($_GET['assignment_id']) && !isset($_GET['assignment_file'])){
    header("location:dashboard.php");
    exit;
}

$assignment_id = $_GET['assignment_id'];
$assignment_file = $_GET['assignment_file'];

$sql = "DELETE FROM assignments WHERE assignment_id = :assignment_id AND assignment_file = :assignment_file";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":assignment_id", $assignment_id, PDO::PARAM_INT);
$stmt->bindParam(":assignment_file", $assignment_file, PDO::PARAM_STR);

if($stmt->execute()){

    unlink("../assets/assignment/$assignment_file");

    header("location:assignment.php?success=assignment_deleted_successfully");
    exit;
}
