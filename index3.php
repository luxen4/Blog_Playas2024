<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Galería con Lightbox</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Lightbox2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            padding: 20px;
            text-align: center;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .gallery img {
            width: 300px;
            border: 3px solid #ddd;
            border-radius: 8px;
            transition: transform 0.2s ease;
        }

        .gallery img:hover {
            transform: scale(1.03);
            border-color: #aaa;
        }
    </style>
</head>
<body>

    <h1>Galería Playa de Ostende</h1>

    <div class="gallery">
        <a href="https://turismodecantabria.com/wp-content/uploads/2023/05/92e87b79-a4f1-7bcb-1f2c-4480a8ee20ad.jpg" data-lightbox="ostende" data-title="Vista de la Playa 1">
            <img src="https://turismodecantabria.com/wp-content/uploads/2023/05/92e87b79-a4f1-7bcb-1f2c-4480a8ee20ad-400x300.jpg" alt="Vista 1">
        </a>
        <a href="https://turismodecantabria.com/wp-content/uploads/2023/05/92e87b79-a4f1-7bcb-1f2c-4480a8ee20ad.jpg" data-lightbox="ostende" data-title="Vista de la Playa 2">
            <img src="https://turismodecantabria.com/wp-content/uploads/2023/05/92e87b79-a4f1-7bcb-1f2c-4480a8ee20ad-400x300.jpg" alt="Vista 2">
        </a>
        <a href="https://turismodecantabria.com/wp-content/uploads/2023/05/92e87b79-a4f1-7bcb-1f2c-4480a8ee20ad.jpg" data-lightbox="ostende" data-title="Vista de la Playa 3">
            <img src="https://turismodecantabria.com/wp-content/uploads/2023/05/92e87b79-a4f1-7bcb-1f2c-4480a8ee20ad-400x300.jpg" alt="Vista 3">
        </a>
    </div>

    <!-- Lightbox2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    <script>
        lightbox.option({
            resizeDuration: 200,
            wrapAround: true
        });
    </script>

</body>
</html>