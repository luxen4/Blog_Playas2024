<?php

$schemaTitle       = "Hondarribia, Gipuzkoa – Turismo en la costa del norte de España";
$schemaDescription = "Descubre Hondarribia, en Gipuzkoa: una ciudad amurallada junto al mar, con casco histórico, puerto pesquero, playa y vistas a la bahía de Txingudi.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/gipuzkoa/hondarribia/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/gipuzkoa/hondarribia/img/hondarribia.jpg";

$latitude  = 43.3620;
$longitude = -1.7910;

?>

<!-- Schema.org JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristDestination",
  "name": "<?= $schemaTitle ?>",
  "description": "<?= $schemaDescription ?>",
  "url": "<?= $schemaUrl ?>",
  "image": "<?= $schemaImage ?>",
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": <?= $latitude ?>,
    "longitude": <?= $longitude ?>
  },
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Hondarribia",
    "addressRegion": "Gipuzkoa",
    "postalCode": "20280",
    "addressCountry": "ES"
  },
  "containsPlace": [
    {
      "@type": "TouristAttraction",
      "name": "Casco histórico de Hondarribia"
    },
    {
      "@type": "TouristAttraction",
      "name": "Puerto de Hondarribia"
    },
    {
      "@type": "Beach",
      "name": "Playa de Hondarribia"
    },
    {
      "@type": "TouristAttraction",
      "name": "Barrio de la Marina"
    },
    {
      "@type": "TouristAttraction",
      "name": "Fuerte de Guadalupe"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Hondarribia",
    "https://turismo.euskadi.eus"
  ]
}
</script>