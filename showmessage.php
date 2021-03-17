<?php

session_start();

if (!isset($_SESSION['fname']) && !isset($_SESSION['lname'])) {
    header("location:login.php");
    exit;
}

if (!isset($_GET['id']) && !isset($_GET['img']) && !isset($_GET['name'])) {
    header("location:login.php");
    exit;
}


$_SESSION['contact_add_id'] = $_GET['id'];
$_SESSION['contact_add_img'] = $_GET['img'];
$_SESSION['contact_add_name'] = $_GET['name'];

header("location:message.php");
exit;
