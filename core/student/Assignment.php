<?php

namespace core\student;

use PDO;

class Assignment
{

    public $db;

    public $class_id;
    public $assignment_id;
    public $student_id;
    public $assignment_submission_file;
    public $assignment_submission_description;

    public function __construct($db){
        $this->db = $db;
    }

    public function getClassAssignment(){
        $sql = "SELECT * FROM assignments WHERE assignment_class_id = :class_id ORDER BY assignment_created_at DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":class_id", $this->class_id, PDO::PARAM_INT);
        $stmt->execute();

        $arr = array();

        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
            
            $arr[] = $result;

        }

        return $arr;

    }

    public function submitAssignment(){
        $sql = "INSERT INTO assignments_submission (assignment_id, student_id, assignment_submission_file, assignment_submission_description)VALUES(:assignment_id, :student_id, :assignment_submission_file, :assignment_submission_description)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":assignment_id", $this->assignment_id, PDO::PARAM_INT);
        $stmt->bindParam(":student_id", $this->student_id, PDO::PARAM_INT);
        $stmt->bindParam(":assignment_submission_file", $this->assignment_submission_file, PDO::PARAM_STR);
        $stmt->bindParam(":assignment_submission_description", $this->assignment_submission_description, PDO::PARAM_STR);
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function duplicateAssignment(){
        $sql= "SELECT * FROM assignments_submission WHERE assignment_id = :assignment_id AND student_id = :student_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":assignment_id", $this->assignment_id, PDO::PARAM_INT);
        $stmt->bindParam(":student_id", $this->student_id, PDO::PARAM_INT);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            return true;
        }

    }

    public function updateAssignment(){
        $sql = "UPDATE assignments_submission SET assignment_submission_file = :assignment_submission_file, assignment_submission_description = :assignment_submission_description WHERE assignment_id = :assignment_id AND student_id = :student_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":assignment_submission_file", $this->assignment_submission_file, PDO::PARAM_STR);
        $stmt->bindParam(":assignment_submission_description", $this->assignment_submission_description, PDO::PARAM_STR);
        $stmt->bindParam(":assignment_id", $this->assignment_id, PDO::PARAM_INT);
        $stmt->bindParam(":student_id", $this->student_id, PDO::PARAM_INT);

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

}