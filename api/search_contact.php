<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../vendor/autoload.php');

use config\Database;
use core\student\AddContact;

$db = new Database();
$dbconn = $db->connect();

$addcontact = new AddContact($dbconn);

$addcontact->contact_name = trim(htmlspecialchars($_POST['searchbar']));
$addcontact->contact_name = "%".$_POST['searchbar']."%";
$addcontact->contact_id = $_POST['id_sender'];

$name = $addcontact->searchName();

if(!empty($name)){

    echo json_encode($name);

}else{

    echo json_encode(
    array("message" => "No Result Found.")
    );

}