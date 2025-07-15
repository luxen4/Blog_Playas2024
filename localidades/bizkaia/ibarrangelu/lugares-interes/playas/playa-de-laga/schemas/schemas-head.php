<?php 
$latitude  = 43.3714;  
$longitude = -2.8981; 

// Variables para el schema – Playa de Laga
$schemaTitle       = "Playa de Laga - Urdaibai";
$schemaDescription = "Descubre la Playa de Laga en Urdaibai, Bizkaia: una playa natural de arena fina ideal para surfistas, senderistas y amantes de la naturaleza.";
$schemaUrl         = "https://www.tu-dominio.com/urdaibai/lugares-interes/playa-de-laga"; // Cambia por la URL real
$schemaImage       = "https://www.tu-dominio.com/images/playa-de-laga-1.jpg";            // Cambia por la URL real de la imagen principal
$schemaAddress     = [
    "@type"            => "PostalAddress",
    "streetAddress"    => "Barrio Laga",
    "addressLocality"  => "Laga",
    "addressRegion"    => "País Vasco",
    "postalCode"       => "48315",
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
    "https://www.tu-dominio.com/urdaibai"
  ]
}
</script>
