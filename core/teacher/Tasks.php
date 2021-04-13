<?php

namespace core\teacher;

use PDO;

class Tasks
{

    public $db;

    public $class_id;
    public $task_id;
    public $student_id;
    public $task_author;
    public $task_deadline;
    public $task_title;
    public $task_body;

    // Default value
    public $task_status_default = 0;

    public function __construct($db){
        $this->db = $db;
    }

    public function saveTask(){
        $sql = "INSERT INTO tasks(class_id, student_id, task_author, task_deadline, task_title, task_body)VALUES(:class_id, :student_id, :task_author, :task_deadline, :task_title, :task_body)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":class_id", $this->class_id, PDO::PARAM_INT);
        $stmt->bindParam(":student_id", $this->student_id, PDO::PARAM_INT);
        $stmt->bindParam(":task_author", $this->task_author, PDO::PARAM_STR);
        $stmt->bindParam(":task_deadline", $this->task_deadline, PDO::PARAM_STR);
        $stmt->bindParam(":task_title", $this->task_title, PDO::PARAM_STR);
        $stmt->bindParam(":task_body", $this->task_body, PDO::PARAM_STR);
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function getTasks(){
        $sql= "SELECT * FROM tasks WHERE class_id = :class_id AND student_id = :student_id AND task_status = :task_status";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":class_id", $this->class_id, PDO::PARAM_INT);
        $stmt->bindParam(":student_id", $this->student_id, PDO::PARAM_INT);
        $stmt->bindParam(":task_status", $this->task_status_default, PDO::PARAM_INT);
        
        if($stmt->execute()){

            $arr = array();

            while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
                $arr[] = $result;
            }

            return $arr;

        }else{

            return false;

        }

    }

    public function doneTasks(){
        $status = 1;
        $sql = "UPDATE tasks SET task_status = :status WHERE task_id = :task_id AND class_id = :class_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":status", $status, PDO::PARAM_INT);
        $stmt->bindParam(":task_id", $this->task_id, PDO::PARAM_INT);
        $stmt->bindParam(":class_id", $this->class_id, PDO::PARAM_INT);
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function updateTasks(){
        $sql = "UPDATE tasks SET task_deadline = :task_deadline, task_title = :task_title, task_body = :task_body WHERE task_id = :task_id AND class_id = :class_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":task_deadline", $this->task_deadline, PDO::PARAM_STR);
        $stmt->bindParam(":task_title", $this->task_title, PDO::PARAM_STR);
        $stmt->bindParam(":task_body", $this->task_body, PDO::PARAM_STR);
        $stmt->bindParam(":task_id", $this->task_id, PDO::PARAM_INT);
        $stmt->bindParam(":class_id", $this->class_id, PDO::PARAM_INT);

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

}