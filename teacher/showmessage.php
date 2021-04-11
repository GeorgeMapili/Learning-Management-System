<?php

session_start();

if (!isset($_SESSION['teacher_fname']) && !isset($_SESSION['teacher_lname'])) {
    header("location:index.php");
    exit;
}

if (!isset($_GET['id']) && !isset($_GET['img']) && !isset($_GET['name'])) {
    header("location:myclass.php");
    exit;
}


$_SESSION['contact_add_id'] = $_GET['id'];
$_SESSION['contact_add_img'] = $_GET['img'];
$_SESSION['contact_add_name'] = $_GET['name'];

header("location:message.php");
exit;
