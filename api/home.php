<?php
session_start();

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../vendor/autoload.php');

use config\Database;
use core\student\Home;

$database = new Database();
$dbconn = $database->connect();

$home = new Home($dbconn);

$home->studentId = $_SESSION['id'];

$stud_records = $home->allClass();
$stud_count = $stud_records->rowCount();

if ($stud_count > 0) {
    $studentArr = array();
    $studentArr['body'] = array();
    $studentArr['studentCount'] = $stud_count;

    while ($row = $stud_records->fetch(PDO::FETCH_ASSOC)) {
        array_push($studentArr['body'], $row);
    }
    echo json_encode($studentArr);
} else {
    http_response_code(404);
    echo json_encode(array("message" => "No class found."));
}
