<?php
// Variables para el schema
$title = "Iglesia de Santa María de la Asunción - Castro Urdiales";
$url = "https://www.tuweb.com/castro-urdiales/iglesia-santa-maria-asuncion"; // Cambia por la URL real
$image = "https://www.tuweb.com/images/iglesia-santa-maria-asuncion-1.jpg"; // Cambia por la URL real
$phone = "+34 942 85 00 00"; // Número ficticio, cambia si tienes real
$address = [
    "streetAddress" => "Calle Santa María, s/n",
    "addressLocality" => "Castro Urdiales",
    "addressRegion" => "Cantabria",
    "postalCode" => "39700",
    "addressCountry" => "ES"
];
$latitude = 43.3831;   // Aproximado, cambia si quieres
$longitude = -3.2175;  // Aproximado, cambia si quieres
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Place",
  "name": "Iglesia de Santa María de la Asunción",
  "image": "<?= $image ?>",
  "description": "Iglesia gótica emblemática en Castro Urdiales, Cantabria, con importancia histórica y arquitectónica.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "<?= $address['streetAddress'] ?>",
    "addressLocality": "<?= $address['addressLocality'] ?>",
    "addressRegion": "<?= $address['addressRegion'] ?>",
    "postalCode": "<?= $address['postalCode'] ?>",
    "addressCountry": "<?= $address['addressCountry'] ?>"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": <?= $latitude ?>,
    "longitude": <?= $longitude ?>
  },
  "telephone": "<?= $phone ?>",
  "url": "<?= $url ?>"
}
</script>