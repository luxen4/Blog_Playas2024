<?php 
$latitude  = 43.42410;  
$longitude = -2.64800; 

// Variables para el schema – Playa de Laga
$schemaTitle       = "Playa de Laga - Ibarrangelu";
$schemaDescription = "Disfruta la Playa de Laga en Ibarrangelu, una joya natural dentro de la Reserva de Urdaibai: ideal para el surf, el senderismo y la desconexión en la costa vasca.";
$schemaUrl         = "https://www.tu-dominio.com/ibarrangelu/lugares-interes/playa-de-laga"; // Sustituye por tu URL real
$schemaImage       = "https://www.tu-dominio.com/images/playa-de-laga-1.jpg";                 // Sustituye por la imagen real
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Playa de Laga, s/n",
    "addressLocality" => "Ibarrangelu",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48311",
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
    "https://www.tu-dominio.com/ibarrangelu"
  ]
}
</script>
