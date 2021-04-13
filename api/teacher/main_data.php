<?php

header('Content-type:application/json');

session_start();

$id_teacher =  $_SESSION['teacher_id'];
$fname_teacher =  $_SESSION['teacher_fname'];
$lname_teacher = $_SESSION['teacher_lname'];
$img_teacher = $_SESSION['teacher_image'];
$email_teacher = $_SESSION['teacher_email'];


$arr = array(
    "id_teacher" => $id_teacher,
    "fname_teacher" => $fname_teacher,
    "lname_teacher" => $lname_teacher,
    "img_teacher" => $img_teacher,
    "email_teacher" => $email_teacher
);

echo json_encode($arr);
