<?php
// Determinar los parámetros de conexión en función del servidor
$servername = $_SERVER['SERVER_NAME'];

if ($servername == "localhost"){
    $servername = "localhost";
    $username = "root";
    $password = ""; // Cambia esto si tu usuario de MySQL tiene una contraseña
    $dbname = "blogplayas2025_db";
} elseif($servername == "playas2024.kesug.com"){
    $servername = "sql301.byetcluster.com";
    $username = "if0_36676672";
    $password = "bfsgEjznrBWCKzj";
    $dbname = "if0_36676672_blog_playas2025";
}

try {
    // Crear una conexión PDO
    $dsn = "mysql:host=$servername;dbname=$dbname";
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    );
    
    $conn = new PDO($dsn, $username, $password, $options);

    //echo "Conexión exitosa";
} catch (PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}
?>