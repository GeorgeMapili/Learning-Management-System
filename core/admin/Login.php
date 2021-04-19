<?php

namespace core\admin;

session_start();

use PDO;

class Login
{

    public $db;

    public $email_address;
    public $password;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function loginAdmin()
    {

        $sql = "SELECT * FROM `admin` WHERE admin_email = :email";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":email", $this->email_address, PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {

            while ($adminUser = $stmt->fetch(PDO::FETCH_ASSOC)) {

                if (password_verify($this->password, $adminUser['admin_password'])) {

                    $_SESSION['admin_id'] = $adminUser['admin_id'];
                    $_SESSION['admin_name'] = $adminUser['admin_name'];
                    $_SESSION['admin_email'] = $adminUser['admin_email'];

                    return true;
                }
            }
        } else {
            return false;
        }
    }
}
