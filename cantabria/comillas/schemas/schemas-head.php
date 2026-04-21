<?php

$schemaTitle       = "Comillas, Cantabria – Turismo en la costa del norte de España";
$schemaDescription = "Descubre Comillas, en Cantabria: arquitectura modernista, playas, patrimonio histórico y un entorno único en la costa del mar Cantábrico.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/comillas/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/comillas/img/comillas-cantabria.jpg";

$latitude  = 43.3855;
$longitude = -4.2918;

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
    "addressLocality": "Comillas",
    "addressRegion": "Cantabria",
    "postalCode": "39520",
    "addressCountry": "ES"
  },
  "containsPlace": [
    {
      "@type": "TouristAttraction",
      "name": "Capricho de Gaudí"
    },
    {
      "@type": "TouristAttraction",
      "name": "Palacio de Sobrellano"
    },
    {
      "@type": "Beach",
      "name": "Playa de Comillas"
    },
    {
      "@type": "TouristAttraction",
      "name": "Casco Histórico de Comillas"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Comillas",
    "https://turismodecantabria.com"
  ]
}
</script>