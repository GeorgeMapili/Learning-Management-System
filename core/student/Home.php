<?php

namespace core\student;

// require_once("../../vendor/autoload.php");
// require_once("../../vendor/autoload.php");

use PDO;
// use config\Database;

class Home
{

    // Db
    public $db;

    // Student Infos
    public $studentId;
    public $class_id;
    public $teacher_id;
    public $student_name;
    public $class_code;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function allClass()
    {
        $sql = "SELECT * FROM classes LEFT JOIN class_students ON class_students.class_id = classes.class_id WHERE class_students.student_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $this->studentId, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt;
    }

    public function validateClassCode($classCode)
    {

        $sql = "SELECT * FROM classes WHERE class_code = :class_code";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":class_code", $classCode, PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {

            while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {

                $this->class_id = $result['class_id'];
                $this->teacher_id = $result['teacher_id'];

                $sql = "SELECT * FROM class_students WHERE class_id = :class_id AND student_id = :student_id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(":class_id", $this->class_id, PDO::PARAM_INT);
                $stmt->bindParam(":student_id", $this->studentId, PDO::PARAM_INT);
                $stmt->execute();

                if ($stmt->rowCount() > 0) {
                    return "already_join_the_class";
                } else {

                    $sql = "INSERT INTO class_students (class_id,student_id,teacher_id,student_name)VALUES(:class_id,:student_id,:teacher_id,:student_name)";
                    $stmt = $this->db->prepare($sql);
                    $stmt->bindParam(":class_id", $this->class_id, PDO::PARAM_INT);
                    $stmt->bindParam(":student_id", $this->studentId, PDO::PARAM_INT);
                    $stmt->bindParam(":teacher_id", $this->teacher_id, PDO::PARAM_INT);
                    $stmt->bindParam(":student_name", $this->student_name, PDO::PARAM_STR);

                    if ($stmt->execute()) {
                        return true; //Execute correctly
                    } else {
                        return false;
                    }
                }
            }
        } else {
            return false;  //Return CLass Code do not exists
        }
    }
}

// $database = new Database();
// $dbconn = $database->connect();

// $homepage = new Home($dbconn);

// $homepage->class_code = "2Daj23Dassss";
// $homepage->studentId = 20210237610826;
// $homepage->student_name = "Test One";

// var_dump($homepage->validateClassCode($homepage->class_code));
