<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/comillas/";
$schemaTitle = "Comillas, Cantabria";
$schemaDescription = "Descubre Comillas, Cantabria: arquitectura modernista, playas, patrimonio histórico y uno de los pueblos más bonitos de la costa del Cantábrico.";

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
      "name": "Comillas",
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
  "name": "Lugares de interés en Comillas",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Capricho de Gaudí",
      "url": "<?= $schemaUrl ?>lugares-interes/capricho-de-gaudi/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Palacio de Sobrellano",
      "url": "<?= $schemaUrl ?>lugares-interes/palacio-de-sobrellano/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Playa de Comillas",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-comillas/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Casco Histórico de Comillas",
      "url": "<?= $schemaUrl ?>lugares-interes/casco-historico/"
    }
  ]
}
</script>