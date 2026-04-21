<?php

$schemaTitle       = "San Sebastián, Gipuzkoa – Turismo en la costa del norte de España";
$schemaDescription = "Descubre San Sebastián, en Gipuzkoa: ciudad costera famosa por su Playa de la Concha, casco histórico, gastronomía y cultura vasca.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/gipuzkoa/san-sebastian/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/gipuzkoa/san-sebastian/img/san-sebastian.jpg";

$latitude  = 43.3183;
$longitude = -1.9812;

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
    "addressLocality": "San Sebastián",
    "addressRegion": "Gipuzkoa",
    "postalCode": "20003",
    "addressCountry": "ES"
  },
  "containsPlace": [
    {
      "@type": "Beach",
      "name": "Playa de la Concha"
    },
    {
      "@type": "Beach",
      "name": "Playa de Ondarreta"
    },
    {
      "@type": "TouristAttraction",
      "name": "Casco Antiguo"
    },
    {
      "@type": "TouristAttraction",
      "name": "Monte Igueldo"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/San_Sebasti%C3%A1n",
    "https://turismo.euskadi.eus"
  ]
}
</script>