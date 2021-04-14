<?php

namespace core\teacher;
use PDO;

class Announcement
{

    public $db;

    public $class_id;
    public $teacher_id;
    public $announcement_desc;

    public function __construct($db){
        $this->db = $db;
    }

    public function getAllAnnouncement(){
        $sql = "SELECT * FROM announcements WHERE class_id = :class_id ORDER BY announcement_created_at DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":class_id", $this->class_id, PDO::PARAM_INT);
        $stmt->execute();

        $arr = array();

        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){

            $arr[] = $result;

        }

        return $arr;
    }

    public function addAnnouncement(){

        $sql = "INSERT INTO announcements(class_id,teacher_id,announcement_description)VALUES(:class_id,:teacher_id,:announcement_description)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":class_id", $this->class_id, PDO::PARAM_INT);
        $stmt->bindParam(":teacher_id", $this->teacher_id, PDO::PARAM_INT);
        $stmt->bindParam(":announcement_description", $this->announcement_desc, PDO::PARAM_STR);
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function showAnnouncement(){

        $sql = "SELECT * FROM announcements WHERE class_id = :class_id AND teacher_id = :teacher_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":class_id", $this->class_id, PDO::PARAM_INT);
        $stmt->bindParam(":teacher_id", $this->teacher_id, PDO::PARAM_INT);
        $stmt->execute();

        $arr = array();

        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){

            $arr[] = $result;

        }

        return $arr;

    }



}