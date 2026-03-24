<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Rutas costeras en Castro Urdiales",
  "description": "Descubre las rutas de senderismo más espectaculares de Castro Urdiales, incluyendo acantilados, miradores, caminos junto al mar y patrimonio natural en Cantabria.",
  "touristType": {
    "@type": "Audience",
    "audienceType": ["Senderistas", "Amantes de la naturaleza", "Turistas rurales"]
  },
  "hasPart": [
    {
      "@type": "TouristAttraction",
      "name": "Acantilados de Sonabia",
      "url": "<?php /* PATH_HREF_CARPETA_LOCALIDADES_REGION */?>/playa-de-sonabia/index.php"
    },
    {
      "@type": "TouristAttraction",
      "name": "Ruta Castro - Mioño por la costa",
      "url": "<?= PATH_HREF_CARPETA ?>/ocio/pages/puerto-pesquero-mina-dicido.php"
    },
    {
      "@type": "TouristAttraction",
      "name": "Ascenso al Monte Cueto"
    },
    {
      "@type": "TouristAttraction",
      "name": "Mirador de Cotolino",
      "url": "<?= PATH_HREF_CARPETA_LUGARES_INTERES; ?>/mirador-de-cotolino/index.php"
    },
    {
      "@type": "TouristAttraction",
      "name": "Acantilados del Cerdigo en Islares"
    }
  ],
  "image": [
    "<?= $url_base; ?>/imagenes/rutas-costera-castro-urdiales.jpg",
    "<?= $url_base; ?>/imagenes/monte-cueto-castro.jpg"
  ],
  "location": {
    "@type": "Place",
    "name": "Castro Urdiales",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Castro Urdiales",
      "addressRegion": "Cantabria",
      "addressCountry": "ES"
    }
  }
}
</script>
