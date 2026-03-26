<?php
// Título y meta
$title = "Página de prueba con publicidad AdCash";
$description = "Ejemplo funcional de integración de AdCash con runAutoTag en PHP.";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $description ?>">
    <title><?= $title ?></title>

    <!-- Estilos opcionales -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 2rem;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        h1 {
            color: #333;
        }

        .publicidad {
            margin-top: 2rem;
            padding: 1rem;
            border: 1px dashed #007bff;
            background-color: #eaf4ff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Integración de Publicidad AdCash</h1>
        <p>Este es un ejemplo funcional de cómo incluir publicidad de AdCash usando <code>runAutoTag</code>.</p>

        <div class="publicidad">
            <!-- Zona donde aparecerán los anuncios -->
            <p><strong>Zona de anuncios:</strong> Esta zona será gestionada automáticamente por AdCash.</p>
        </div>
    </div>

    <!-- Código de AdCash (runAutoTag) -->
    <script id="aclib" type="text/javascript" src="//acscdn.com/script/aclib.js"></script>
    <script type="text/javascript">
        aclib.runAutoTag({
            zoneId: 'mnaewnieki', // Usa el Zone ID real que te ha dado AdCash
        });
    </script>
</body>
</html>
