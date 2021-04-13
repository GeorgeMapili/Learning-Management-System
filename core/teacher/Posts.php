<?php

namespace core\teacher;

use PDO;

class Posts
{

    public $db;

    public $classId;
    public $postId;
    public $postAuthor;
    public $postImage;
    public $postBody;
    public $postDate;
    public $post_date;
    public $post_time;

    public function __construct($db){
        $this->db = $db;
    }

    public function savePosts(){
        $sql = "INSERT INTO posts(class_id, post_author, post_img, post_body, post_created_at,post_date,post_time)VALUES(:class_id, :post_author, :post_img , :post_body, :post_created_at, :post_date, :post_time)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":class_id", $this->classId, PDO::PARAM_INT);
        $stmt->bindParam(":post_author", $this->postAuthor, PDO::PARAM_STR);
        $stmt->bindParam(":post_body", $this->postBody, PDO::PARAM_STR);
        $stmt->bindParam(":post_img", $this->postImage, PDO::PARAM_STR);
        $stmt->bindParam(":post_created_at", $this->postDate, PDO::PARAM_STR);
        $stmt->bindParam(":post_date", $this->post_date , PDO::PARAM_STR);
        $stmt->bindParam(":post_time", $this->post_time , PDO::PARAM_STR);
        
        // if($stmt->execute()){
        //     return true;
        // }else{
        //     return false;
        // }

        if($stmt->execute()){
            // return true;

            // Get the post id for update and delete
            $sql = "SELECT post_id FROM posts WHERE class_id = :class_id AND post_author = :post_author AND post_img = :post_img AND post_body = :post_body AND post_created_at = :post_created_at AND post_date = :post_date AND post_time = :post_time";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":class_id", $this->classId, PDO::PARAM_INT);
            $stmt->bindParam(":post_author", $this->postAuthor, PDO::PARAM_STR);
            $stmt->bindParam(":post_body", $this->postBody, PDO::PARAM_STR);
            $stmt->bindParam(":post_img", $this->postImage, PDO::PARAM_STR);
            $stmt->bindParam(":post_created_at", $this->postDate, PDO::PARAM_STR);
            $stmt->bindParam(":post_date", $this->post_date , PDO::PARAM_STR);
            $stmt->bindParam(":post_time", $this->post_time , PDO::PARAM_STR);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result;

        }else{
            return false;
        }

    }

    public function showAllPosts(){
        $sql = "SELECT * FROM posts WHERE class_id = :id ORDER BY `post_date` DESC, `post_time` DESC ";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $this->classId, PDO::PARAM_INT);
        $stmt->execute();

        $arr = array();

        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
            $arr[] = $result;
        }

        return $arr;

    }

    public function getClassData(){
        $sql = "SELECT * FROM classes WHERE class_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $this->classId, PDO::PARAM_INT);
        $stmt->execute();

        $arr = array();

        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
            $arr[] = $result;
        }

        return $arr;

    }

    public function updatePost(){
        $sql = "UPDATE posts SET post_body = :post_body WHERE post_id = :post_id AND class_id = :class_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":post_body", $this->postBody, PDO::PARAM_STR);
        $stmt->bindParam(":post_id", $this->postId, PDO::PARAM_INT);
        $stmt->bindParam(":class_id", $this->classId, PDO::PARAM_INT);

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function getSingleContent(){
        $sql = "SELECT * FROM posts WHERE post_id = :post_id AND class_id = :class_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":post_id", $this->postId, PDO::PARAM_INT);
        $stmt->bindParam(":class_id", $this->classId, PDO::PARAM_INT);
        
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

}
