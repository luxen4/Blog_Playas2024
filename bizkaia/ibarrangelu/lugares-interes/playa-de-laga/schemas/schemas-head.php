<?php 
$latitude  = 43.42290;  
$longitude = -2.65030; 

// Variables para el schema – Playa de Laga
$schemaTitle       = "Playa de Laga - Ibarrangelu";
$schemaDescription = "Descubre la Playa de Laga en Ibarrangelu, Bizkaia: una playa virgen dentro de la Reserva de la Biosfera de Urdaibai, perfecta para el surf, naturaleza y descanso en un entorno protegido.";
$schemaUrl         = "https://www.tu-dominio.com/ibarrangelu/lugares-interes/playa-de-laga"; // Sustituye por tu URL real
$schemaImage       = "https://www.tu-dominio.com/images/playa-de-laga.jpg";                   // Sustituye por la imagen real
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Barrio Laga, s/n",
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
