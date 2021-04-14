<?php

namespace core\teacher;

use PDO;

class Downloadable
{

    public $db;

    public $class_id;
    public $downloadable_author;
    public $downloadable_file;
    public $downloadable_description;


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

    public function addDownloadable(){

        $sql = "INSERT INTO downloadables(class_id, downloadable_author, downloadable_file, downloadable_description)VALUES(:class_id, :downloadable_author, :downloadable_file, :downloadable_description)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":class_id", $this->class_id, PDO::PARAM_INT);
        $stmt->bindParam(":downloadable_author", $this->downloadable_author, PDO::PARAM_STR);
        $stmt->bindParam(":downloadable_file", $this->downloadable_file, PDO::PARAM_STR);
        $stmt->bindParam(":downloadable_description", $this->downloadable_description, PDO::PARAM_STR);

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

}