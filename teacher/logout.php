<?php

session_start();

if (!isset($_SESSION['teacher_fname']) && !isset($_SESSION['teacher_lname'])) {
    header("location:index.php");
    exit;
}

unset($_SESSION['teacher_fname']);
unset($_SESSION['teacher_lname']);
unset($_SESSION['teacher_email']);
unset($_SESSION['teacher_image']);

// Message
unset($_SESSION['contact_add_id']);
unset($_SESSION['contact_add_img']);
unset($_SESSION['contact_add_name']);

header("location:index.php");
exit;
