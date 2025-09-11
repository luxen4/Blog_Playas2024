<?php
// Variables reutilizables para Paseo Itsaslur
$schemaTitle        = $schemaTitle        ?? "Paseo Itsaslur";
$schemaDescription  = $schemaDescription  ?? "Disfruta del Paseo Itsaslur en Muskiz, Bizkaia: un recorrido peatonal agradable a lo largo de la costa y entornos naturales, ideal para caminar, observar fauna y flora, y disfrutar de la naturaleza.";
$schemaUrl          = $schemaUrl          ?? "https://www.tu-dominio.com/muskiz/lugares-interes/paseo-itsaslur";
$schemaImage        = $schemaImage        ?? "https://www.tu-dominio.com/images/paseo-itsaslur.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Paseo Itsaslur",
    "addressLocality" => "Muskiz",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48500",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Park",
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
    "latitude": 43.3890,
    "longitude": -3.0450
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Recorrido peatonal costero",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Flora y fauna locales",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Dificultad baja",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Duración aproximada 1 hora",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Entorno natural protegido",
      "value": true
    }
  ],
  "sameAs": [
    "https://www.tu-dominio.com/muskiz"
  ]
}
</script>
