<?php 
// Coordenadas aproximadas (inicio en Sopelana, fin en Plentzia)
$latitudeStart  = 43.3845;   // Sopelana
$longitudeStart = -2.9908;
$latitudeEnd    = 43.4060;   // Plentzia
$longitudeEnd   = -2.9500;

// Variables para el schema – Ruta Senderista
$schemaTitle       = "Ruta Senderista Sopelana - Plentzia";
$schemaDescription = "Ruta costera entre Sopelana y Plentzia: senderismo junto a acantilados, playas y vistas panorámicas del mar Cantábrico, ideal para turismo activo en Bizkaia.";
$schemaUrl         = "https://www.tu-dominio.com/sopelana/rutas/ruta-sopelana-plentzia";
$schemaImage       = "https://www.tu-dominio.com/images/ruta-sopelana-plentzia-1.jpg";
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "addressLocality" => "Sopelana",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48600",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Route",
  "name": "<?= $schemaTitle ?>",
  "description": "<?= $schemaDescription ?>",
  "url": "<?= $schemaUrl ?>",
  "image": "<?= $schemaImage ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "<?= $schemaAddress['addressLocality'] ?>",
    "addressRegion": "<?= $schemaAddress['addressRegion'] ?>",
    "postalCode": "<?= $schemaAddress['postalCode'] ?>",
    "addressCountry": "<?= $schemaAddress['addressCountry'] ?>"
  },
  "geo": {
    "@type": "GeoShape",
    "line": "<?= $latitudeStart ?>,<?= $longitudeStart ?> <?= $latitudeEnd ?>,<?= $longitudeEnd ?>"
  },
  "touristType": "Senderismo",
  "sameAs": [
    "https://www.sopelana.eus",
    "https://www.plentzia.eus"
  ]
}
</script>
