<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/logo.jpg" type="image/jpg">
</head>

<body>
<!-- Header -->
<header class="header">
    <div class="container">
        <img class="header__logo" src="img/logo.jpg" alt="">
    </div>
</header>
<div class="overlay">
    <nav class="overlayMenu">
        <ul role="menuu">
            <li><a href="gallery.html" role="menuitem">home</a></li>
            <li><a href="history.html" role="menuitem">history</a></li>
            <li><a href="#" role="menuitem">Exhibits</a></li>
            <li><a href="#" role="menuitem">Events</a></li>
            <li><a href="#" role="menuitem">About us</a></li>
            <li><a href="#" role="menuitem">Concact</a></li>
        </ul>
    </nav>
</div>

<div class="navBurger" role="navigation" id="navToggle"></div>
<div class="block"></div>
<?php
session_start();
if(!empty($_SESSION['Name'])and !empty($_SESSION['Surname'])){

}
echo "<h2 align='right'>";
echo $_SESSION['Name'], " ";
echo $_SESSION['Surname'];
echo "</h2>";
?>

