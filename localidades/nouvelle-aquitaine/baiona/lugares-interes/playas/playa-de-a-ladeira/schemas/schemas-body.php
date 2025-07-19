<?php
// Variables para el schema (reutiliza las del <head> si están definidas)
$schemaTitle        = $schemaTitle        ?? "Playa de A Ladeira - Baiona";
$schemaDescription  = $schemaDescription  ?? "Descubre la Playa de A Ladeira en Baiona, Galicia, España: una playa tranquila ideal para familias, baños y paseos en la naturaleza gallega.";
$schemaUrl          = $schemaUrl          ?? "https://www.tu-dominio.com/baiona/lugares-interes/playas/a-ladeira";
$schemaImage        = $schemaImage        ?? "https://www.tu-dominio.com/images/a-ladeira-baiona.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"         => "PostalAddress",
    "streetAddress" => "Playa de A Ladeira",
    "addressLocality" => "Baiona",
    "addressRegion"   => "Galicia",
    "postalCode"      => "36300",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Place",
  "@id": "<?= htmlspecialchars($schemaUrl) ?>#place",
  "name": "<?= htmlspecialchars($schemaTitle) ?>",
  "description": "<?= htmlspecialchars($schemaDescription) ?>",
  "url": "<?= htmlspecialchars($schemaUrl) ?>",
  "image": "<?= htmlspecialchars($schemaImage) ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "<?= htmlspecialchars($schemaAddress['streetAddress']) ?>",
    "addressLocality": "<?= htmlspecialchars($schemaAddress['addressLocality']) ?>",
    "addressRegion": "<?= htmlspecialchars($schemaAddress['addressRegion']) ?>",
    "postalCode": "<?= htmlspecialchars($schemaAddress['postalCode']) ?>",
    "addressCountry": "<?= htmlspecialchars($schemaAddress['addressCountry']) ?>"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 42.1900,
    "longitude": -8.8540
  },
  "amenityFeature": [
    { "@type": "LocationFeatureSpecification", "name": "Acceso peatonal", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Duchas y servicios", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Aparcamiento cercano", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Entorno natural y tranquilo", "value": true }
  ],
  "sameAs": [
    "https://www.turismobaiona.com/",
    "https://es.wikipedia.org/wiki/Baiona"
  ]
}
</script>
