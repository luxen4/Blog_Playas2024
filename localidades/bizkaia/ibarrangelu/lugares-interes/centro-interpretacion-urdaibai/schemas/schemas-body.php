<?php
// Variables reutilizables para el Centro de Interpretación de Urdaibai en Ibarrangelu
$schemaTitle        = $schemaTitle        ?? "Centro de Interpretación de Urdaibai - Ibarrangelu";
$schemaDescription  = $schemaDescription  ?? "Visita el Centro de Interpretación de Urdaibai en Ibarrangelu, Bizkaia: un espacio de educación ambiental y observación de aves dentro de la Reserva de la Biosfera de Urdaibai.";
$schemaUrl          = $schemaUrl          ?? "https://www.tu-dominio.com/ibarrangelu/lugares-interes/centro-interpretacion-urdaibai";
$schemaImage        = $schemaImage        ?? "https://www.tu-dominio.com/images/centro-interpretacion-urdaibai.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Orueta, s/n",
    "addressLocality" => "Ibarrangelu",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48311",
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
    "latitude": 43.3789,
    "longitude": -2.6501
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Observación de aves",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Exposiciones educativas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Mirador sobre marismas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Centro de visitantes",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso adaptado",
      "value": true
    }
  ],
  "sameAs": [
    "https://www.tu-dominio.com/ibarrangelu",
    "https://www.birdcenter.org"
  ]
}
</script>
