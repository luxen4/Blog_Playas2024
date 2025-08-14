<?php 
$latitude = 43.4566; 
$longitude = -3.4464; 
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "Faro del Caballo",
  "description": "El Faro del Caballo, ubicado en los acantilados del Monte Buciero en Santoña (Cantabria), es un faro histórico construido en 1863. Se puede acceder por mar o por una escalinata de más de 700 peldaños, ofreciendo vistas espectaculares de la bahía y el mar Cantábrico.",
  "image": "https://tusitio.com/imagenes/faro-del-caballo-santona.jpg",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Santoña",
    "addressRegion": "Cantabria",
    "addressCountry": "ES"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": <?= $latitude ?>,
    "longitude": <?= $longitude ?>
  },
  "url": "https://tusitio.com/faro-del-caballo-santona.php",
  "sameAs": [
    "https://es.wikipedia.org/wiki/Faro_del_Caballo",
    "https://www.instagram.com/explore/tags/farodelcaballo"
  ]
}
</script>
