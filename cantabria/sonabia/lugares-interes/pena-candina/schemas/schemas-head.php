<?php 
$latitude = 43.4392; 
$longitude = -3.4336; 
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "Peña Candina",
  "description": "La Peña Candina, en Sonabia (Cantabria), es un espectacular macizo costero famoso por albergar la única colonia marina de buitres leonados en Europa y por sus impresionantes vistas al mar Cantábrico.",
  "image": "https://tusitio.com/imagenes/pena-candina-sonabia.jpg",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Sonabia",
    "addressRegion": "Cantabria",
    "addressCountry": "ES"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": <?= $latitude ?>,
    "longitude": <?= $longitude ?>
  },
  "url": "https://tusitio.com/pena-candina-sonabia.php",
  "sameAs": [
    "https://es.wikipedia.org/wiki/Pe%C3%B1a_Candina",
    "https://www.instagram.com/explore/tags/pe%C3%B1acandina"
  ]
}
</script>
