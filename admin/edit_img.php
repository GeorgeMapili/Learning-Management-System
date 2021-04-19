<?php

session_start();

require_once("../vendor/autoload.php");

use config\Database;

$db = new Database();
$dbconn = $db->connect();

if(!isset($_SESSION['admin_id']) && !isset($_SESSION['admin_name'])){
    header("location:index.php");
    exit;
}

$student_id = $_POST['student_id'];
$profileImageEdit = $_FILES['profileImageEdit'];

$length = 10;
$newImagName =  substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 1, $length);

$profileSize = $profileImageEdit['size'];
$tmp_name = $profileImageEdit['tmp_name'];
$imgType = $profileImageEdit['type'];
$ext = explode("/", $imgType);

$extName = $ext[1];

$newImagName.= ".".$extName;

// Check all required
if($profileImageEdit == ""){
    header("location:student.php?error=input_all_fields");
    // ob_end_flush();
    exit;
}

// Check Image size
if ($profileSize >= 2000000) {
    header("location:student.php?error=image_only_2MB_are_acceptable");
    exit;
}

// Check Image extesion
$extValid = ['png', 'jpeg', 'jpg'];
if(!in_array($extName, $extValid)){
    header("location:student.php?error=please_upload_image_in_these_format_only(jpg,jpeg,png)");
    exit;
}

// Unlink the current image
$sql = "SELECT * FROM students WHERE student_id = :student_id";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":student_id", $student_id, PDO::PARAM_INT);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

$current_name = $result['student_image'];

unlink('../assets/img/students/' . $current_name);

// Update the new image
$sql = "UPDATE students SET student_image = :student_image WHERE student_id = :student_id";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":student_image", $newImagName, PDO::PARAM_STR);
$stmt->bindParam(":student_id", $student_id, PDO::PARAM_INT);
$stmt->execute();

// Update Message Image
$image = 'assets/img/students/'. $newImagName;

$sql = "UPDATE messages SET message_sender_image = :message_sender_image WHERE message_id_sender = :message_id_sender";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":message_sender_image", $$image, PDO::PARAM_STR);
$stmt->bindParam(":message_id_sender", $student_id, PDO::PARAM_INT);
$stmt->execute();

// Update Image ContactList
$sql = "UPDATE contact_lists SET contact_image = :contact_image WHERE contact_add_id = :contact_add_id";
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(":contact_image", $image, PDO::PARAM_STR);
$stmt->bindParam(":contact_add_id", $student_id, PDO::PARAM_INT);
$stmt->execute();

// Upload new image
move_uploaded_file($tmp_name, '../assets/img/students/'. $newImagName);

header("location:student.php?success=successfully_updated_image");
exit;