<?php

namespace helper;

class ContactValidation
{

    public function nameValidation($name)
    {
        $result = "";

        if ($name === "") { // Check if name is empty
            $result = "Name is required";
            return $result;
        } else if (strlen($name) < 3) {  //Check if name is less than 3
            $result = "Please enter at least 3 characters";
            return $result;
        } else if (!preg_match("/^[a-zA-Z\'\-\040]+$/", $name)) { //Check if name is valid
            $result = "Name is not valid";
            return $result;
        } else {
            return false;
        }
    }

    public function emailValidation($email)
    {
        $result = "";

        if ($email === "") { // Check if email is empty
            $result = "Email is required";
            return $result;
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  //Check if email is valid
            $result = "Please enter a valid email";
            return $result;
        } else {
            return false;
        }
    }

    public function subjectValidation($subject)
    {
        $result = "";

        if ($subject === "") { // Check if subject is empty
            $result = "Subject is required";
            return $result;
        } else {
            return false;
        }
    }

    public function messageValidation($message)
    {
        $result = "";

        if ($message === "") { // Check if message is empty
            $result = "Message is required";
            return $result;
        } else {
            return false;
        }
    }
}

// $contact = new ContactValidation();

// $ex = $contact->emailValidation("");

// var_dump($ex);
// die();
