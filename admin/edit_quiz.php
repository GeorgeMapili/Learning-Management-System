<?php

    require_once("../vendor/autoload.php");

    use config\Database;

    $db = new Database();
    $dbconn = $db->connect();

    if(isset($_POST['updateQuiz'])){

        $quiz_id = $_POST['quiz_id'];
        $editFile = $_FILES['editFile'];
        $editTitle = $_POST['editTitle'];
        $editInstruction = $_POST['editInstruction'];
        $class_id = $_POST['editClass'];

        if($editFile['size'] == 0){

            $sql = "SELECT * FROM quiz WHERE quiz_id = :quiz_id";
            $stmt = $dbconn->prepare($sql);
            $stmt->bindParam(":quiz_id", $quiz_id, PDO::PARAM_INT);
            $stmt->execute();

            $res = $stmt->fetch(PDO::FETCH_ASSOC);

            $filename = $res['quiz_file'];

        }else{

            $length = 4;
            $newImageName =  substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, $length);

            $ext = $_FILES['editFile']['name'];

            $ext = explode(".", $ext);

            $extension = $ext[1];

            $filename = $newImageName. "." .$extension;

            // Get the current file name and remove
            $sql = "SELECT * FROM quiz WHERE quiz_id = :quiz_id";
            $stmt = $dbconn->prepare($sql);
            $stmt->bindParam(":quiz_id", $quiz_id, PDO::PARAM_INT);
            $stmt->execute();

            $res = $stmt->fetch(PDO::FETCH_ASSOC);

            $removeFile = $res['quiz_file'];

            unlink("../assets/quiz/$removeFile");

        }

        // Update the quiz file 
        $sql = "UPDATE quiz SET quiz_class_id = :quiz_class_id, quiz_file = :quiz_file, quiz_title = :quiz_title, quiz_instruction = :quiz_instruction WHERE quiz_id = :quiz_id";
        $stmt = $dbconn->prepare($sql);
        $stmt->bindParam(":quiz_class_id", $class_id, PDO::PARAM_INT);
        $stmt->bindParam(":quiz_file", $filename, PDO::PARAM_STR);
        $stmt->bindParam(":quiz_title", $editTitle, PDO::PARAM_STR);
        $stmt->bindParam(":quiz_instruction", $editInstruction, PDO::PARAM_STR);
        $stmt->bindParam(":quiz_id", $quiz_id, PDO::PARAM_INT);

        if($stmt->execute()){

            // Save the file
            move_uploaded_file($_FILES['editFile']['tmp_name'], '../assets/quiz/'. $filename);

            header("location:quiz.php?success=successfully_updated_quiz");
            exit;
        }


    }

    ?>