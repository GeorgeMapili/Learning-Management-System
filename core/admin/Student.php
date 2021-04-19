<?php

namespace core\admin;

use PDO;

class Student
{

    public $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function getAllStudent(){

        $sql = "SELECT * FROM students";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $arr = array();

        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
            $arr[] = $result;
        }

        return $arr;

    }

}