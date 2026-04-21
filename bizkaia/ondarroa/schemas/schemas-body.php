<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/pais-vasco/ondarroa/";
$schemaTitle = "Ondarroa, País Vasco";
$schemaDescription = "Descubre Ondarroa, en Bizkaia: un auténtico pueblo marinero con un importante puerto pesquero, casco histórico medieval y la playa de Arrigorri junto al mar Cantábrico.";

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
      "name": "Ondarroa",
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
  "name": "Lugares de interés en Ondarroa",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Puerto de Ondarroa",
      "url": "<?= $schemaUrl ?>lugares-interes/puerto-de-ondarroa/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Casco histórico de Ondarroa",
      "url": "<?= $schemaUrl ?>lugares-interes/casco-historico-ondarroa/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Playa de Arrigorri",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-arrigorri/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Faro de Santa Catalina",
      "url": "<?= $schemaUrl ?>lugares-interes/faro-de-santa-catalina/"
    }
  ]
}
</script>