<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="This is testing online votting system project written in php and MYSQL database by panditprogrammer.com . This projects Demonstrate how to be handle Billions of Indian citizen votes using this services. This EVM fully optimized and secured for votting . User can Vote only one time using their Aadhar UIDAI identification . ">
    <meta name="keywords" content="Online votting system projects , EVM- Electronic votting system, php and mysql votting projects by pandit programmer, php projects by pandit projects, mysql projects by pandit programmer, votting system , india votting system , Aadhar based votting system">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Votting System by pandit programmer (Testing EVM Online Machine) EVM - Electronic Voting Machine
    </title>

    <link rel="stylesheet" href="/src/css/style.css">

    <link rel="apple-touch-icon" sizes="57x57" href="/src/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/src/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/src/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/src/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/src/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/src/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/src/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/src/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/src/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/src/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/src/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/src/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/src/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/src/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

</head>

<body>

    <div class="heading">
        <div class="brand">Election Commision of India</div>
        <div class="menu">
            <a href="/">Home</a>

            <?php if (isset($_SESSION['username'])) {
                // echo '<a href="/dashboard.php">Dashboard</a>';
                // echo ' <a href="/logout.php" class="logout">Logout</a>';
                echo '<div id="user_name"> 
                        <img src="/src/user_thumb.png" title="Profile"></img>
                        <div class="show" >  
                            <a>' . $_SESSION['username'] . ' </a>
                            <a href="/dashboard.php">Dashboard</a>
                            <a href="/logout.php" class="logout">Logout</a>
                        </div>
                      </div>';
            } else {
                echo '<a href="/login.php">Log In</a>';
                echo '<a href="/register.php">Register</a>';
            } ?>

        </div>

    </div>