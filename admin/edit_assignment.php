<?php

    require_once("../vendor/autoload.php");

    use config\Database;

    $db = new Database();
    $dbconn = $db->connect();

    if(isset($_POST['updateAssignment'])){

        $assignment_id = $_POST['assignment_id'];
        $editFile = $_FILES['editFile'];
        $editDescription = $_POST['editDescription'];
        $class_id = $_POST['editClass'];

        if($editFile['size'] == 0){

            $sql = "SELECT * FROM assignments WHERE assignment_id = :assignment_id";
            $stmt = $dbconn->prepare($sql);
            $stmt->bindParam(":assignment_id", $assignment_id, PDO::PARAM_INT);
            $stmt->execute();

            $res = $stmt->fetch(PDO::FETCH_ASSOC);

            $filename = $res['assignment_file'];

        }else{

            $length = 4;
            $newImageName =  substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, $length);

            $ext = $_FILES['editFile']['name'];

            $ext = explode(".", $ext);

            $extension = $ext[1];

            $filename = $newImageName. "." .$extension;

            // Get the current file name and remove
            $sql = "SELECT * FROM assignments WHERE assignment_id = :assignment_id";
            $stmt = $dbconn->prepare($sql);
            $stmt->bindParam(":assignment_id", $assignment_id, PDO::PARAM_INT);
            $stmt->execute();

            $res = $stmt->fetch(PDO::FETCH_ASSOC);

            $removeFile = $res['assignment_file'];

            unlink("../assets/assignment/$removeFile");

        }

        

        // Get the teacher name
        $sql = "SELECT * FROM classes WHERE class_id = :class_id";
        $stmt = $dbconn->prepare($sql);
        $stmt->bindParam(":class_id", $class_id, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $teacher_name = $result['teacher_name'];

        // Update the download file 
        $sql = "UPDATE assignments SET assignment_class_id = :assignment_class_id, assignment_author = :assignment_author, assignment_file = :assignment_file, assignment_description = :assignment_description WHERE assignment_id = :assignment_id";
        $stmt = $dbconn->prepare($sql);
        $stmt->bindParam(":assignment_class_id", $class_id, PDO::PARAM_INT);
        $stmt->bindParam(":assignment_author", $teacher_name, PDO::PARAM_STR);
        $stmt->bindParam(":assignment_file", $filename, PDO::PARAM_STR);
        $stmt->bindParam(":assignment_description", $editDescription, PDO::PARAM_STR);
        $stmt->bindParam(":assignment_id", $assignment_id, PDO::PARAM_INT);

        if($stmt->execute()){

            // Save the file
            move_uploaded_file($_FILES['editFile']['tmp_name'], '../assets/assignment/'. $filename);

            header("location:assignment.php?success=successfully_updated_assignment");
            exit;
        }


    }

    ?>