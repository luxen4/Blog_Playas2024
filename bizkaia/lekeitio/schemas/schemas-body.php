<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/pais-vasco/lekeitio/";
$schemaTitle = "Lekeitio, País Vasco";
$schemaDescription = "Descubre Lekeitio, en Bizkaia: un precioso pueblo pesquero con playas, la isla de San Nicolás, su puerto tradicional y su casco histórico junto al mar Cantábrico.";

?>

<!-- Breadcrumbs -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Inicio",
      "item": "https://alayag82.kesug.com/turismo-norte-espana/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "País Vasco",
      "item": "https://alayag82.kesug.com/turismo-norte-espana/pais-vasco/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Lekeitio",
      "item": "<?= $schemaUrl ?>"
    }
  ]
}
</script>

<!-- Página -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "<?= $schemaTitle ?>",
  "description": "<?= $schemaDescription ?>",
  "url": "<?= $schemaUrl ?>"
}
</script>

<!-- Lugares destacados -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Lugares de interés en Lekeitio",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Isla de San Nicolás",
      "url": "<?= $schemaUrl ?>lugares-interes/isla-de-san-nicolas/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Playa de Isuntza",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-isuntza/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Playa de Karraspio",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-karraspio/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Puerto de Lekeitio",
      "url": "<?= $schemaUrl ?>lugares-interes/puerto-de-lekeitio/"
    }
  ]
}
</script>