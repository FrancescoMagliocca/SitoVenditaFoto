<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "database_esame_tweb";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('connection failed.')</script>");
}

?>