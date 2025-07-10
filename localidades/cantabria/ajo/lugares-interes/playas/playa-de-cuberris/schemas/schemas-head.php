<?php 
$latitude  = 43.50710;  
$longitude = -3.62430; 

// Variables para el schema – Playa de Cuberris
$schemaTitle       = "Playa de Cuberris - Ajo";
$schemaDescription = "Descubre la Playa de Cuberris en Ajo, Cantabria: una playa abierta al mar Cantábrico con olas ideales para el surf, naturaleza salvaje y servicios de temporada.";
$schemaUrl         = "https://www.tu-dominio.com/ajo/lugares-interes/playa-de-cuberris"; // Sustituye por tu URL real
$schemaImage       = "https://www.tu-dominio.com/images/playa-de-cuberris-1.jpg";         // Sustituye por la imagen real
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Barrio la Playa, s/n",
    "addressLocality" => "Ajo",
    "addressRegion"   => "Cantabria",
    "postalCode"      => "39170",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Beach",
  "name": "<?= $schemaTitle ?>",
  "description": "<?= $schemaDescription ?>",
  "url": "<?= $schemaUrl ?>",
  "image": "<?= $schemaImage ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "<?= $schemaAddress['streetAddress'] ?>",
    "addressLocality": "<?= $schemaAddress['addressLocality'] ?>",
    "addressRegion": "<?= $schemaAddress['addressRegion'] ?>",
    "postalCode": "<?= $schemaAddress['postalCode'] ?>",
    "addressCountry": "<?= $schemaAddress['addressCountry'] ?>"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": <?= $latitude ?>,
    "longitude": <?= $longitude ?>
  },
  "sameAs": [
    "https://www.tu-dominio.com/ajo"
  ]
}
</script>
