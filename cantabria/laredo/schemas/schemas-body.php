<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/laredo/";
$schemaTitle = "Laredo, Cantabria";
$schemaDescription = "Descubre Laredo, Cantabria: una de las playas más extensas del norte de España, su casco histórico y su ambiente marinero junto al mar Cantábrico.";

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
      "name": "Cantabria",
      "item": "https://alayag82.kesug.com/turismo-norte-espana/cantabria/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Laredo",
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
  "name": "Lugares de interés en Laredo",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Playa de La Salvé",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-la-salve/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Casco Histórico de Laredo",
      "url": "<?= $schemaUrl ?>lugares-interes/casco-historico/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Puerto de Laredo",
      "url": "<?= $schemaUrl ?>lugares-interes/puerto-de-laredo/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Monte Buciero (entorno)",
      "url": "<?= $schemaUrl ?>lugares-interes/entorno-natural/"
    }
  ]
}
</script>