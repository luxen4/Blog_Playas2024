<?php 
$latitude  = 43.42970;  
$longitude = -2.81210; 

// Variables para el schema – Playa de Bakio
$schemaTitle       = "Playa de Bakio";
$schemaDescription = "Descubre la Playa de Bakio en Bizkaia, País Vasco: una extensa playa de arena dorada ideal para surfistas, familias y amantes de la naturaleza.";
$schemaUrl         = "https://www.tu-dominio.com/bakio/lugares-interes/playa-de-bakio"; // Cambia por la URL real
$schemaImage       = "https://www.tu-dominio.com/images/playa-de-bakio.jpg";            // Cambia por la URL real de la imagen principal
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Playa de Bakio",
    "addressLocality" => "Bakio",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48130",
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
    "https://turismo.euskadi.eus/es/playa-de-bakio/"
  ]
}
</script>
