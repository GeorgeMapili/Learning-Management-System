<?php

namespace core\teacher;

use PDO;

class ChatUser
{

    public $db;

    public $chat_sender_id;
    public $chat_receiver_id;
    public $chat_user_message;
    public $chat_created;
    public $chat_sender_image;
    public $chat_receiver_image;
    public $message_sender_fname;

    public function __construct($db){
        $this->db = $db;
    }

    public function getData(){

        $sql = "SELECT * FROM teachers WHERE teacher_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $this->chat_sender_id, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $count = $stmt->rowCount();

        if($count > 0){

            return $result;

        }else{

            $sql = "SELECT * FROM students WHERE student_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":id",$this->chat_sender_id, PDO::PARAM_INT);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result;

        }

        

    }

    public function saveChat(){
        $sql = "INSERT INTO messages(message_id_sender,message_id_receiver,message_body,message_created_at,message_sender_image,message_receiver_image,message_sender_fname)VALUES(:id_sender,:id_receiver,:message_body,:message_created,:sender_image,:receiver_image,:sender_fname)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_sender",$this->chat_sender_id, PDO::PARAM_INT);
        $stmt->bindParam(":id_receiver",$this->chat_receiver_id, PDO::PARAM_INT);
        $stmt->bindParam(":message_body",$this->chat_user_message, PDO::PARAM_STR);
        $stmt->bindParam(":message_created",$this->chat_created, PDO::PARAM_STR);
        $stmt->bindParam(":sender_image",$this->chat_sender_image, PDO::PARAM_STR);
        $stmt->bindParam(":receiver_image",$this->chat_receiver_image, PDO::PARAM_STR);
        $stmt->bindParam(":sender_fname",$this->message_sender_fname, PDO::PARAM_STR);
        $stmt->execute();

    }

    public function getChat(){
        $sql = "SELECT * FROM messages WHERE message_id_sender IN(:id_send,:id_receiver) AND message_id_receiver IN(:id_send,:id_receiver)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_send", $this->chat_sender_id);
        $stmt->bindParam(":id_receiver", $this->chat_receiver_id);
        $stmt->execute();

        $arr = array();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $arr[] = $row;
        }

        return $arr;

    }

}