<?php
/*$servername = "localhost";
$username = "d0l310_1020db";
$password = "d0l310_1020db";
$db = "d0l310_1020db";*/

$servername = "localhost";
$username = "root";
$password = "";
$db = "d0l310_1020db";
//Establish Connnecion
$connect = new mysqli($servername, $username, $password, $db) or die($mysqli->error);
?>