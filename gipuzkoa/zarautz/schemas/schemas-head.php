<?php

$schemaTitle       = "Zarautz, Gipuzkoa – Turismo en la costa del norte de España";
$schemaDescription = "Descubre Zarautz, en Gipuzkoa: playa extensa, surf, casco histórico y gastronomía vasca en la costa del País Vasco.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/gipuzkoa/zarautz/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/gipuzkoa/zarautz/img/zarautz.jpg";

$latitude  = 43.2833;
$longitude = -2.1672;

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
    "addressLocality": "Zarautz",
    "addressRegion": "Gipuzkoa",
    "postalCode": "20800",
    "addressCountry": "ES"
  },
  "containsPlace": [
    {
      "@type": "Beach",
      "name": "Playa de Zarautz"
    },
    {
      "@type": "TouristAttraction",
      "name": "Paseo Marítimo"
    },
    {
      "@type": "TouristAttraction",
      "name": "Casco Antiguo"
    },
    {
      "@type": "TouristAttraction",
      "name": "Monte Talaimendi"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Zarautz",
    "https://turismo.euskadi.eus"
  ]
}
</script>