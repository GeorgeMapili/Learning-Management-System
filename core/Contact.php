<?php

namespace core;

use PDO;

class Contact
{

    public $db;

    public $name;
    public $email;
    public $subject;
    public $message;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function saveContactMessage()
    {
        $this->name = trim(htmlspecialchars($this->name, ENT_QUOTES, 'UTF-8'));
        $this->email = trim(htmlspecialchars($this->email, ENT_QUOTES, 'UTF-8'));
        $this->subject = trim(htmlspecialchars($this->subject, ENT_QUOTES, 'UTF-8'));
        $this->message = trim(htmlspecialchars($this->message, ENT_QUOTES, 'UTF-8'));

        $sql = "INSERT INTO contacts(contact_name,contact_email,contact_subject,contact_message)VALUES(:name,:email,:subject,:message)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":name", $this->name, PDO::PARAM_STR);
        $stmt->bindParam(":email", $this->email, PDO::PARAM_STR);
        $stmt->bindParam(":subject", $this->subject, PDO::PARAM_STR);
        $stmt->bindParam(":message", $this->message, PDO::PARAM_STR);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
