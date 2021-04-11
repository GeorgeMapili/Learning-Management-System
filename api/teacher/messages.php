<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../../vendor/autoload.php');

use config\Database;
use core\teacher\ChatUser;

$db = new Database();
$dbconn = $db->connect();

$chatuser = new ChatUser($dbconn);

$chatuser->chat_sender_id = $_POST['id_sender'];
$chatuser->chat_receiver_id = $_POST['id_receiver'];

$records = $chatuser->getChat();

if(is_array($records) && count($records) > 0){

    echo json_encode($records);

}else{
    // http_response_code(404);
    echo json_encode(
    array("message" => "No Message.")
);
}