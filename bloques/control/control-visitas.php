<?php
// Ruta del archivo CSV
$archivo = __DIR__ . '/visitas.csv'; 

// Datos simulados de visita
$ip = $_SERVER['REMOTE_ADDR'];
$url = $_SERVER['REQUEST_URI'];
$fecha = date('Y-m-d H:i:s');

// Cargar visitas previas
$datos = [];
if (file_exists($archivo)) {
    $f = fopen($archivo, 'r');
    while (($linea = fgetcsv($f)) !== false) {
        $clave = $linea[0] . '|' . $linea[3];
        $datos[$clave] = [
            'ip'    => $linea[0],
            'fecha' => $linea[1],
            'veces' => (int)$linea[2],
            'url'   => $linea[3],
        ];
    }
    fclose($f);
}

$clave_actual = $ip . '|' . $url;

if (isset($datos[$clave_actual])) {
    $datos[$clave_actual]['veces'] += 1;
    $datos[$clave_actual]['fecha'] = $fecha;
} else {
    $datos[$clave_actual] = [
        'ip'    => $ip,
        'fecha' => $fecha,
        'veces' => 1,
        'url'   => $url
    ];
}

// Guardar CSV
$f = fopen($archivo, 'w');
foreach ($datos as $fila) {
    fputcsv($f, [$fila['ip'], $fila['fecha'], $fila['veces'], $fila['url']]);
}
fclose($f);

// Enviar el correo con PHPMailer
require_once PATH_RAIZ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if (!file_exists(PATH_RAIZ . '/vendor/autoload.php')) {
    die("❌ No se encontró el autoload de Composer. Ejecuta 'composer install'.");
}


if (!class_exists('PHPMailer\PHPMailer\PHPMailer')) {
    die("❌ PHPMailer no encontrado. Ejecuta 'composer install'.");
}



$mail = new PHPMailer(true);

try {
    // Configuración SMTP (Gmail)
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'superlaya50@gmail.com';             // Tu correo
    $mail->Password = 'kiuy bdqh uceq davm';           // ⚠️ NO tu contraseña normal
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('superlaya50@gmail.com', 'Mi Web');
    $mail->addAddress('superlaya50@gmail.com'); // Destinatario (puede ser el mismo)

    $mail->isHTML(true);
    $mail->Subject = 'Nueva visita registrada';
    $mail->Body    = 'Se registró una nueva visita. Se adjunta el CSV.';

    $mail->addAttachment($archivo, 'visitas.csv');

    $mail->send();



    echo '✅ Correo enviado correctamente.';
} catch (Exception $e) {
    echo "❌ Error al enviar: {$mail->ErrorInfo}";
}
?>