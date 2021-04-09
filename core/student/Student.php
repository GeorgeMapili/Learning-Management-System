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

    public $image;

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

    public function updateMessageName(){
        $sql = "UPDATE messages SET message_sender_fname = :message_sender_fname WHERE message_id_sender = :message_id_sender";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":message_sender_fname", $this->first_name, PDO::PARAM_STR);
        $stmt->bindParam(":message_id_sender", $this->student_id, PDO::PARAM_INT);
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function updateMessageImage(){
        $sql = "UPDATE messages SET message_sender_image = :message_sender_image WHERE message_id_sender = :message_id_sender";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":message_sender_image", $this->image, PDO::PARAM_STR);
        $stmt->bindParam(":message_id_sender", $this->student_id, PDO::PARAM_INT);
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function updateImageContactList(){

        $sql = "UPDATE contact_lists SET contact_image = :contact_image WHERE contact_add_id = :contact_add_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":contact_image", $this->image, PDO::PARAM_STR);
        $stmt->bindParam(":contact_add_id", $this->student_id, PDO::PARAM_INT);

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

}