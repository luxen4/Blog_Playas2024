<?php

$schemaTitle       = "Somo, Cantabria – Turismo en la costa del norte de España";
$schemaDescription = "Descubre Somo, en Cantabria: una de las playas más largas del norte, ideal para surf, paseos y disfrutar de las vistas a la bahía de Santander.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/somo/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/somo/img/somo-cantabria.jpg";

$latitude  = 43.4625;
$longitude = -3.7565;

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
    "addressLocality": "Somo",
    "addressRegion": "Cantabria",
    "postalCode": "39140",
    "addressCountry": "ES"
  },
  "containsPlace": [
    {
      "@type": "Beach",
      "name": "Playa de Somo"
    },
    {
      "@type": "Beach",
      "name": "Playa de Loredo"
    },
    {
      "@type": "TouristAttraction",
      "name": "Dunas de Somo"
    },
    {
      "@type": "TouristAttraction",
      "name": "Bahía de Santander"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Somo",
    "https://turismodecantabria.com"
  ]
}
</script>