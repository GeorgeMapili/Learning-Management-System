<?php

require_once('../vendor/autoload.php');

use config\Database;
use core\student\Request;

$db = new Database();
$dbconn = $db->connect();

$request = new Request($dbconn);

$request->request_id = $_POST['request_id'];

$records = $request->acceptRequest();

if($records){

    echo "true";

}else{

    echo "false";

}