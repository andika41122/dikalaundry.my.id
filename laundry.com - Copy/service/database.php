<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "laundry_com";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if (!$db) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
