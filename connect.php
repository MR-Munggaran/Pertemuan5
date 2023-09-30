<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "web23";

$conn = mysqli_connect($serverName,$userName,$password,$dbName);

if(!$conn){
    die("Koneksi gagal");
}
?>