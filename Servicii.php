<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="servicii.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicii</title>
</head>
<body>
    <div class="hero"></div>
    <!--<a href="index.php" class="logo"><img src="logoo.jfif" alt="Logo"></a>-->
	<?php include "php/logo.php"; ?>
    <div class="content-container">
        <h1>Servicii</h1>
        <div class="services">
            <h2>Instalare Windows</h2>
            <ul >
                <li><a href="#" class="service-link" data-service="windows11">Instalare Windows 11</a></li>
                <li><a href="#" class="service-link" data-service="windows10">Instalare Windows 10</a></li>
                <li><a href="#" class="service-link" data-service="windows81">Instalare Windows 8.1</a></li>
                <li><a href="#" class="service-link" data-service="windows7">Instalare Windows 7</a></li>
            </ul>
            <h2>Instalare Linux</h2>
            <ul>
                <li><a href="#" class="service-link" data-service="ubuntu">Instalare Ubuntu</a></li>
                <li><a href="#" class="service-link" data-service="centos">Instalare CentOS</a></li>
                <li><a href="#" class="service-link" data-service="kateos">Instalare Kate OS</a></li>
            </ul>
            <h2>Service-Reparații</h2>
            <ul>
                <li><a href="#" class="service-link" data-service="curatare">Curățare Laptop</a></li>
                <li><a href="#" class="service-link" data-service="ssd">Upgrade SSD/M.2</a></li>
                <li><a href="#" class="service-link" data-service="pasta">Înlocuire Pastă Termică</a></li>
                <li><a href="#" class="service-link" data-service="tastatura">Schimbare Tastatură</a></li>
            </ul>
        </div>
    </div>

    
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div id="modal-info"></div>
        </div>
    </div>

    <script src="servicii.js"></script>
</body>
</html>
