<?php

$schemaTitle       = "Suances, Cantabria – Turismo en la costa del norte de España";
$schemaDescription = "Descubre Suances, en Cantabria: playas como Los Locos y La Concha, surf, acantilados y un ambiente único en la costa del mar Cantábrico.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/suances/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/suances/img/suances-cantabria.jpg";

$latitude  = 43.4265;
$longitude = -4.0435;

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
    "addressLocality": "Suances",
    "addressRegion": "Cantabria",
    "postalCode": "39340",
    "addressCountry": "ES"
  },
  "containsPlace": [
    {
      "@type": "Beach",
      "name": "Playa de Los Locos"
    },
    {
      "@type": "Beach",
      "name": "Playa de La Concha"
    },
    {
      "@type": "Beach",
      "name": "Playa de la Ribera"
    },
    {
      "@type": "TouristAttraction",
      "name": "Punta del Dichoso"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Suances",
    "https://turismodecantabria.com"
  ]
}
</script>