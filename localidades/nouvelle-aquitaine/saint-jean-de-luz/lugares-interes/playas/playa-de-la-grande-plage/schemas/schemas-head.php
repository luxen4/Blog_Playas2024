<?php 
$latitude  = 43.4856;  // Coordenadas aproximadas para La Grande Plage, Biarritz
$longitude = -1.5586; 

// Variables para el schema – La Grande Plage
$schemaTitle       = "La Grande Plage - Biarritz";
$schemaDescription = "Descubre La Grande Plage en Biarritz, una emblemática playa urbana ideal para surfistas y turistas en la costa vasca francesa.";
$schemaUrl         = "https://www.tu-dominio.com/biarritz/lugares-interes/la-grande-plage"; // Actualiza con la URL real
$schemaImage       = "https://www.tu-dominio.com/images/la-grande-plage-1.jpg";           // Imagen destacada
$schemaAddress     = [
    "@type"            => "PostalAddress",
    "streetAddress"    => "Promenade de la Grande Plage",
    "addressLocality"  => "Biarritz",
    "addressRegion"    => "Nouvelle-Aquitaine",
    "postalCode"       => "64200",
    "addressCountry"   => "FR"
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
