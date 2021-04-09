<?php

namespace core\teacher;

use PDO;

class Main
{

    public $db;

    public $teacher_id;
    public $teacher_name;
    public $class_name;
    public $class_description;
    public $class_yearlvl;
    public $class_code;

    public function __construct($db){
        $this->db = $db;
    }

    public function showClass(){

        $sql = "SELECT * FROM classes WHERE teacher_id = :teacher_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":teacher_id", $this->teacher_id, PDO::PARAM_INT);
        $stmt->execute();

        $arr = array();

        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
            $arr[] = $result;
        }

        return $arr;

    }

    public function addClass(){

        // if(!empty($class_name) || !empty($class_description) || !empty($class_yearlvl)){

            $sql = "INSERT INTO classes(teacher_id,teacher_name,class_name,class_description,class_yearlvl,class_code)VALUES(:teacher_id,:teacher_name,:class_name,:class_description,:class_yearlvl,:class_code)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":teacher_id", $this->teacher_id, PDO::PARAM_INT);
            $stmt->bindParam(":teacher_name", $this->teacher_name, PDO::PARAM_STR);
            $stmt->bindParam(":class_name", $this->class_name, PDO::PARAM_STR);
            $stmt->bindParam(":class_description", $this->class_description, PDO::PARAM_STR);
            $stmt->bindParam(":class_yearlvl", $this->class_yearlvl, PDO::PARAM_STR);
            $stmt->bindParam(":class_code", $this->class_code, PDO::PARAM_STR);
            
            if($stmt->execute()){
                return true;
            }else{
                return false;
            }

        // }else{

        //     return false;

        // }

    }

}