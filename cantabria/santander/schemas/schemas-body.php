<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/santander/";
$schemaTitle = "Santander, Cantabria";
$schemaDescription = "Descubre Santander, Cantabria: playas urbanas, patrimonio histórico, la bahía más bonita del norte de España y una gran oferta cultural y gastronómica.";

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
      "name": "Santander",
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
  "name": "Lugares de interés en Santander",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Playa del Sardinero",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-del-sardinero/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Palacio de la Magdalena",
      "url": "<?= $schemaUrl ?>lugares-interes/palacio-de-la-magdalena/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Centro Botín",
      "url": "<?= $schemaUrl ?>lugares-interes/centro-botin/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Bahía de Santander",
      "url": "<?= $schemaUrl ?>lugares-interes/bahia-de-santander/"
    }
  ]
}
</script>