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

if(!isset($_GET['downloadable_id'])){
    header("location:dashboard.php");
    exit;
}

$downloadable_id = $_GET['downloadable_id'];
$downloadable_file = $_GET['downloadable_file'];

$sql = "DELETE FROM downloadables WHERE downloadable_id = :downloadable_id";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":downloadable_id", $downloadable_id, PDO::PARAM_INT);

if($stmt->execute()){

    unlink("../assets/download/$downloadable_file");

    header("location:downloadable.php?success=downloadable_deleted_successfully");
    exit;
}
