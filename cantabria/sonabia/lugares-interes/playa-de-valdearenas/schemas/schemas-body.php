<?php
// Variables para el schema en el cuerpo (reutilizamos las del head si están definidas)
$schemaTitle        = $schemaTitle        ?? "Playa de Valdearenas - Sonabia";
$schemaDescription  = $schemaDescription  ?? "Descubre la Playa de Valdearenas en Sonabia, Cantabria: extensa playa de arena fina y dorada, perfecta para pasear, practicar surf y disfrutar del paisaje costero.";
$schemaUrl          = $schemaUrl          ?? "https://www.tu-dominio.com/sonabia/lugares-interes/playa-de-valdearenas";
$schemaImage        = $schemaImage        ?? "https://www.tu-dominio.com/images/playa-de-valdearenas-sonabia-1.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"         => "PostalAddress",
    "streetAddress" => "Camino de Valdearenas",
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
    "latitude": 43.4489,
    "longitude": -3.4152
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso peatonal",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Zona apta para surf",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Aparcamiento amplio",
      "value": true
    }
  ],
  "sameAs": [
    "https://www.tu-dominio.com/sonabia"
  ]
}
</script>
