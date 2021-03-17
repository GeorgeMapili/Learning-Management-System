<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../vendor/autoload.php');

use config\Database;
use core\student\AddContact;

$db = new Database();
$dbconn = $db->connect();

$addcontact = new AddContact($dbconn);

$addcontact->contact_id = $_POST['id_sender'];

$allContact = $addcontact->showContact();

if(!empty($allContact)){

    echo json_encode($allContact);

}else{

    echo json_encode(
    array("message" => "Empty Contact.")
    );

}