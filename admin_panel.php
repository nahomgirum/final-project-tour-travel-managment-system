<?php
session_start();
error_reporting(0);
@include 'config.php';

     ?>


<!DOCTYPE html>
<html>
<head>
	<script src="https://kit.fontawesome.com/5a14263cad.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="css/admin.css">
</head>
<body>
<div class="sidenav">
	<header class="h1"><a href="admin_panel.php"> <i class="fa-solid fa-home">  </i>WELCOME ADMIN</i></a></i></heaer>
    
    <ul class="ul1">
        <li><a href="db_control.php"> <i class="fa-solid fa-user">check users</i></i></a></li>
        <li><a href="n.html"> <i class="fa-solid fa-box">Pacakges</i></i></i></a></li>
        <li><a href="#.html"> <i class="fa-solid fa-book">Books</i></i></a></li>
        <li><a href="search.php"> <i class="fa-solid fa-search">search user</i></i></a></li>
        <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket">Logout</i></i></i></a></li>
    </ul>



</div>

<div class="main">
</div>
</body>
</html>