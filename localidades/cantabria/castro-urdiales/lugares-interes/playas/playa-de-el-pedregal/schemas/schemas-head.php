<?php
$description_content = 'Descubre la Playa de El Pedregal en Castro Urdiales, una cala rocosa y tranquila, perfecta para la pesca y disfrutar de la naturaleza en Cantabria.';
$keywords_content = 'Playa de El Pedregal, Castro Urdiales, playas rocosas Cantabria, pesca recreativa, turismo natural, playas Cantabria';

$lugar_header = 'Playa de El Pedregal';
$tema = 'playa-de-el-pedregal';
$title = 'Playa de El Pedregal - Castro Urdiales';
$rutas = 'playa-de-el-pedregal-castro-urdiales-cantabria';
$color_page = 'stone'; // color para Tailwind, adapta si quieres
$tema_footer = '- Playa de El Pedregal -';

$latitude=43.3865; $longitude=-3.2161;

// JSON-LD básico para head (resumen del lugar)
$schemaBasic = [
  "@context" => "https://schema.org",
  "@type" => "TouristAttraction",
  "name" => $title,
  "description" => $description_content,
  "url" => "https://www.tu-dominio.com/castro-urdiales/lugares-interes/playa-de-el-pedregal",
  "image" => "https://www.tu-dominio.com/images/playa-de-el-pedregal-1.jpg",
  "address" => [
    "@type" => "PostalAddress",
    "addressLocality" => "Castro Urdiales",
    "addressRegion" => "Cantabria",
    "addressCountry" => "ES"
  ],
  "geo" => [
    "@type" => "GeoCoordinates",
    "latitude" => 43.3850,  // ajusta latitud real
    "longitude" => -3.2180  // ajusta longitud real
  ],
  "sameAs" => [
    "https://es.wikipedia.org/wiki/Castro-Urdiales",
    "https://www.turismodecantabria.com"
  ]
];
?>
<meta name="description" content="<?= htmlspecialchars($description_content) ?>">
<meta name="keywords" content="<?= htmlspecialchars($keywords_content) ?>">
<meta name="robots" content="index, follow">
<script type="application/ld+json">
<?= json_encode($schemaBasic, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>
