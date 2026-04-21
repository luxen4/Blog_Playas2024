<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/noja/";
$schemaTitle = "Noja, Cantabria";
$schemaDescription = "Descubre Noja, Cantabria: playas de arena dorada, marismas protegidas y naturaleza en la costa del Cantábrico.";

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
      "name": "Noja",
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
  "name": "Lugares de interés en Noja",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Playa de Trengandín",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-trengandin/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Playa de Ris",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-ris/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Marismas de Noja",
      "url": "<?= $schemaUrl ?>lugares-interes/marismas-de-noja/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Paseo Marítimo de Noja",
      "url": "<?= $schemaUrl ?>lugares-interes/paseo-maritimo-de-noja/"
    }
  ]
}
</script>