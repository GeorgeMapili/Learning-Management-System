<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once('../vendor/autoload.php');

use config\Database;
use core\Contact;
use helper\ContactValidation;

$database = new Database();
$dbconn = $database->connect();

$contacts = new Contact($dbconn);

$errors = [];

$contactValidation = new ContactValidation();

// Name Validation
$contactName = $contactValidation->nameValidation($_POST['name']);
if ($contactName) {
    echo $contactName;
    return;
}
$contacts->name = $_POST['name'];

// Email Validation
$contactEmail = $contactValidation->emailValidation($_POST['email']);
if ($contactEmail) {
    echo $contactEmail;
    return;
}
$contacts->email = $_POST['email'];

// Subject Validation
$contactSubject = $contactValidation->subjectValidation($_POST['subject']);
if ($contactSubject) {
    echo $contactSubject;
    return;
}
$contacts->subject = $_POST['subject'];

// Message Validation
$contactMessage = $contactValidation->messageValidation($_POST['message']);
if ($contactMessage) {
    echo $contactMessage;
    return;
}
$contacts->message = $_POST['message'];

if ($contacts->saveContactMessage()) {
    echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Successfully Send!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
      ';
} else {
    echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Something went wrong!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
      ';
}
