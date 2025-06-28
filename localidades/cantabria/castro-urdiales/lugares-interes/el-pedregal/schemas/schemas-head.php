
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "<?= $tipo_lugar ?>",
  "name": "<?= htmlspecialchars($nombre_lugar) ?>",
  "description": "<?= htmlspecialchars($descripcion_lugar) ?>",
  "image": "<?= $imagen_lugar ?>",
  "url": "<?= $url_pagina ?>",
  "touristType": "General",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "<?= $nombre_localidad ?>",
    "addressRegion": "<?= $nombre_region ?>",
    "addressCountry": "España"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "43.3840",
    "longitude": "-3.2170"
  },
  "isAccessibleForFree": true
}
</script>
