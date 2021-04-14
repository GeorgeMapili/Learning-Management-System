<?php

require_once('../../vendor/autoload.php');

use config\Database;
use core\teacher\Announcement;

$db = new Database();
$dbconn = $db->connect();

$announcement = new Announcement($dbconn);

$announcement->class_id = $_POST['classid'];
$announcement->teacher_id = $_POST['id_teacher'];
$announcement->announcement_desc = $_POST['annoucement_desc'];

$result = $announcement->addAnnouncement();

if($result){
    
    echo json_encode($result);

}else{
    echo json_encode(
    array("message" => "Failed to add announcement.")
);
}
