<?php 
$latitude = 43.4370; 
$longitude = -3.4300; 
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "Monte Candina",
  "description": "El Monte Candina, en Sonabia (Cantabria), es una imponente formación montañosa costera conocida por sus acantilados, senderos de montaña y la presencia de la única colonia marina de buitres leonados en Europa.",
  "image": "https://tusitio.com/imagenes/monte-candina-sonabia.jpg",
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
  "url": "https://tusitio.com/monte-candina-sonabia.php",
  "sameAs": [
    "https://es.wikipedia.org/wiki/Pe%C3%B1a_Candina",
    "https://www.instagram.com/explore/tags/montecandina"
  ]
}
</script>
