<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/cantabria/castro-urdiales/lugares-interes/localidad.php"; ?>
<?php
$tema = 'asador-la-perla';
$title = 'Asador La Perla - Castro Urdiales';

$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Este es solo un ejemplo, cámbialo con el correcto si es necesario
$description_content = 'Disfruta de una experiencia culinaria única en el Asador La Perla, un restaurante emblemático de Castro Urdiales, Cantabria, especializado en carnes y pescados a la parrilla.';
$keywords_content = 'Asador La Perla, Castro Urdiales, restaurante en Cantabria, parrillada, cocina tradicional, mariscos, carnes a la parrilla, gastronomía cántabra';


$rutas = 'asador-la-perla-castro-urdiales-cantabria';
$color_page = 'blue';
$tema_footer = '- Asador La Perla -';
?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/bloques/estructura/variables_comunes/defines.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES_CARPETA_HEAD_VARIABLES . "/meta_tags.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES_CARPETA_HEAD_VARIABLES . "/data-generico.php";  ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/etiquetas-meta.php"; ?>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/links-generico.php"; ?>
  <title><?= $title; ?></title>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/scripts-generico.php"; ?>

  {
  "@context": "https://schema.org",
  "@type": "Restaurant",
  "name": "Asador La Perla",
  "description": "Disfruta de una experiencia culinaria única en el Asador La Perla, un restaurante emblemático de Castro Urdiales, Cantabria, especializado en carnes y pescados a la parrilla.",
  "image": "https://tusitio.com/imagenes/asador-la-perla-castro.jpg",
  "address": {
  "@type": "PostalAddress",
  "addressLocality": "Castro-Urdiales",
  "addressRegion": "Cantabria",
  "addressCountry": "ES"
  },
  "geo": {
  "@type": "GeoCoordinates",
  "latitude": 43.3815,
  "longitude": -3.2190
  },
  "url": "https://tusitio.com/asador-la-perla-castro-urdiales.php",
  "telephone": "+34 942 87 23 45",
  "priceRange": "€€",
  "cuisine": "Spanish, Grilled Meat, Seafood",
  "servesCuisine": "Grilled Meat, Seafood",
  "menu": "https://tusitio.com/menu-asador-la-perla.php"
  }
  </script>


</head>

<body class="bg-orange-50">

  <!-- Header Section -->
  <header class="mb-1">
    <div class="bg-gradient-to-r from-<?= $color_page; ?>-600 via-sky-100 to-<?= $color_page; ?>-400 text-white text-center p-8 rounded-lg shadow-lg">
      <h1 class="text-4xl md:text-5xl font-extrabold mb-3 flex justify-center items-center gap-3">
        <i class="fas fa-map-marked-alt"></i> Asador La Perla
      </h1>
      <p class="text-lg md:text-xl">En el corazón de Castro Urdiales, <?= $region; ?>.</p>
    </div>
  </header>

  <!-- Main Content Section (Centered) -->
  <div class="container py-5 mx-auto max-w-7xl">
    <div class="col-12 col-md-10 mx-auto">

      <p><strong>Asador La Perla</strong> es un restaurante emblemático en Castro Urdiales. Conocido por su ambiente acogedor y su excelente cocina, este asador es una parada obligatoria para quienes visitan la región.</p>

      <p>Se encuentra en una ubicación privilegiada, ofreciendo vistas espectaculares al mar y fácil acceso desde el centro de la ciudad.</p>

      <p>Es famoso por sus platos a la parrilla, especialmente sus carnes y pescados frescos. Algunos de los platos más destacados incluyen <strong>Chuletas de cordero, Solomillo de ternera, Merluza a la brasa</strong> y <strong>Parrillada de mariscos</strong>.</p>

      <p>Ofrece un ambiente cálido y tradicional, con una decoración que refleja el carácter y la cultura de la región.<br>
        Su acogedor interior y su terraza con vistas al mar lo convierten en un lugar perfecto para disfrutar de una comida en cualquier época del año.</p>

      <div class="row my-4">
        <div class="col-md-4">
          <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG ?>/asadorlaperla1.jpg" alt="Imagen del Asador La Perla" class="gallery-img">
        </div>
        <div class="col-md-4">
          <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG ?>/contribution_gallery.jpg" alt="Plato de sardinas en el asador La Perla" class="gallery-img">
        </div>
        <div class="col-md-4">
          <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG ?>/parrillas-asador-la-perla.jpg" alt="Parrillada en el restaurante" class="gallery-img">
        </div>
        <p class="text-center text-muted">Algunas de las imágenes del Asador La Perla</p>
      </div>

      <p>Entre los servicios que ofrece se incluyen:
        <strong>Reservas previas, Menú del día y a la carta, Opciones para eventos y celebraciones, Atención personalizada.</strong>
      </p>

      <h5 class="mt-4">🕒 Horario</h5>
      <ul>
        <li>Lunes a Viernes: 13:00 - 16:00 y 20:00 - 23:00</li>
        <li>Sábados y Domingos: 13:00 - 23:00 (horario continuo)</li>
      </ul>

      <p class="mt-4">Si buscas una experiencia culinaria memorable en Castro Urdiales, el Asador La Perla es el lugar ideal. ¡No te lo pierdas!</p>

      <a href="<?= PATH_HREF_RAIZ_LOCALIDAD ?>/index.php" class="btn btn-outline-primary mt-3">← Volver a lugares de interés</a>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-<?= $color_page; ?>-100 text-center py-6 mt-12 text-sm text-<?= $color_page; ?>-800 shadow-inner">
    <p class="font-semibold text-lg"><?= $tema_footer; ?></p>
    <p>&copy; <?= NAME_BLOG; ?> – <?= AUTHOR; ?></p>
  </footer>

  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/anuncios/js/logica_anuncios.php"; ?>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/js_bootstrap/scripts-bootstrap.php"; ?>

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Restaurant",
      "name": "Asador La Perla",
      "description": "Disfruta de una experiencia culinaria única en el Asador La Perla, un restaurante emblemático de Castro Urdiales, Cantabria, especializado en carnes y pescados a la parrilla.",
      "image": "https://tusitio.com/imagenes/asador-la-perla.jpg",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Castro-Urdiales",
        "addressRegion": "Cantabria",
        "addressCountry": "ES"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 43.4072,
        "longitude": -3.2089
      },
      "url": "https://tusitio.com/asador-la-perla-castro-urdiales.php",
      "telephone": "+34 123 456 789",
      "openingHours": [
        "Mo-Fr 13:00-16:00",
        "Mo-Fr 20:00-23:00",
        "Sa-Su 13:00-23:00"
      ],
      "menu": "https://tusitio.com/menu-asador-la-perla.php",
      "priceRange": "€€€",
      "sameAs": [
        "https://www.facebook.com/AsadorLaPerla",
        "https://www.instagram.com/AsadorLaPerla"
      ]
    }
  </script>





</body>

</html>