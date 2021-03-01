<?php

namespace core\student;

session_start();

// require_once "../../vendor/autoload.php";

use PDO;
// use config\Database;

class Login
{

    public $db;

    public $email_address;
    public $password;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function loginStudent()
    {

        $sql = "SELECT * FROM students WHERE student_email = :email";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":email", $this->email_address, PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {

            while ($studentUser = $stmt->fetch(PDO::FETCH_ASSOC)) {

                if (password_verify($this->password, $studentUser['student_password'])) {

                    $_SESSION['fname'] = $studentUser['student_fname'];
                    $_SESSION['lname'] = $studentUser['student_lname'];
                    $_SESSION['email'] = $studentUser['student_email'];
                    $_SESSION['image'] = $studentUser['student_image'];

                    return true;
                }
            }
        } else {
            return false;
        }
    }
}

// $db = new Database();

// $dbconn = $db->connect();

// $login = new Login($dbconn);

// $login->email_address = "geo@gmail.com";
// $login->password = "12345";

// $loginStud = $login->loginStudent();

// var_dump($loginStud);
