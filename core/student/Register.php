<?php

namespace core\student;

use PDO;

class Register
{
    // db
    public $db;

    // student variables
    public $id;
    public $fname;
    public $lname;
    public $email;
    public $password;
    public $confirm_password;
    public $birthday;
    public $gender;
    public $profile;
    public $profile_size;
    public $profile_type;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function studentId()
    {
        $year = date('Y');
        $rand = 0;
        for ($i = 0; $i < 9; $i++) {
            $rand .= mt_rand(0, 9);
        }

        return "$year" . "$rand";
    }



    public function registerStudent()
    {
        $this->fname = trim(htmlspecialchars($this->fname, ENT_QUOTES, 'UTF-8'));
        $this->lname = trim(htmlspecialchars($this->lname, ENT_QUOTES, 'UTF-8'));
        $this->email = trim(htmlspecialchars($this->email, ENT_QUOTES, 'UTF-8'));
        $this->password = trim(htmlspecialchars($this->password, ENT_QUOTES, 'UTF-8'));
        $this->birthday = trim(htmlspecialchars($this->birthday, ENT_QUOTES, 'UTF-8'));
        $this->gender = trim(htmlspecialchars($this->gender, ENT_QUOTES, 'UTF-8'));
        $this->profile = trim(htmlspecialchars($this->profile, ENT_QUOTES, 'UTF-8'));

        $sql = "INSERT INTO students(student_id,student_fname,student_lname,student_email,student_password,student_birthday,student_gender,student_image)VALUES(:id,:fname,:lname,:email,:password,:birthday,:gender,:image)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $this->id, PDO::PARAM_INT);
        $stmt->bindParam(":fname", $this->fname, PDO::PARAM_STR);
        $stmt->bindParam(":lname", $this->lname, PDO::PARAM_STR);
        $stmt->bindParam(":email", $this->email, PDO::PARAM_STR);
        $stmt->bindParam(":password", $this->password, PDO::PARAM_STR);
        $stmt->bindParam(":birthday", $this->birthday, PDO::PARAM_STR);
        $stmt->bindParam(":gender", $this->gender, PDO::PARAM_STR);
        $stmt->bindParam(":image", $this->profile, PDO::PARAM_STR);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
