<?php

namespace core\teacher;

use PDO;

class Teacher
{

    public $db;

    public $teacher_image;
    public $teacher_id;
    public $first_name;
    public $last_name;
    public $email;

    public $fullname;

    public $image;

    public $contact_image;

    public function __construct($db){
        $this->db = $db;
    }

    // !!
    public function updateTeacherInfo(){
        $sql = "UPDATE teachers SET teacher_fname = :teacher_fname, teacher_lname = :teacher_lname, teacher_email = :teacher_email, teacher_fullname = :teacher_fullname WHERE teacher_id = :teacher_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":teacher_fname", $this->first_name, PDO::PARAM_STR);
        $stmt->bindParam(":teacher_lname", $this->last_name, PDO::PARAM_STR);
        $stmt->bindParam(":teacher_email", $this->email, PDO::PARAM_STR);
        $stmt->bindParam(":teacher_fullname", $this->fullname, PDO::PARAM_STR);
        $stmt->bindParam(":teacher_id", $this->teacher_id, PDO::PARAM_INT);
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    // !!
    public function getLatestData(){
        $sql = "SELECT * FROM teachers WHERE teacher_id = :teacher_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":teacher_id", $this->teacher_id, PDO::PARAM_INT);
        $stmt->execute();

        $arr = array();

        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){

            $arr[] = $result;

        }

        return $arr;

    }

    // !!
    public function updateImage(){
        $sql = "UPDATE teachers SET teacher_image = :teacher_image WHERE teacher_id = :teacher_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":teacher_image", $this->teacher_image, PDO::PARAM_STR);
        $stmt->bindParam(":teacher_id", $this->teacher_id, PDO::PARAM_INT);
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    // !!
    public function updateMessageName(){
        $sql = "UPDATE messages SET message_sender_fname = :message_sender_fname WHERE message_id_sender = :message_id_sender";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":message_sender_fname", $this->first_name, PDO::PARAM_STR);
        $stmt->bindParam(":message_id_sender", $this->teacher_id, PDO::PARAM_INT);
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    // !!
    public function updateMessageImage(){
        $sql = "UPDATE messages SET message_sender_image = :message_sender_image WHERE message_id_sender = :message_id_sender";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":message_sender_image", $this->contact_image, PDO::PARAM_STR);
        $stmt->bindParam(":message_id_sender", $this->teacher_id, PDO::PARAM_INT);
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    // !!
    public function updateImageContactList(){

        $sql = "UPDATE contact_lists SET contact_image = :contact_image WHERE contact_add_id = :contact_add_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":contact_image", $this->image, PDO::PARAM_STR);
        $stmt->bindParam(":contact_add_id", $this->teacher_id, PDO::PARAM_INT);

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    // !!
    public function updateContactName(){
        $sql = "UPDATE contact_lists SET contact_add_name = :contact_add_name WHERE contact_add_id = :contact_add_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":contact_add_name", $this->fullname, PDO::PARAM_STR);
        $stmt->bindParam(":contact_add_id", $this->teacher_id, PDO::PARAM_INT);

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

}