<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "pj_jam";  // Ganti dengan nama database Anda

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
