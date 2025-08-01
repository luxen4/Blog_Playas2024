<?php 
$latitude  = 43.497053834843534;  
$longitude = -3.6201546712108055; 

// Variables para el schema – Playa de Antuerta
$schemaTitle       = "Playa de Antuerta - Ajo";
$schemaDescription = "Descubre la Playa de Antuerta en Ajo, Cantabria: una playa salvaje, tranquila y rodeada de naturaleza, ideal para senderismo y desconexión.";
$schemaUrl         = "https://www.tu-dominio.com/ajo/lugares-interes/playa-de-antuerta"; // Cambia por la URL real
$schemaImage       = "https://www.tu-dominio.com/images/playa-de-antuerta-1.jpg";       // Cambia por la URL real de la imagen principal
$schemaAddress     = [
    "@type"         => "PostalAddress",
    "streetAddress" => "Playa de Antuerta",
    "addressLocality" => "Ajo",
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
    "https://www.tu-dominio.com/ajo"
  ]
}
</script>
