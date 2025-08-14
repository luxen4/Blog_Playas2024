<?php 
$latitude  = 43.3700;   // Coordenadas aproximadas de Playa de Ondarraitz, Hendaya
$longitude = -1.7977; 

// Variables para el schema – Playa de Ondarraitz (Hendaya)
$schemaTitle       = "Playa de Ondarraitz - Hendaya";
$schemaDescription = "Descubre la Playa de Ondarraitz en Hendaya, Nouvelle-Aquitaine, Francia: un destino ideal para surf, naturaleza y tranquilidad en la costa vasco-francesa.";
$schemaUrl         = "https://www.tu-dominio.com/hendaya/lugares-interes/playas/ondarraitz";
$schemaImage       = "https://www.tu-dominio.com/images/ondarraitz-hendaya.jpg";
$schemaAddress     = [
    "@type"         => "PostalAddress",
    "streetAddress" => "Playa de Ondarraitz",
    "addressLocality" => "Hendaya",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "64700",
    "addressCountry"  => "FR"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Beach",
  "@id": "<?= htmlspecialchars($schemaUrl) ?>#beach",
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
    "latitude": <?= $latitude ?>,
    "longitude": <?= $longitude ?>
  },
  "isAccessibleForFree": true,
  "touristType": ["Surfistas", "Amantes de la naturaleza", "Tranquilidad"],
  "amenityFeature": [
    { "@type": "LocationFeatureSpecification", "name": "Duchas y servicios", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Acceso peatonal", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Aparcamiento cercano", "value": true }
  ],
  "sameAs": [
    "https://www.tourisme-hendaye.fr/",
    "https://es.wikipedia.org/wiki/Hendaya"
  ]
}
</script>
