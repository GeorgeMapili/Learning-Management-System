<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once('../../vendor/autoload.php');

use config\Database;
use core\teacher\Login;

$database = new Database();
$dbconn = $database->connect();

$teacher = new Login($dbconn);

$teacher->email = trim(htmlspecialchars($_POST['email']));
$teacher->password = trim(htmlspecialchars($_POST['password']));

$default = '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Successfully Login!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';

$data['default'] = $default;

if ($studLog = $teacher->loginTeacher()) {
    $data['answer'] = '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Successfully Login!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
} else {
    $data['answer'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Incorrect Credentials!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
}

echo json_encode($data);
