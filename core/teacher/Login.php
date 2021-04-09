<?php

namespace core\teacher;

session_start();

use PDO;

class Login
{

    public $db;

    public $email;
    public $password;

    public function __construct($db){
        $this->db = $db;
    }

    public function loginTeacher(){

        $sql = "SELECT * FROM teachers WHERE teacher_email = :email";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":email", $this->email, PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {

            while ($teacherUser = $stmt->fetch(PDO::FETCH_ASSOC)) {

                if (password_verify($this->password, $teacherUser['teacher_password'])) {

                    $_SESSION['teacher_id'] = $teacherUser['teacher_id'];
                    $_SESSION['teacher_fname'] = $teacherUser['teacher_fname'];
                    $_SESSION['teacher_lname'] = $teacherUser['teacher_lname'];
                    $_SESSION['teacher_email'] = $teacherUser['teacher_email'];
                    $_SESSION['teacher_image'] = $teacherUser['teacher_image'];

                    return true;
                }
            }
        } else {
            return false;
        }

    }

}