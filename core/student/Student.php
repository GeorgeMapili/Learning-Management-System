<?php

namespace core\student;

use PDO;

class Student
{

    public $db;

    public $student_image;
    public $student_id;
    public $first_name;
    public $last_name;
    public $email;

    public function __construct($db){
        $this->db = $db;
    }

    public function updateStudentInfo(){
        $sql = "UPDATE students SET student_fname = :student_fname, student_lname = :student_lname, student_email = :student_email WHERE student_id = :student_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":student_fname", $this->first_name, PDO::PARAM_STR);
        $stmt->bindParam(":student_lname", $this->last_name, PDO::PARAM_STR);
        $stmt->bindParam(":student_email", $this->email, PDO::PARAM_STR);
        $stmt->bindParam(":student_id", $this->student_id, PDO::PARAM_INT);
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function getLatestData(){
        $sql = "SELECT * FROM students WHERE student_id = :student_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":student_id", $this->student_id, PDO::PARAM_INT);
        $stmt->execute();

        $arr = array();

        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){

            $arr[] = $result;

        }

        return $arr;

    }

    public function updateImage(){
        $sql = "UPDATE students SET student_image = :student_image WHERE student_id = :student_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":student_image", $this->student_image, PDO::PARAM_STR);
        $stmt->bindParam(":student_id", $this->student_id, PDO::PARAM_INT);
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

}