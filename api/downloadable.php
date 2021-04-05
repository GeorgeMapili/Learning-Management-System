<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../vendor/autoload.php');

use config\Database;
use core\student\Downloadable;

$db = new Database();
$dbconn = $db->connect();

$downloadable = new Downloadable($dbconn);

$downloadable->class_id = $_POST['classid'];

$records = $downloadable->getAllDownloadables();

if(is_array($records) && count($records) > 0){

    echo json_encode($records);

}else{

    echo json_encode(array("message"=> "No Downloadable"));

}
