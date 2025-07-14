<?php
// Variables para el schema en el cuerpo (reutilizamos las del head si están definidas)
$schemaTitle        = $schemaTitle        ?? "Playa de Astondoko - Gorliz";
$schemaDescription  = $schemaDescription  ?? "Explora la Playa de Astondoko en Gorliz, Vizkaia: un entorno natural tranquilo ideal para quienes buscan relax y paisajes costeros auténticos.";
$schemaUrl          = $schemaUrl          ?? "https://www.tu-dominio.com/gorliz/lugares-interes/playa-de-astondoko";
$schemaImage        = $schemaImage        ?? "https://www.tu-dominio.com/images/playa-de-astondoko-1.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Zona Astondo, Playa de Astondoko",
    "addressLocality" => "Gorliz",
    "addressRegion"   => "País Vasco",
    "postalCode"      => "48630",
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
    "latitude": 43.3750,
    "longitude": -2.9935
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Entorno natural protegido",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Accesible a pie desde Gorliz",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Zona tranquila sin urbanización",
      "value": true
    }
  ],
  "sameAs": [
    "https://www.tu-dominio.com/gorliz"
  ]
}
</script>
