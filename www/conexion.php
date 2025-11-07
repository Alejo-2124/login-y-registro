<?php
$host = "db";
$user = "usuario";
$pass = "contraseña";
$dbname = "login";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>