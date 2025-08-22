<?php 
$latitude  = 43.42440;  
$longitude = -2.65280; 

// Variables para el schema – Cabo Ogoño
$schemaTitle       = "Cabo Ogoño - Ibarrangelu";
$schemaDescription = "Explora el Cabo Ogoño en Ibarrangelu, Bizkaia: un impresionante acantilado en la Reserva de la Biosfera de Urdaibai, con rutas de senderismo, vistas espectaculares y naturaleza salvaje frente al mar Cantábrico.";
$schemaUrl         = "https://www.tu-dominio.com/ibarrangelu/lugares-interes/cabo-ogono"; // Sustituye por tu URL real
$schemaImage       = "https://www.tu-dominio.com/images/cabo-ogono.jpg";                   // Sustituye por la imagen real
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Cabo Ogoño, s/n",
    "addressLocality" => "Ibarrangelu",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48311",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Landform",
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
