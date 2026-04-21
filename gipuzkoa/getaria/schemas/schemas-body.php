<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/gipuzkoa/getaria/";
$schemaTitle = "Getaria, Gipuzkoa";
$schemaDescription = "Descubre Getaria, Gipuzkoa: un precioso pueblo costero del País Vasco con puerto pesquero, casco histórico, playas y viñedos de txakoli junto al mar Cantábrico.";

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
      "name": "Gipuzkoa",
      "item": "https://alayag82.kesug.com/turismo-norte-espana/gipuzkoa/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Getaria",
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
  "name": "Lugares de interés en Getaria",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Puerto de Getaria",
      "url": "<?= $schemaUrl ?>lugares-interes/puerto-de-getaria/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Casco histórico de Getaria",
      "url": "<?= $schemaUrl ?>lugares-interes/casco-historico/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Playa de Gaztetape",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-gaztetape/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Monumento a Juan Sebastián Elcano",
      "url": "<?= $schemaUrl ?>lugares-interes/monumento-elcano/"
    },
    {
      "@type": "ListItem",
      "position": 5,
      "name": "Viñedos de txakoli",
      "url": "<?= $schemaUrl ?>lugares-interes/vinedos-txakoli/"
    }
  ]
}
</script>