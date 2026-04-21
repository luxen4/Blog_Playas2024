<?php

$schemaTitle       = "Zumaia, Gipuzkoa – Turismo en la costa del norte de España";
$schemaDescription = "Descubre Zumaia, en Gipuzkoa: famoso por sus acantilados, el flysch y playas impresionantes en la costa del País Vasco.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/gipuzkoa/zumaia/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/gipuzkoa/zumaia/img/zumaia.jpg";

$latitude  = 43.3133;
$longitude = -2.2770;

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
    "addressLocality": "Zumaia",
    "addressRegion": "Gipuzkoa",
    "postalCode": "20750",
    "addressCountry": "ES"
  },
  "containsPlace": [
    {
      "@type": "Beach",
      "name": "Playa de Itzurun"
    },
    {
      "@type": "TouristAttraction",
      "name": "Flysch de Zumaia"
    },
    {
      "@type": "TouristAttraction",
      "name": "Casco histórico de Zumaia"
    },
    {
      "@type": "TouristAttraction",
      "name": "Puerto de Zumaia"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Zumaia",
    "https://turismo.euskadi.eus"
  ]
}
</script>