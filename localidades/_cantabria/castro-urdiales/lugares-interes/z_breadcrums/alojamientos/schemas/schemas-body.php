<!-- schemas-body.php -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristDestination",
  "name": "<?= $localidad_minuscula; ?>",
  "description": "Descubre alojamientos turísticos en <?= $localidad_minuscula; ?>: hoteles, casas rurales, hostales y apartamentos frente al mar en la costa de <?= $region; ?>.",
  "url": "<?= $url_pagina_actual; ?>",
  "image": "<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/alojamientos.jpg",
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 43.3844,
    "longitude": -3.2168
  },
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "<?= $localidad_minuscula; ?>",
    "addressRegion": "<?= $region; ?>",
    "addressCountry": "ES"
  }
}
</script>
