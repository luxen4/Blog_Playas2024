<?php
// Variables para el schema en el cuerpo (reutilizamos las del head si están definidas)
$schemaTitle        = $schemaTitle        ?? "La Grande Plage - Saint-Jean-de-Luz";
$schemaDescription  = $schemaDescription  ?? "Descubre La Grande Plage en Saint-Jean-de-Luz, una playa urbana en la costa vasca francesa con aguas tranquilas, ideal para familias y rodeada de encanto arquitectónico.";
$schemaUrl          = $schemaUrl          ?? "https://www.tu-dominio.com/saint-jean-de-luz/lugares-interes/la-grande-plage";
$schemaImage        = $schemaImage        ?? "https://www.tu-dominio.com/images/la-grande-plage-saint-jean-de-luz.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Promenade Jacques Thibaud",
    "addressLocality" => "Saint-Jean-de-Luz",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "64500",
    "addressCountry"  => "FR"
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
    "latitude": 43.3881,
    "longitude": -1.6633
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso peatonal",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Duchas y baños públicos disponibles",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso adaptado y vigilancia en temporada",
      "value": true
    }
  ],
  "sameAs": [
    "https://www.tu-dominio.com/saint-jean-de-luz"
  ]
}
</script>
