<?php
    session_start();

    if(isset($_SESSION['teacher_fname']) && isset($_SESSION['teacher_lname'])){
        header("location:myclass.php");
    }

?>