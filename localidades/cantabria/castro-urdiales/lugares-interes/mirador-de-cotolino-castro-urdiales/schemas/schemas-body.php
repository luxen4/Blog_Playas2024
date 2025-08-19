<?php
// Variables para el schema del Mirador de Cotolino
$schemaTitle = "Mirador de Cotolino - Castro Urdiales";
$schemaDescription = "El Mirador de Cotolino en Castro Urdiales es un punto panorámico desde donde contemplar el mar Cantábrico, pasear y disfrutar de atardeceres únicos.";
$schemaUrl = "https://www.tu-dominio.com/castro-urdiales/lugares-interes/mirador-de-cotolino"; // Cambia por la URL real
$schemaImage1 = "https://www.tu-dominio.com/images/mirador-de-cotolino-1.jpg"; 
$schemaImage2 = "https://www.tu-dominio.com/images/mirador-de-cotolino-2.jpg"; 
$schemaAddress = [
    "@type" => "PostalAddress",
    "streetAddress" => "Mirador de Cotolino",
    "addressLocality" => "Castro Urdiales",
    "addressRegion" => "Cantabria",
    "postalCode" => "39700",
    "addressCountry" => "ES"
];
$schemaContact = "+34 942 85 90 65";
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "<?= $schemaTitle ?>",
  "description": "<?= $schemaDescription ?>",
  "url": "<?= $schemaUrl ?>",
  "image": [
    "<?= $schemaImage1 ?>",
    "<?= $schemaImage2 ?>"
  ],
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
    "latitude": "43.3809",  
    "longitude": "-3.2215"  
  },
  "telephone": "<?= $schemaContact ?>",
  "sameAs": [
    "https://www.turismocastrourdiales.net"
  ]
}
</script>
