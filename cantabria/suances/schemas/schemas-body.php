<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/suances/";
$schemaTitle = "Suances, Cantabria";
$schemaDescription = "Descubre Suances, Cantabria: playas, surf, acantilados y naturaleza en la costa del Cantábrico.";

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
      "name": "Suances",
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
  "name": "Lugares de interés en Suances",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Playa de Los Locos",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-los-locos/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Playa de La Concha",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-la-concha/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Playa de la Ribera",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-la-ribera/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Punta del Dichoso",
      "url": "<?= $schemaUrl ?>lugares-interes/punta-del-dichoso/"
    }
  ]
}
</script>