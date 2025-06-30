<!-- schemas-head.php -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Alojamientos en <?= $localidad_minuscula; ?>",
  "description": "Guía completa de alojamientos en <?= $localidad_minuscula; ?>. Encuentra hoteles, casas rurales, apartamentos y opciones económicas en la costa de <?= $region; ?>.",
  "url": "<?= $url_pagina_actual; ?>",
  "inLanguage": "es",
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Inicio",
        "item": "<?= $url_raiz; ?>"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Lugares de interés",
        "item": "<?= $url_raiz; ?>/lugares-de-interes"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Alojamientos en <?= $localidad_minuscula; ?>"
      }
    ]
  }
}
</script>
