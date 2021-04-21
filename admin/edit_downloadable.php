<?php

    require_once("../vendor/autoload.php");

    use config\Database;

    $db = new Database();
    $dbconn = $db->connect();

    if(isset($_POST['updateClass'])){

        $download_id = $_POST['download_id'];
        $editFile = $_FILES['editFile'];
        $editDescription = $_POST['editDescription'];
        $class_id = $_POST['editClass'];

        if($editFile['size'] == 0){

            $sql = "SELECT * FROM downloadables WHERE downloadable_id = :downloadable_id";
            $stmt = $dbconn->prepare($sql);
            $stmt->bindParam(":downloadable_id", $download_id, PDO::PARAM_INT);
            $stmt->execute();

            $res = $stmt->fetch(PDO::FETCH_ASSOC);

            $filename = $res['downloadable_file'];

        }else{

            $length = 4;
            $newImageName =  substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, $length);

            $ext = $_FILES['editFile']['name'];

            $ext = explode(".", $ext);

            $extension = $ext[1];

            $filename = $newImageName. "." .$extension;

            // Get the current file name and remove
            $sql = "SELECT * FROM downloadables WHERE downloadable_id = :downloadable_id";
            $stmt = $dbconn->prepare($sql);
            $stmt->bindParam(":downloadable_id", $download_id, PDO::PARAM_INT);
            $stmt->execute();

            $res = $stmt->fetch(PDO::FETCH_ASSOC);

            $removeFile = $res['downloadable_file'];

            unlink("../assets/download/$removeFile");

        }

        

        // Get the teacher name
        $sql = "SELECT * FROM classes WHERE class_id = :class_id";
        $stmt = $dbconn->prepare($sql);
        $stmt->bindParam(":class_id", $class_id, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $teacher_name = $result['teacher_name'];

        // Update the download file 
        $sql = "UPDATE downloadables SET class_id = :class_id, downloadable_author = :downloadable_author, downloadable_file = :downloadable_file, downloadable_description = :downloadable_description WHERE downloadable_id = :downloadable_id";
        $stmt = $dbconn->prepare($sql);
        $stmt->bindParam(":class_id", $class_id, PDO::PARAM_INT);
        $stmt->bindParam(":downloadable_author", $teacher_name, PDO::PARAM_STR);
        $stmt->bindParam(":downloadable_file", $filename, PDO::PARAM_STR);
        $stmt->bindParam(":downloadable_description", $editDescription, PDO::PARAM_STR);
        $stmt->bindParam(":downloadable_id", $download_id, PDO::PARAM_INT);

        if($stmt->execute()){

            // Save the file
            move_uploaded_file($_FILES['editFile']['tmp_name'], '../assets/download/'. $filename);

            header("location:downloadable.php?success=successfully_updated_downloadables");
            exit;
        }


    }

    ?>