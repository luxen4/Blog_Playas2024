<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/gipuzkoa/orio/";
$schemaTitle = "Orio, Gipuzkoa";
$schemaDescription = "Descubre Orio, Gipuzkoa: un encantador pueblo costero con playa, puerto pesquero, casco histórico y rutas naturales junto al río Oria.";

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
      "name": "Orio",
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
  "name": "Lugares de interés en Orio",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Playa de Orio",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-orio/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Puerto de Orio",
      "url": "<?= $schemaUrl ?>lugares-interes/puerto/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Casco histórico de Orio",
      "url": "<?= $schemaUrl ?>lugares-interes/casco-historico/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Ruta del Camino de Santiago (Orio)",
      "url": "<?= $schemaUrl ?>lugares-interes/camino-de-santiago/"
    },
    {
      "@type": "ListItem",
      "position": 5,
      "name": "Monte Mendizorrotz",
      "url": "<?= $schemaUrl ?>lugares-interes/monte-mendizorrotz/"
    }
  ]
}
</script>