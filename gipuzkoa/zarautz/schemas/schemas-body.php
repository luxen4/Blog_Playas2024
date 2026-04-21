<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/gipuzkoa/zarautz/";
$schemaTitle = "Zarautz, Gipuzkoa";
$schemaDescription = "Descubre Zarautz: una de las localidades costeras más populares del País Vasco, famosa por su extensa playa, surf, gastronomía y ambiente marinero.";

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
      "name": "Zarautz",
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
  "name": "Lugares de interés en Zarautz",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Playa de Zarautz",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-zarautz/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Casco histórico de Zarautz",
      "url": "<?= $schemaUrl ?>lugares-interes/casco-historico/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Palacio de Narros",
      "url": "<?= $schemaUrl ?>lugares-interes/palacio-de-narros/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Malecón de Zarautz",
      "url": "<?= $schemaUrl ?>lugares-interes/malecon/"
    },
    {
      "@type": "ListItem",
      "position": 5,
      "name": "Ruta de Talaimendi",
      "url": "<?= $schemaUrl ?>lugares-interes/ruta-talaimendi/"
    }
  ]
}
</script>