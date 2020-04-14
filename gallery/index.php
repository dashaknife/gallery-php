<?php
require "Header.php";
$page = $_GET['page'];
$page=stripslashes($page); //'/'
$page=htmlentities($page); //символы в соответствующие HTML-сущности
$page=addslashes($page); //Экранирует спецсимволы в строке
require "$page";
require "footer.php";
?>