<?php

namespace core\student;

use PDO;

class Subject
{

    public $db;

    public $class_id;

    public function __construct($db){
        $this->db = $db;
    }

    public function getStudent(){
        $sql = "SELECT * FROM class_students LEFT JOIN students ON class_students.student_id = students.student_id WHERE class_id = :class_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":class_id", $this->class_id, PDO::PARAM_INT);
        $stmt->execute();

        $arr = array();

        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){

            $arr[] = $result;

        }

        return $arr;

    }

}