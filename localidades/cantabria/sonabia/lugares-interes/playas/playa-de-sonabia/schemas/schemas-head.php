<?php 
$latitude  = 43.44250;  
$longitude = -3.40500; 

// Variables para el schema – Playa de Sonabia
$schemaTitle       = "Playa de Sonabia - Sonabia";
$schemaDescription = "Descubre la Playa de Sonabia en Sonabia, Cantabria: una cala virgen de arena dorada rodeada de acantilados y pinares, perfecta para el baño y el senderismo costero.";
$schemaUrl         = "https://www.tu-dominio.com/sonabia/lugares-interes/playa-de-sonabia"; // Cambia por la URL real
$schemaImage       = "https://www.tu-dominio.com/images/playa-de-sonabia-1.jpg";         // Cambia por la URL real de la imagen principal
$schemaAddress     = [
    "@type"         => "PostalAddress",
    "streetAddress" => "Camino de Sonabia",
    "addressLocality" => "Sonabia",
    "addressRegion"   => "Cantabria",
    "postalCode"      => "39749",
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
    "https://www.tu-dominio.com/sonabia"
  ]
}
</script>
