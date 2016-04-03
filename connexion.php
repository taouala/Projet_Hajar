<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_labo";

// Create connection
global $con;
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

 ?>
