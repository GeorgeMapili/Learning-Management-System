<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../../vendor/autoload.php');

use config\Database;
use core\teacher\Announcement;

$db = new Database();
$dbconn = $db->connect();

$announcement = new Announcement($dbconn);

$announcement->class_id = $_POST['classid'];
$announcement->teacher_id = $_POST['id_teacher'];

$records = $announcement->getAllAnnouncement();

if(is_array($records) && count($records) > 0){

    echo json_encode($records);

}else{
    // http_response_code(404);
    echo json_encode(
    array("message" => "No Announcement.")
);

}