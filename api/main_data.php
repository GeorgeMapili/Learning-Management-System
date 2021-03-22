<?php

header('Content-type:application/json');

session_start();

$id_student =  $_SESSION['id'];
$fname_student =  $_SESSION['fname'];
$lname_student = $_SESSION['lname'];
$img_student = $_SESSION['image'];
$email_student = $_SESSION['email'];


$arr = array(
    "id_student" => $id_student,
    "fname_student" => $fname_student,
    "lname_student" => $lname_student,
    "img_student" => $img_student,
    "email_student" => $email_student
);

echo json_encode($arr);
