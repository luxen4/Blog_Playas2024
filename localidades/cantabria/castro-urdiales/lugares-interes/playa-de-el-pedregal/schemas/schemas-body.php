<?php
// Datos variables, reutilizados o con valores por defecto
$schemaTitle = $schemaTitle ?? "Playa de El Pedregal - Castro Urdiales";
$schemaDescription = $schemaDescription ?? "Playa de El Pedregal, cala rocosa tranquila para pesca y naturaleza, en la costa de Cantabria.";
$schemaUrl = $schemaUrl ?? "https://www.tu-dominio.com/castro-urdiales/lugares-interes/playa-de-el-pedregal";
$schemaImage = $schemaImage ?? "https://www.tu-dominio.com/images/playa-de-el-pedregal-1.jpg";
$schemaAddress = $schemaAddress ?? [
    "@type" => "PostalAddress",
    "streetAddress" => "Zona costera El Pedregal",
    "addressLocality" => "Castro Urdiales",
    "addressRegion" => "Cantabria",
    "postalCode" => "39700",
    "addressCountry" => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
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
    "latitude": 43.3850,
    "longitude": -3.2180
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso peatonal señalizado",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Accesible para personas con movilidad reducida en zonas cercanas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Zona permitida para pesca recreativa",
      "value": true
    }
  ],
  "touristType": {
    "@type": "Audience",
    "audienceType": "Pescadores, amantes de la naturaleza, turistas que buscan tranquilidad"
  },
  "sameAs": [
    "https://es.wikipedia.org/wiki/Castro-Urdiales",
    "https://www.turismodecantabria.com"
  ]
}
</script>
