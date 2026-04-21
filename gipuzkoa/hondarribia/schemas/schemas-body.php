<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/gipuzkoa/hondarribia/";
$schemaTitle = "Hondarribia, Gipuzkoa";
$schemaDescription = "Descubre Hondarribia, Gipuzkoa: una ciudad costera con casco histórico amurallado, puerto pesquero, playa y vistas a la bahía de Txingudi.";

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
      "name": "Hondarribia",
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
  "name": "Lugares de interés en Hondarribia",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Casco histórico de Hondarribia",
      "url": "<?= $schemaUrl ?>lugares-interes/casco-historico/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Puerto de Hondarribia",
      "url": "<?= $schemaUrl ?>lugares-interes/puerto/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Playa de Hondarribia",
      "url": "<?= $schemaUrl ?>lugares-interes/playa/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Barrio de la Marina",
      "url": "<?= $schemaUrl ?>lugares-interes/barrio-de-la-marina/"
    },
    {
      "@type": "ListItem",
      "position": 5,
      "name": "Fuerte de Guadalupe",
      "url": "<?= $schemaUrl ?>lugares-interes/fuerte-de-guadalupe/"
    }
  ]
}
</script>