<?php

$schemaTitle       = "Orio, Gipuzkoa – Turismo en la costa del norte de España";
$schemaDescription = "Descubre Orio, en Gipuzkoa: un encantador pueblo marinero en la desembocadura del río Oria, con playa, puerto y tradición pesquera.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/gipuzkoa/orio/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/gipuzkoa/orio/img/orio.jpg";

$latitude  = 43.2780;
$longitude = -2.1260;

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
    "addressLocality": "Orio",
    "addressRegion": "Gipuzkoa",
    "postalCode": "20810",
    "addressCountry": "ES"
  },
  "containsPlace": [
    {
      "@type": "TouristAttraction",
      "name": "Puerto de Orio"
    },
    {
      "@type": "Beach",
      "name": "Playa de Orio"
    },
    {
      "@type": "TouristAttraction",
      "name": "Casco histórico de Orio"
    },
    {
      "@type": "TouristAttraction",
      "name": "Ría del Oria"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Orio",
    "https://turismo.euskadi.eus"
  ]
}
</script>