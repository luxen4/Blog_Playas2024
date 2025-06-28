<?php
// Variables para el schema
$schemaTitle = "Palacio Ochagarán - Castro Urdiales";
$schemaDescription = "Descubre el Palacio Ochagarán en Castro Urdiales, un emblemático edificio señorial del siglo XVII con una arquitectura tradicional cántabra y rica historia.";
$schemaUrl = "https://www.tu-dominio.com/castro-urdiales/lugares-interes/palacio-ochagaran"; // Cambia por la URL real
$schemaImage = "https://www.tu-dominio.com/images/palacio-ochagaran-1.jpg"; // Cambia por la URL real de la imagen principal
$schemaAddress = [
    "@type" => "PostalAddress",
    "streetAddress" => "Calle San Juan, 1",
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
  "image": "<?= $schemaImage ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "<?= $schemaAddress['streetAddress'] ?>",
    "addressLocality": "<?= $schemaAddress['addressLocality'] ?>",
    "addressRegion": "<?= $schemaAddress['addressRegion'] ?>",
    "postalCode": "<?= $schemaAddress['postalCode'] ?>",
    "addressCountry": "<?= $schemaAddress['addressCountry'] ?>"
  },
  "telephone": "<?= $schemaContact ?>",
  "sameAs": [
    "https://www.turismocastrourdiales.net"
  ]
}
</script>
