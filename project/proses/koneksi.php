<?php
$hostname="localhost";
$username = "root";
$password = "";
$database = "herbal";

$connect = new mysqli($hostname, $username, $password, $database);
    if($connect->connect_error){
        die('koneksi gagal' . $connect->connect_error);
    }

?>