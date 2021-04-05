<?php

session_start();

if (!isset($_SESSION['fname']) && !isset($_SESSION['lname'])) {
    header("location:login.php");
    exit;
}

if(!isset($_GET['request_id'])){
    header("location:../home.php");
    exit;
}

use config\Database;

require_once("vendor/autoload.php");

$database = new Database();
$dbconn = $database->connect();

$request_id = $_GET['request_id'];

$sql = "DELETE FROM requests WHERE request_id = :request_id";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":request_id", $request_id, PDO::PARAM_INT);

if($stmt->execute()){
    header("location:request.php");
    exit;
}