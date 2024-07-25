<?php
// Parámetros de la conexión
$servername = "localhost";
$username = "root";
$password = ""; // Cambia esto si tu usuario de MySQL tiene una contraseña
$dbname = "blogplayas2024_db";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
} ?> 