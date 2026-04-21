<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/gipuzkoa/zumaia/";
$schemaTitle = "Zumaia, Gipuzkoa";
$schemaDescription = "Descubre Zumaia: un destino único en la costa de Gipuzkoa famoso por el flysch, sus acantilados espectaculares, playas y paisajes geológicos únicos.";

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
      "name": "Zumaia",
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
  "name": "Lugares de interés en Zumaia",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Flysch de Zumaia",
      "url": "<?= $schemaUrl ?>lugares-interes/flysch/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Playa de Itzurun",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-itzurun/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Ermita de San Telmo",
      "url": "<?= $schemaUrl ?>lugares-interes/ermita-san-telmo/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Casco histórico de Zumaia",
      "url": "<?= $schemaUrl ?>lugares-interes/casco-historico/"
    },
    {
      "@type": "ListItem",
      "position": 5,
      "name": "Puerto de Zumaia",
      "url": "<?= $schemaUrl ?>lugares-interes/puerto/"
    }
  ]
}
</script>