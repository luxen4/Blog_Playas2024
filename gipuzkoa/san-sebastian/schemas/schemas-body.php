<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/gipuzkoa/san-sebastian/";
$schemaTitle = "San Sebastián, Gipuzkoa";
$schemaDescription = "Descubre San Sebastián: una de las ciudades más bellas de Europa, famosa por la playa de La Concha, su gastronomía, su Parte Vieja y sus vistas al mar Cantábrico.";

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
      "name": "San Sebastián",
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
  "name": "Lugares de interés en San Sebastián",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Playa de La Concha",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-la-concha/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Parte Vieja",
      "url": "<?= $schemaUrl ?>lugares-interes/parte-vieja/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Monte Igueldo",
      "url": "<?= $schemaUrl ?>lugares-interes/monte-igueldo/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Playa de Zurriola",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-zurriola/"
    },
    {
      "@type": "ListItem",
      "position": 5,
      "name": "Isla de Santa Clara",
      "url": "<?= $schemaUrl ?>lugares-interes/isla-de-santa-clara/"
    }
  ]
}
</script>