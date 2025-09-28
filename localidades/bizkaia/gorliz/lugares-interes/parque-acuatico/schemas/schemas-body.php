<?php
// Variables reutilizables para Parque Acuático de Gorliz
$schemaTitle        = $schemaTitle        ?? "Parque Acuático de Gorliz";
$schemaDescription  = $schemaDescription  ?? "El Parque Acuático de Gorliz, Bizkaia: una instalación de ocio con toboganes, piscinas y actividades acuáticas para toda la familia en plena costa vasca.";
$schemaUrl          = $schemaUrl          ?? "https://www.tu-dominio.com/gorliz/lugares-interes/parque-acuatico-gorliz";
$schemaImage        = $schemaImage        ?? "https://www.tu-dominio.com/images/parque-acuatico-gorliz.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Parque Acuático de Gorliz",
    "addressLocality" => "Gorliz",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48630",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WaterPark",
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
    "latitude": 43.4205,
    "longitude": -2.9300
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Piscinas recreativas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Toboganes acuáticos",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Actividades familiares",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Zonas de picnic y descanso",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Accesible para niños y adultos",
      "value": true
    }
  ],
  "sameAs": [
    "https://www.tu-dominio.com/gorliz"
  ]
}
</script>
