<?php

namespace core\student;

use PDO;

class AddContact{

    public $db;

    public $contact_name;
    public $contact_id;

    public function __construct($db){
        $this->db = $db;
    }

    public function searchName(){
        $sql = "SELECT * FROM students WHERE student_fullname LIKE :name AND NOT student_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":name",$this->contact_name, PDO::PARAM_STR);
        $stmt->bindParam(":id",$this->contact_id, PDO::PARAM_INT);
        $stmt->execute();

        $namecount = $stmt->rowCount();

        $arr = array();

        if($namecount > 0){
            
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $arr[] = $row;
            }

            return $arr;

        }else{

            $sql = "SELECT * FROM teachers WHERE teacher_fullname LIKE :name AND NOT teacher_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":name",$this->contact_name, PDO::PARAM_STR);
            $stmt->bindParam(":id",$this->contact_id, PDO::PARAM_INT);
            $stmt->execute();

            $namecount = $stmt->rowCount();

            if($namecount > 0){

                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                return $result;

            }else{

                return false;

            }

        }

    }

    public function showContact(){
        $sql = "SELECT * FROM contact_lists WHERE contact_user_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id",$this->contact_id, PDO::PARAM_INT);
        $stmt->execute();

        $usercount = $stmt->rowCount();

        $arr = array();

        if($usercount > 0){

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $arr[] = $row;
            }
            return $arr;
        }

    }

}