
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "name": "<?= $nombre_entidad ?>",
      "url": "https://www.turismocastrourdiales.net",
      "logo": {
        "@type": "ImageObject",
        "url": "<?= $logo_entidad ?>"
      },
      "sameAs": [
        "https://www.facebook.com/turismocastrourdiales",
        "https://twitter.com/castro_urdiales"
      ]
    },
    {
      "@type": "<?= $tipo_lugar ?>",
      "name": "<?= htmlspecialchars($nombre_lugar) ?>",
      "image": "<?= $imagen_lugar ?>",
      "description": "<?= htmlspecialchars($descripcion_lugar) ?>",
      "url": "<?= $url_pagina ?>",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?= $url_pagina ?>"
      }
    },
    {
      "@type": "WebSite",
      "name": "Turismo y Playas 2025 – Guía Costera por el Cantábrico",
      "url": "https://www.blogplayas2025.com"
    }
  ]
}
</script>