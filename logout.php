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

session_destroy();

header("location:login.php");
exit;
