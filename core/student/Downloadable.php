<?php

namespace core\student;

use PDO;

class Downloadable
{

    public $db;

    public $class_id;

    public function __construct($db){
        $this->db = $db;
    }

    public function getAllDownloadables(){
        $sql=  "SELECT * FROM downloadables WHERE class_id = :class_id ORDER BY downloadable_created_at DESC";
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