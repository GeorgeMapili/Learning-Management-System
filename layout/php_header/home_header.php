<?php
session_start();

if (isset($_SESSION['fname']) && isset($_SESSION['lname'])) {
    header("location:home.php");
    exit;
}
