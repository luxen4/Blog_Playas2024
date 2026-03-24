<?php 
$latitude = 43.4398; 
$longitude = -3.4275; 
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "Ojo del Diablo",
  "description": "El Ojo del Diablo, en Sonabia (Cantabria), es una impresionante formación rocosa natural con un gran orificio que ofrece vistas espectaculares al mar Cantábrico.",
  "image": "https://tusitio.com/imagenes/ojo-del-diablo-sonabia.jpg",
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
  "url": "https://tusitio.com/ojo-del-diablo-sonabia.php",
  "sameAs": [
    "https://es.wikiloc.com/rutas-senderismo/ojo-del-diablo-sonabia-xxxxx",
    "https://www.instagram.com/explore/tags/ojodeldiablo"
  ]
}
</script>
