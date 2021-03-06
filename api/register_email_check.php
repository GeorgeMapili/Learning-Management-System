<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once('../vendor/autoload.php');

use config\Database;

$database = new Database();
$dbconn = $database->connect();

$email = trim(htmlspecialchars($_POST['email_address']));

$sql = "SELECT * FROM students WHERE student_email = :email";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":email", $email, PDO::PARAM_STR);
$stmt->execute();

$rowCount = $stmt->rowCount();

if ($rowCount > 0) {
    echo "false";
} else {
    echo "true";
}
