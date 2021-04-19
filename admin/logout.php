<?php

session_start();

if (!isset($_SESSION['admin_id']) && !isset($_SESSION['admin_name'])) {
    header("location:index.php");
    exit;
}

unset($_SESSION['admin_id']);
unset($_SESSION['admin_name']);
unset($_SESSION['admin_email']);

header("location:index.php");
exit;
