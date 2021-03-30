<?php

if(!isset($_GET['class_id']) && !isset($_GET['post_id'])){
    header("location:home.php");
    exit;
}