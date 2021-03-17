<?php

session_start();

require_once('vendor/autoload.php');

use config\Database;

$db = new Database();

$dbconn = $db->connect();

if (!isset($_SESSION['fname']) && !isset($_SESSION['lname'])) {
    header("location:login.php");
    exit;
}

if (!isset($_GET['delete_user_id']) && !isset($_GET['delete_add_id'])) {
    header("location:home.php");
    exit;
} else {

    $sql = "DELETE FROM contact_lists WHERE contact_user_id = :user_id AND contact_add_id = :add_id";
    $stmt = $dbconn->prepare($sql);
    $stmt->bindParam(":user_id", $_GET['delete_user_id'], PDO::PARAM_INT);
    $stmt->bindParam(":add_id", $_GET['delete_add_id'], PDO::PARAM_INT);
    $stmt->execute();

    // live message
    unset($_SESSION['contact_add_id']);
    unset($_SESSION['contact_add_img']);
    unset($_SESSION['contact_add_name']);

    header("location:message.php");
    exit;
}
