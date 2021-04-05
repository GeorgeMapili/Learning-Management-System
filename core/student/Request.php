<?php

namespace core\student;

use PDO;

class Request
{

    public $db;

    public $student_name;
    public $request_id;

    public function __construct($db){
        $this->db = $db;
    }

    public function getRequest(){

        $request_status = 0;

        $sql = "SELECT * FROM requests WHERE student_name = :student_name AND request_status = :request_status";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":student_name", $this->student_name, PDO::PARAM_STR);
        $stmt->bindParam(":request_status", $request_status, PDO::PARAM_INT);
        $stmt->execute();

        $arr = array();

        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
            
            $arr[] = $result;

        }

        return $arr;

    }

    public function acceptRequest(){

        $status = 1;

        $sql = "UPDATE requests SET request_status = :request_status WHERE request_id = :request_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":request_status", $status, PDO::PARAM_INT);
        $stmt->bindParam(":request_id", $this->request_id, PDO::PARAM_INT);
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

}