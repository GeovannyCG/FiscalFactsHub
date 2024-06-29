<?php
$host = "localhost";
$user = "root";
$password = "";
$name_db = "fiscalfactshub_db";

$connect = mysqli_connect($host, $user, $password, $name_db);

if(!$connect) {
    die("Conexion no posible: ".mysqli_connect_error());
}