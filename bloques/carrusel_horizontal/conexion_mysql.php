<?php
// Parámetros de la conexión
$servername = "localhost";
$username = "root";
$password = ""; // Cambia esto si tu usuario de MySQL tiene una contraseña
$dbname = "blogplayas2024_db";






$servername = "fdb1030.awardspace.net";
$username = "3714088_blogplayas2024";
$password = "Alberite-1234"; // Cambia esto si tu usuario de MySQL tiene una contraseña
$dbname = "3714088_blogplayas2024";

echo("ENTRA");
// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}else{
    echo("ENTRA");
} ?> 