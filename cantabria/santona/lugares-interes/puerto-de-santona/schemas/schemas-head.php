<?php 
$latitude = 43.4550; 
$longitude = -3.4440; 
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "Puerto de Santoña",
  "description": "El Puerto de Santoña, situado en la costa de Cantabria, es un puerto pesquero y comercial con gran tradición marítima. Destaca por su animado paseo marítimo, la lonja de pescado y sus actividades náuticas y gastronómicas.",
  "image": "https://tusitio.com/imagenes/puerto-de-santona.jpg",
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
  "url": "https://tusitio.com/puerto-de-santona.php",
  "sameAs": [
    "https://es.wikipedia.org/wiki/Santoña",
    "https://www.instagram.com/explore/tags/puertodesantona"
  ]
}
</script>
