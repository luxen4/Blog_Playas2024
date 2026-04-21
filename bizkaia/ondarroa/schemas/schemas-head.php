<?php

$schemaTitle       = "Ondarroa, País Vasco – Turismo en la costa del norte de España";
$schemaDescription = "Descubre Ondarroa, en Bizkaia: un auténtico pueblo marinero con un importante puerto pesquero, casco histórico medieval y la playa de Arrigorri junto al mar Cantábrico.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/pais-vasco/ondarroa/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/pais-vasco/ondarroa/img/ondarroa-cantabria.jpg";

$latitude  = 43.3206;
$longitude = -2.4216;

?>

<!-- Schema.org JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristDestination",
  "name": "<?= $schemaTitle ?>",
  "description": "<?= $schemaDescription ?>",
  "url": "<?= $schemaUrl ?>",
  "image": "<?= $schemaImage ?>",
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": <?= $latitude ?>,
    "longitude": <?= $longitude ?>
  },
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Ondarroa",
    "addressRegion": "Bizkaia",
    "postalCode": "48700",
    "addressCountry": "ES"
  },
  "containsPlace": [
    {
      "@type": "TouristAttraction",
      "name": "Puerto de Ondarroa"
    },
    {
      "@type": "TouristAttraction",
      "name": "Casco histórico de Ondarroa"
    },
    {
      "@type": "Beach",
      "name": "Playa de Arrigorri"
    },
    {
      "@type": "TouristAttraction",
      "name": "Faro de Santa Cata