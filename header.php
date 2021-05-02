<?php 
session_id(md5($_SERVER['REMOTE_ADDR']));
session_start();


session_commit();
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Burak Keskin">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
  <div id = "container">
<div id = "social">
  <font>Hotel Manager</font>
  <a href="index.php"><i class="fas fa-home"></i>HomePage</a>
    <a href="gallery.php"><i class="fas fa-images"></i>Gallery</a>
    <a href="/Hotel/index.php#About"> <i class="fas fa-users"></i>About</a>
    <a href="/Hotel/index.php#Contact"> <i class="fas fa-address-book"></i>Contact Us</a>
    <a href="loginreg.php"> <i class="fas fa-user-alt"></i>Sign In/Sign Up</a>
    <a href="https://www.facebook.com/Grand-Antalya-Hotel-101651651586336/" target="_blank"><i class="fab fa-facebook"></i></a>
    <a href="https://www.instagram.com/grandantalyahotel/?igshid=mjw9j98ox24r" target="_blank"><i class="fab fa-instagram"></i></a>
    <a href="https://twitter.com/AntalyaGrand" target="_blank"><i class="fab fa-twitter"></i></a>
  
</div>
 