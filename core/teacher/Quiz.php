<?php

namespace core\teacher;
use PDO;

class Quiz
{

    public $db;

    public $class_id;
    public $quiz_file;
    public $quiz_title;
    public $quiz_instruction;

    public $quiz_id;

    public function __construct($db){
        $this->db = $db;
    }

    public function addQuiz(){

        $sql = "INSERT INTO quiz(quiz_class_id, quiz_file, quiz_title, quiz_instruction)VALUES(:quiz_class_id, :quiz_file, :quiz_title, :quiz_instruction)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":quiz_class_id", $this->class_id, PDO::PARAM_INT);
        $stmt->bindParam(":quiz_file", $this->quiz_file, PDO::PARAM_STR);
        $stmt->bindParam(":quiz_title", $this->quiz_title, PDO::PARAM_STR);
        $stmt->bindParam(":quiz_instruction", $this->quiz_instruction, PDO::PARAM_STR);

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function getAllQuiz(){
        
        $sql = "SELECT * FROM quiz WHERE quiz_class_id = :class_id ORDER BY quiz_created_at DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":class_id", $this->class_id, PDO::PARAM_INT);
        $stmt->execute();

        $arr = array();

        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){

            $arr[] = $result;

        }

        return $arr;

    }

    public function getAllQuizSubmission(){
        $sql = "SELECT * FROM  quiz_submission LEFT JOIN students ON quiz_submission.student_id = students.student_id WHERE quiz_submission.quiz_id = :quiz_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":quiz_id", $this->quiz_id, PDO::PARAM_INT);
        $stmt->execute();

        $arr = array();

        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
            $arr[] = $result;
        }

        return $arr;

    }



}