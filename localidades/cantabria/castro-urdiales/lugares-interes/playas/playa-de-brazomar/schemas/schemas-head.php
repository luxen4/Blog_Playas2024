<?php
$schemaTitle = $schemaTitle ?? "Playa de Brazomar - Castro Urdiales";
$schemaDescription = $schemaDescription ?? "La Playa de Brazomar es una playa urbana situada en Castro Urdiales, Cantabria. Es conocida por su arena dorada, aguas tranquilas y servicios completos para el turismo familiar.";
$schemaUrl = $schemaUrl ?? "https://www.tu-dominio.com/castro-urdiales/lugares-interes/playa-de-brazomar";
$schemaImages = $schemaImages ?? [
  "https://www.tu-dominio.com/images/playa-de-brazomar-1.jpg",
  "https://www.tu-dominio.com/images/playa-de-brazomar-2.jpg"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "<?= $schemaTitle ?>",
  "description": "<?= $schemaDescription ?>",
  "url": "<?= $schemaUrl ?>",
  "image": <?= json_encode($schemaImages, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>,
  "isAccessibleForFree": true,
  "touristType": {
    "@type": "Audience",
    "audienceType": "Familias, turistas nacionales e internacionales"
  },
  "openingHours": "Mo-Su 00:00-23:59",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Castro Urdiales",
    "addressRegion": "Cantabria",
    "addressCountry": "ES"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 43.3842,
    "longitude": -3.2165
  },
  "containsPlace": {
    "@type": "Beach",
    "name": "Playa de Brazomar",
    "isAccessibleForFree": true
  },
  "sameAs": [
    "https://es.wikipedia.org/wiki/Castro-Urdiales",
    "https://www.turismodecantabria.com/descubrela/103-playas/497-playa-de-brazomar"
  ]
}
</script>





