<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once('../vendor/autoload.php');

use config\Database;
use core\student\Login;

$database = new Database();
$dbconn = $database->connect();

$student = new Login($dbconn);

$student->email_address = trim(htmlspecialchars($_POST['email_address']));
$student->password = trim(htmlspecialchars($_POST['password']));

if ($studLog = $student->loginStudent()) {

    echo "Success Login!";

    header("Refresh:1;url = http://localhost/lm/home.php");
} else {
    echo "Failed to Login!";
}
