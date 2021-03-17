<?php

session_start();

if (!isset($_SESSION['fname']) && !isset($_SESSION['lname'])) {
    header("location:login.php");
    exit;
}

unset($_SESSION['fname']);
unset($_SESSION['lname']);
unset($_SESSION['email']);
unset($_SESSION['image']);

// live message
unset($_SESSION['contact_add_id']);
unset($_SESSION['contact_add_img']);
unset($_SESSION['contact_add_name']);

session_destroy();

header("location:login.php");
exit;
