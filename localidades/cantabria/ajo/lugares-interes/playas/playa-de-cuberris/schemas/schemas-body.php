<?php
// Variables reutilizables para Playa de Cuberris en Ajo
$schemaTitle        = $schemaTitle        ?? "Playa de Cuberris - Ajo";
$schemaDescription  = $schemaDescription  ?? "Descubre la Playa de Cuberris en Ajo, Cantabria: una playa abierta al mar Cantábrico con olas ideales para el surf, naturaleza salvaje y servicios de temporada.";
$schemaUrl          = $schemaUrl          ?? "https://www.tu-dominio.com/ajo/lugares-interes/playa-de-cuberris";
$schemaImage        = $schemaImage        ?? "https://www.tu-dominio.com/images/playa-de-cuberris-1.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Barrio la Playa, s/n",
    "addressLocality" => "Ajo",
    "addressRegion"   => "Cantabria",
    "postalCode"      => "39170",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Place",
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
    "latitude": 43.5071,
    "longitude": -3.6243
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Aparcamiento cercano",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Accesible para familias",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Duchas disponibles (en verano)",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Presencia de socorristas (en temporada)",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Ideal para surf",
      "value": true
    }
  ],
  "sameAs": [
    "https://www.tu-dominio.com/ajo"
  ]
}
</script>
