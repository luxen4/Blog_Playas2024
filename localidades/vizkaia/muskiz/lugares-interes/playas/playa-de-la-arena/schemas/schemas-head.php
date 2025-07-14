<?php 
$latitude  = 43.37210;  
$longitude = -3.11230; 

// Variables para el schema – Playa de La Arena
$schemaTitle       = "Playa de La Arena - Muskiz";
$schemaDescription = "Descubre la Playa de La Arena en Muskiz, vizkaia: una extensa playa de arena dorada ideal para familias, surfistas y senderistas costeros.";
$schemaUrl         = "https://www.tu-dominio.com/muskiz/lugares-interes/playa-de-la-arena"; // Cambia por la URL real
$schemaImage       = "https://www.tu-dominio.com/images/playa-de-la-arena-muskiz-1.jpg";     // Cambia por la URL real de la imagen principal
$schemaAddress     = [
    "@type"            => "PostalAddress",
    "streetAddress"    => "Barrio La Arena",
    "addressLocality"  => "Muskiz",
    "addressRegion"    => "País Vasco",
    "postalCode"       => "48550",
    "addressCountry"   => "ES"
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
    "https://www.tu-dominio.com/muskiz"
  ]
}
</script>
