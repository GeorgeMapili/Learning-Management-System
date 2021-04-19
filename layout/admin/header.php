<?php

session_start();

if(!isset($_SESSION['admin_id']) && !isset($_SESSION['admin_name'])){
    header("location:index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>NORSU</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/norsu.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Font awesome cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- Message Main CSS File -->
    <link href="../assets/css/message.css" rel="stylesheet">

    <style>
        .error{
            color: red;
        }
    </style>

</head>

<body>

    <header id="headers" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="dashboard.php">NORSU</a></h1>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active">
                        <div class="btn-group">
                            <a href="dashboard.php" class="btn btn-secondary">Dashboard</a>
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuReference">
                                <a class="dropdown-item" href="student.php">Student</a>
                                <a class="dropdown-item" href="teacher.php">Teacher</a>
                                <a class="dropdown-item" href="class.php">Class</a>
                                <a class="dropdown-item" href="downloadable.php">Downloadable</a>
                                <a class="dropdown-item" href="assignment.php">Assignments</a>
                                <a class="dropdown-item" href="quiz.php">Quiz</a>
                                <a class="dropdown-item" href="gradebook.php">Grade Book</a>
                            </div>
                        </div>
                    </li>

                </ul>

            </nav>
            <a href="profile.php" class="get-started-btn scrollto">Profile</a>
            <a href="logout.php" class="get-started-btn scrollto">Logout</a>

        </div>
    </header>