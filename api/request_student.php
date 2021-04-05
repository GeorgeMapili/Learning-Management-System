<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../vendor/autoload.php');

use config\Database;
use core\student\Request;

$db = new Database();
$dbconn = $db->connect();

$request = new Request($dbconn);

$request->student_name = $_POST['student_name'];

$records = $request->getRequest();

if(is_array($records) && count($records) > 0){

    echo json_encode($records);

}else{
    
    echo json_encode(
    array("message" => "No Request.")
);

}