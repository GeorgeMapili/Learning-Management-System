<?php

namespace core\teacher;

use PDO;

class Subject
{

    public $db;

    public $class_id;
    public $class_overview;

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

    public function searchName(){

        $sql = "SELECT students.student_id, students.student_fullname FROM `students` LEFT JOIN `class_students` ON class_students.student_id = students.student_id AND class_students.class_id = :class_id WHERE class_students.student_id IS NULL AND students.student_fullname LIKE :name";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":class_id", $this->class_id, PDO::PARAM_INT);
        $stmt->bindParam(":name", $this->student_name, PDO::PARAM_STR);
        $stmt->execute();

        $arr = array();

        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
            $arr[] = $result;
        }

        return $arr;

    }

    public function addOverview(){

        $sql = "UPDATE classes SET class_overview = :class_overview WHERE class_id = :class_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":class_overview", $this->class_overview, PDO::PARAM_STR);
        $stmt->bindParam(":class_id", $this->class_id, PDO::PARAM_INT);
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function editOverview(){

        $sql = "UPDATE classes SET class_overview = :class_overview WHERE class_id = :class_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":class_overview", $this->class_overview, PDO::PARAM_STR);
        $stmt->bindParam(":class_id", $this->class_id, PDO::PARAM_INT);
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

}