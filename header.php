<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        <?php 
            $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            if ( strpos($url, 'domains.php') !== false ) {
                echo('Domain Registration | Wizard Node');
            }
            elseif ( strpos($url, 'index.php') !== false ) {
                echo('Web Hosting, VPS & Domain Registration | Wizard Node');
            }
            elseif ( strpos($url, 'virtual-servers.php') !== false ) {
                echo('Virtual Private Servers | Wizard Node');
            }
            elseif ( strpos($url, 'web-hosting.php') !== false ) {
                echo('Premium Web Hosting | Wizard Node');
            }
            elseif ( strpos($url, 'about-us.php') !== false ) {
                echo('About Us| Wizard Node');
            }
            elseif ( strpos($url, 'terms-of-services.php') !== false ) {
                echo('Terms of services | Wizard Node');
            }
            else echo('Web Hosting, VPS & Domain Registration | Wizard Node')
        ?>
    </title>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no, user-scalable=0" />
<link rel="icon" href="img/icon.png">
<meta name="description" content="">
<meta name="author" content="">

<!-- LINKS -->
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/other.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/d70f8cdd06.js" crossorigin="anonymous"></script>

<!-- JS, Popper.js, and jQuery -->
<script src="js/style.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body id="body">
<header>
   <!-- <img class="nav-background" src="img/header3.png"> -->
    <nav class="navbar navbar-expand-lg navbar-light">
    <a href="index.php"> <img class="navbar-brand" href="#" src="img/wizardnode-logo.png"> </a>
    <div class="collapse navbar-collapse show" id="navbarNav">
        <ul class="nav navbar-nav ml-auto topbar">
        <li class="nav-item active">
            <a class="nav-link" href="#"><div class="spinner-grow text-success" role="status"><span class="sr-only"></span></div>STATUS PAGE </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">VPS LOGIN</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">CPANEL LOGIN</a>
        </li>
        </ul>
        <ul class="navbar-nav flex-row mb-2">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php#services">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about-us.php">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://billing.wizardnode.com/knowledgebase">Support Area</a>
        </li>
        <li class="nav-item" style='padding: 5px;'>
             <a href="https://billing.wizardnode.com"><button type="button" class="btn btn-purple global-btn"><i class="fas fa-user-circle"></i>Client Area</button></a>
        </li>
        </ul>
    </div>
    </div>
</header>