
<?php
// A base de datos sumar una visita //
include_once './../../../../bloques/conexion_mysql.php'; 



// Función que devuelve la ip del visitante
function getVisitorIP() {
    // Check for shared internet/ISP IP
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    // Check for IPs passing through proxies
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    // Check for the remote address
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$visitorIP = getVisitorIP();
//echo "La IP del visitante es: " . $visitorIP;
?>



<?php 


// Obtener la URL actual
$url = $_SERVER['REQUEST_URI'];
$fecha = date('Y-m-d');

// Preparar la declaración SQL
$sql = "INSERT INTO visitas_webs (url_, fecha) VALUES (?, ?)";
$stmt = $conn->prepare($sql);

// Verificar si la declaración se preparó correctamente
if ($stmt === false) {
    die("Error al preparar la declaración: " . $conn->error);
}

// Bind de parámetros
$stmt->bind_param("ss", $url, $fecha);

// Ejecutar la declaración
$stmt->execute();

// Verificar si la ejecución fue exitosa
if ($stmt->error) {
    echo "Error en la ejecución: " . $stmt->error;
} else {
    // echo "Visita registrada correctamente.";
}

// Cerrar la declaración y la conexión
$stmt->close();
$conn->close();

?>