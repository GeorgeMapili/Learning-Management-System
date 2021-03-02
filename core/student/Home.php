<?php

namespace core\student;

use PDO;

class Home
{

    public $db;

    public $studentId;

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
}
