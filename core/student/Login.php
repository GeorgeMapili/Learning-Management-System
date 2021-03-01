<?php

namespace core\student;

session_start();

use PDO;

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
