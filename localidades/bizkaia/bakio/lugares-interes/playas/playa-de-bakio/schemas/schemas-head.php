<?php 
$latitude  = 43.42490;  
$longitude = -2.80750; 

// Variables para el schema – Playa de Bakio
$schemaTitle       = "Playa de Bakio - Bizkaia";
$schemaDescription = "Descubre la Playa de Bakio en Bizkaia: una extensa playa del litoral vasco, ideal para surfistas, familias y amantes del paisaje atlántico.";
$schemaUrl         = "https://www.tu-dominio.com/bakio/lugares-interes/playa-de-bakio"; // Sustituye por tu URL real
$schemaImage       = "https://www.tu-dominio.com/images/playa-de-bakio-1.jpg";         // Sustituye por la imagen real
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Bakio Playa, s/n",
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
    "https://www.tu-dominio.com/bakio"
  ]
}
</script>
