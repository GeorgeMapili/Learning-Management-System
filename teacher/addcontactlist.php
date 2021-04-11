<?php

session_start();

require_once('../vendor/autoload.php');

use config\Database;

$db = new Database();

$dbconn = $db->connect();

if (!isset($_SESSION['teacher_fname']) && !isset($_SESSION['teacher_lname'])) {
    header("location:index.php");
    exit;
}

if (!isset($_GET['id']) && !isset($_GET['userid'])) {
    header("location:message.php");
    exit;
} else {

    $sql = "SELECT * FROM contact_lists WHERE contact_user_id = :user_id AND contact_add_id = :add_id";
    $stmt = $dbconn->prepare($sql);
    $stmt->bindParam(":user_id", $_GET['userid'], PDO::PARAM_INT);
    $stmt->bindParam(":add_id", $_GET['id'], PDO::PARAM_INT);
    $stmt->execute();

    $currentList = $stmt->rowCount();

    if ($currentList > 0) {
        header("location:message.php");
        exit;
    }

    $add_contact_id = $_GET['id'];

    $sql = "SELECT * FROM students WHERE student_id = :student_id";
    $stmt = $dbconn->prepare($sql);
    $stmt->bindParam(":student_id", $add_contact_id, PDO::PARAM_INT);
    $stmt->execute();

    $studentcount = $stmt->rowCount();

    if ($studentcount > 0) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $name = $result['student_fullname'];
        $image = "assets/img/students/" . $result['student_image'];
    } else {
        $sql = "SELECT * FROM teachers WHERE teacher_id = :teacher_id";
        $stmt = $dbconn->prepare($sql);
        $stmt->bindParam(":teacher_id", $add_contact_id, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetcH(PDO::FETCH_ASSOC);

        $name = $result['teacher_fullname'];
        $image = "assets/img/teachers/" . $result['teacher_image'];
    }

    $user_id = $_GET['userid'];

    $sql = "INSERT INTO contact_lists(contact_user_id,contact_add_id,contact_add_name,contact_image)VALUES(:user_id,:add_id,:add_name,:image)";
    $stmt = $dbconn->prepare($sql);
    $stmt->bindParam(":user_id", $user_id, PDO::PARAM_INT);
    $stmt->bindParam(":add_id", $add_contact_id, PDO::PARAM_INT);
    $stmt->bindParam(":add_name", $name, PDO::PARAM_STR);
    $stmt->bindParam(":image", $image, PDO::PARAM_STR);

    $stmt->execute();

    // Add the contact added person reverse

    // Get the reverse name and image

    // Check if the the users is already added it
    $sql = "SELECT * FROM contact_lists WHERE contact_user_id = :user_id AND contact_add_id = :add_id";
    $stmt = $dbconn->prepare($sql);
    $stmt->bindParam(":user_id", $add_contact_id, PDO::PARAM_INT);
    $stmt->bindParam(":add_id", $user_id, PDO::PARAM_INT);
    $stmt->execute();

    $reverseCount = $stmt->rowCount();

    if ($reverseCount > 0) {
        header("location:message.php");
        exit;
    }

    $sql = "SELECT * FROM students WHERE student_id = :student_id";
    $stmt = $dbconn->prepare($sql);
    $stmt->bindParam(":student_id", $user_id, PDO::PARAM_INT);
    $stmt->execute();

    $studentcount = $stmt->rowCount();

    if ($studentcount > 0) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $name = $result['student_fullname'];
        $image = "assets/img/students/" . $result['student_image'];
    } else {
        $sql = "SELECT * FROM teachers WHERE teacher_id = :teacher_id";
        $stmt = $dbconn->prepare($sql);
        $stmt->bindParam(":teacher_id", $user_id, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetcH(PDO::FETCH_ASSOC);

        $name = $result['teacher_fullname'];
        $image = "assets/img/teachers/" . $result['teacher_image'];
    }

    $sql = "INSERT INTO contact_lists(contact_user_id,contact_add_id,contact_add_name,contact_image)VALUES(:user_id,:add_id,:add_name,:image)";
    $stmt = $dbconn->prepare($sql);
    $stmt->bindParam(":user_id", $add_contact_id, PDO::PARAM_INT);
    $stmt->bindParam(":add_id", $user_id, PDO::PARAM_INT);
    $stmt->bindParam(":add_name", $name, PDO::PARAM_STR);
    $stmt->bindParam(":image", $image, PDO::PARAM_STR);
    $stmt->execute();

    header("location:message.php");
    exit;
}
