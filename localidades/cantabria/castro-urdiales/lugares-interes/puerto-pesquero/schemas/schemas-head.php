<?php
// schemas-head.php para Puerto de Castro Urdiales

// Variables dinámicas (asegúrate que estas variables están definidas en el contexto donde se incluye este archivo)
LUGAR = LUGAR ?? 'Puerto de Castro Urdiales';
$description = $description_content ?? 'Descubre el Puerto de Castro Urdiales, un lugar emblemático de la costa cántabra con tradición marinera, gastronomía y actividades náuticas.';
$url = "https://www.turismocastrourdiales.net/{$rutas}";  // Cambiar según la estructura real de URLs
$image1 = PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG . "/puerto-castro-urdiales-1.jpg";

?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "<?= htmlspecialchars(LUGAR, ENT_QUOTES) ?>",
  "description": "<?= htmlspecialchars($description, ENT_QUOTES) ?>",
  "image": [
    "<?= $image1 ?>"
  ],
  "url": "<?= $url ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Muelle, s/n",
    "addressLocality": "Castro Urdiales",
    "addressRegion": "Cantabria",
    "postalCode": "39700",
    "addressCountry": "ES"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 43.3833,  // Coordenadas aproximadas, ajusta si tienes mejores datos
    "longitude": -3.2167
  },
  "telephone": "+34 942 85 90 65",
  "sameAs": [
    "https://www.turismocastrourdiales.net"
  ]
}
</script>
