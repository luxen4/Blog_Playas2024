<?php 
$latitude  = 43.48320;  
$longitude = -1.56160; 

// Variables para el schema – La Grande Plage (Biarritz)
$schemaTitle       = "La Grande Plage - Biarritz";
$schemaDescription = "Descubre La Grande Plage de Biarritz en Nouvelle-Aquitaine, Francia: una playa icónica de arena dorada, ideal para el surf, paseos costeros y disfrutar del ambiente urbano junto al mar.";
$schemaUrl         = "https://www.tu-dominio.com/biarritz/lugares-interes/la-grande-plage"; // Cambia por la URL real
$schemaImage       = "https://www.tu-dominio.com/images/la-grande-plage-biarritz.jpg";       // Cambia por la URL real de la imagen principal
$schemaAddress     = [
    "@type"         => "PostalAddress",
    "streetAddress" => "La Grande Plage",
    "addressLocality" => "Biarritz",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "64200",
    "addressCountry"  => "FR"
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
    "https://www.tu-dominio.com/biarritz"
  ]
}
</script>
