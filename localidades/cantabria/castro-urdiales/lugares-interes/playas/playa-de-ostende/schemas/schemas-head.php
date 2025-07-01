<?php
// Variables para el schema
$schemaTitle = "Playa de Ostende - Castro Urdiales";
$schemaDescription = "Explora la Playa de Ostende en Castro Urdiales, una extensa playa de arena dorada y aguas tranquilas, ideal para nadar, practicar deportes acuáticos y disfrutar del paisaje cántabro.";
$schemaUrl = "https://www.tu-dominio.com/castro-urdiales/lugares-interes/playa-de-ostende"; // Cambia por la URL real
$schemaImage = "https://www.tu-dominio.com/images/playa-de-ostende-1.jpg"; // Cambia por la URL real de la imagen principal
$schemaAddress = [
    "@type" => "PostalAddress",
    "streetAddress" => "Avenida de la Playa",
    "addressLocality" => "Castro Urdiales",
    "addressRegion" => "Cantabria",
    "postalCode" => "39700",
    "addressCountry" => "ES"
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
    "latitude": 43.3879,
    "longitude": -3.2131
  },
  "sameAs": [
    "https://www.turismocastrourdiales.net"
  ]
}
</script>
