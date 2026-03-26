<?php
// Variables para el schema (reutiliza las del <head> si están definidas)
$schemaTitle        = $schemaTitle        ?? "Playa de Ondarraitz - Hendaia";
$schemaDescription  = $schemaDescription  ?? "Descubre la Playa de Ondarraitz en Hendaia, Nouvelle-Aquitaine, Francia: un lugar ideal para surf, naturaleza y tranquilidad en la costa vasco-francesa.";
$schemaUrl          = $schemaUrl          ?? "https://www.tu-dominio.com/hendaia/lugares-interes/playas/ondarraitz";
$schemaImage        = $schemaImage        ?? "https://www.tu-dominio.com/images/ondarraitz-hendaia.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"         => "PostalAddress",
    "streetAddress" => "Playa de Ondarraitz",
    "addressLocality" => "Hendaia",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "64700",
    "addressCountry"  => "FR"
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
    "latitude": 43.3700,
    "longitude": -1.7977
  },
  "amenityFeature": [
    { "@type": "LocationFeatureSpecification", "name": "Acceso peatonal", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Duchas y servicios", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Aparcamiento cercano", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Zona natural y tranquila", "value": true }
  ],
  "sameAs": [
    "https://www.tourisme-hendaye.fr/",
    "https://es.wikipedia.org/wiki/Hendaya"
  ]
}
</script>
