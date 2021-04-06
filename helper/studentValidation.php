<?php

namespace helper;

class StudentValidation
{

    public function fnameValidation($fname)
    {

        $result = "";

        if ($fname == "") {
            $result = "First Name is required!";
            return $result;
        } else if (!preg_match("/^[a-zA-Z\'\-\040]+$/", $fname)) {
            $result = "First Name is not valid!";
            return $result;
        } else {
            return false;
        }
    }

    public function lnameValidation($lname)
    {

        $result = "";

        if ($lname == "") {
            $result = "Last Name is required!";
            return $result;
        } else if (!preg_match("/^[a-zA-Z\'\-\040]+$/", $lname)) {
            $result = "Last Name is not valid!";
            return $result;
        } else {
            return false;
        }
    }

    public function emailValidation($email)
    {
        $result = "";

        if ($email === "") { // Check if email is empty
            $result = "Email is required!";
            return $result;
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  //Check if email is valid
            $result = "Please enter a valid email!";
            return $result;
        } else {
            return false;
        }
    }

    public function passwordValidation($password)
    {
        $result = "";

        if ($password == "") {
            $result = "Password is required!";
            return;
        } else if (strlen($password) < 5) {
            $result = "Please input at least 5 characters!";
            return;
        } else {
            return false;
        }
    }

    public function confirmPasswordValidation($confirmPassword, $password)
    {
        $result = "";

        if ($confirmPassword == "") {
            $result = "Confirm Password is required!";
            return;
        } else if ($confirmPassword === $password) {
            $result = "Password do not match!";
            return;
        } else {
            return false;
        }
    }

    public function birthdayValidation($birthday)
    {

        $result = "";

        if ($birthday == "") {
            $result = "Birthday is required!";
            return;
        } else {
            return false;
        }
    }

    public function genderValidation($gender)
    {
        $result = "";

        if ($gender == "") {
            $result = "Gender is required!";
            return;
        } else {
            return false;
        }
    }

    public function profileValidation($profile, $size, $type)
    {
        $result = "";

        $types = explode("/", $type);

        if ($profile == "") {
            $result = "Profile Image is required!";
            return;
        } else if ($size >= 2000000) {
            $result = "File size must be less than 2MB!";
            return;
        } else if ($types[1] != "png" && $types[1] != "jpg" && $types[1] != "jpeg") {
            $result = "Invalid file extension only png,jpeg and jpg!";
            return;
        } else {
            return false;
        }
    }

    public function hashPassword($password)
    {

        $hashPass = password_hash($password, PASSWORD_DEFAULT);

        return $hashPass;
    }

    public function imageName($imagename, $tmp_name)
    {

        $ext = explode(".", $imagename);

        $length = 10;
        $newImagName =  substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 1, $length);

        $newImagName .= "." . strtolower($ext[1]);

        // Save the image
        $target_directory = "../assets/img/students/";

        $target_file = $target_directory . $newImagName;

        move_uploaded_file($tmp_name, $target_file);

        return $newImagName;
    }

}
