<?php
include 'Admin/phpAction/controller.php';
include 'Admin/phpAction/model.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Charity</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Khula:300,400,600,700,800%7CRoboto:300,400,400i,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/color-4.css" id="color-scheme">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<header id="ch-home" class="ch-header">
    <div class="main-navigation">
        <nav class="navbar navbar-fixed-top nav-scroll">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-action="#js-navbar-menu" aria-expanded="false">
                            <span aria-hidden="true" class="icon"></span>
                        </button>
                        <?php
                        $modelObjForLogo=new model();
                        $resultLogo=$modelObjForLogo->logoSelect();
                        $logo=$resultLogo->fetch_assoc();
                        ?>
                        <a class="navbar-brand" href="#"><img src="img/<?php echo $logo['name'];?>" alt="" class="img-responsive"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="js-navbar-menu">
                        <ul class="nav navbar-nav navbar-right ep-mobile-menu" id="navbar-nav">
                            <li class="active"><a href="index.php">Home</a><span></span></li>
                            <li><a href="about.php">About</a><span></span></li>
                            <li><a href="gallery.php">Gallery</a><span></span></li>
                            <li><a href="blog.php">Blog</a><span></span></li>
                            <li><a href="#ch-footer">Contact</a><span></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>