<?php
// Variables para el schema en el cuerpo (reutilizamos las del head si están definidas)
$schemaTitle        = $schemaTitle        ?? "Playa de Sonabia - Sonabia";
$schemaDescription  = $schemaDescription  ?? "Descubre la Playa de Sonabia en Sonabia, Cantabria: una cala virgen de arena dorada rodeada de acantilados y pinares, perfecta para el baño y el senderismo costero.";
$schemaUrl          = $schemaUrl          ?? "https://www.tu-dominio.com/sonabia/lugares-interes/playa-de-sonabia";
$schemaImage        = $schemaImage        ?? "https://www.tu-dominio.com/images/playa-de-sonabia-1.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"         => "PostalAddress",
    "streetAddress" => "Camino de Sonabia",
    "addressLocality" => "Sonabia",
    "addressRegion"   => "Cantabria",
    "postalCode"      => "39749",
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
    "latitude": 43.4425,
    "longitude": -3.4050
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso peatonal",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Sin duchas ni baños públicos",
      "value": false
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Aparcamiento limitado",
      "value": true
    }
  ],
  "sameAs": [
    "https://www.tu-dominio.com/sonabia"
  ]
}
</script>
