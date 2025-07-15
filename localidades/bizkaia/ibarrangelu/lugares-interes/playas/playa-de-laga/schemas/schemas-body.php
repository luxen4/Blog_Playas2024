<?php
// Variables para el schema en el cuerpo (reutilizamos las del head si están definidas)
$schemaTitle        = $schemaTitle        ?? "Playa de Laga - Urdaibai";
$schemaDescription  = $schemaDescription  ?? "Descubre la Playa de Laga en Urdaibai, Bizkaia: una playa natural con arena fina ideal para surfistas, senderistas y amantes de la naturaleza.";
$schemaUrl          = $schemaUrl          ?? "https://www.tu-dominio.com/urdaibai/lugares-interes/playa-de-laga";
$schemaImage        = $schemaImage        ?? "https://www.tu-dominio.com/images/playa-de-laga-1.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"         => "PostalAddress",
    "streetAddress" => "Barrio Laga",
    "addressLocality" => "Laga",
    "addressRegion"   => "País Vasco",
    "postalCode"      => "48315",
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
    "latitude": 43.3714,
    "longitude": -2.8981
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso peatonal",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Zonas habilitadas para picnic",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Aparcamiento cercano",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Información ambiental disponible",
      "value": true
    }
  ],
  "sameAs": [
    "https://www.tu-dominio.com/urdaibai"
  ]
}
</script>
