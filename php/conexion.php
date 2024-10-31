<?php
$servername = "localhost";
$username = "root"; 
$password = "123456"; 
$dbname = "parcial";
$port = 3307

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
