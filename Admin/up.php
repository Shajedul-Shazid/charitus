<?php
include 'phpAction/controller.php';
include 'phpAction/model.php';
$modelObjForLogo=new model();
$resultLogo=$modelObjForLogo->logoSelect();
$logo=$resultLogo->fetch_assoc();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Charitus</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/fontawesome.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- sobuj personal css -->

    <link rel="stylesheet" type="text/css" href="css/common.css">

</head>

<body>

<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
        <div class="sidebar-header d-flex justify-content-center">
            <img style="" src="../img/<?php echo $logo['name'];?>" alt="logo" />
        </div>

        <ul class="list-unstyled components">
            <li class="">
                <a href="index.php"><i class="fas fa-home"></i> Home</a>
            </li>
            <li>
                <a href="logo.php"><i class="fas fa-globe-europe"></i> Site Credentials</a>
            </li>
            <li>
                <a href="carouswel.php"><i class="fas fa-globe-europe"></i> Carousel</a>
            </li>
            <li>
                <a href="work.php"><i class="fas fa-globe-europe"></i>Add Work</a>
            </li>
           <li>
                <a href="commentWork.php"><i class="fas fa-globe-europe"></i>Comment</a>
            </li>
            <li>
                <a href="gallery.php"><i class="fas fa-globe-europe"></i>Our Gallery</a>
            </li>
            <li>
                <a href="team_member.php"><i class="fas fa-globe-europe"></i>Team Member</a>
            </li>


        </ul>
    </nav>

    <!-- Page Content Holder -->
    <div id="content">

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="navbar-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <p class="mr-auto p-3 c-white f-s-20 f-w-500 mb--3 nav-font-s"> Dashboard </p>

                <div class="" id="">
                    <ul class="ml-auto">
                        <a class="nav-link c-white f-w-500 f-s-20 mb--10 nav-font-s" href=""><i class="fas fa-power-off text-center"></i> LogOut</a>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Content -->
        <main>