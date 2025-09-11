<?php
// Variables reutilizables para la Torre de Muskiz
$schemaTitle        = $schemaTitle        ?? "Torre de Muskiz - Muskiz";
$schemaDescription  = $schemaDescription  ?? "Descubre la Torre de Muskiz en Bizkaia: un edificio histórico emblemático de la Edad Media, hoy convertido en espacio cultural y turístico.";
$schemaUrl          = $schemaUrl          ?? "https://www.tu-dominio.com/muskiz/lugares-interes/torre-de-muskiz";
$schemaImage        = $schemaImage        ?? "https://www.tu-dominio.com/images/torre-de-muskiz.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Calle Torre, s/n",
    "addressLocality" => "Muskiz",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48550",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LandmarksOrHistoricalBuildings",
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
    "latitude": 43.3472,
    "longitude": -3.0483
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Visitas culturales",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Arquitectura medieval",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Eventos y exposiciones",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Espacio turístico abierto",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso desde Muskiz",
      "value": true
    }
  ],
  "sameAs": [
    "https://www.tu-dominio.com/muskiz"
  ]
}
</script>
