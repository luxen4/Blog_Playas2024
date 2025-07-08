<?php
// schemas-body.php – Grande Plage de Saint-Jean-de-Luz

$schemaBreadcrumb = [
  "@context" => "https://schema.org",
  "@type" => "BreadcrumbList",
  "itemListElement" => [
    [
      "@type" => "ListItem",
      "position" => 1,
      "name" => "Inicio",
      "item" => "https://tusitio.com/"
    ],
    [
      "@type" => "ListItem",
      "position" => 2,
      "name" => "Lugares de interés",
      "item" => "https://tusitio.com/saint-jean-de-luz/"
    ],
    [
      "@type" => "ListItem",
      "position" => 3,
      "name" => "Grande Plage de Saint-Jean-de-Luz",
      "item" => "https://tusitio.com/saint-jean-de-luz/grande-plage.php"
    ]
  ]
];

$schemaDestino = [
  "@context" => "https://schema.org",
  "@type" => "TouristDestination",
  "name" => "Saint-Jean-de-Luz, Nouvelle-Aquitaine",
  "description" => "Saint-Jean-de-Luz es un encantador destino turístico en la costa vasca francesa, famoso por su bahía protegida, arquitectura tradicional y su vibrante playa urbana: la Grande Plage.",
  "image" => "https://tusitio.com/img/grande-plage-saint-jean-de-luz-1.jpg",
  "url" => "https://tusitio.com/saint-jean-de-luz/",
  "address" => [
    "@type" => "PostalAddress",
    "addressLocality" => "Saint-Jean-de-Luz",
    "addressRegion" => "Nouvelle-Aquitaine",
    "postalCode" => "64500",
    "addressCountry" => "FR"
  ],
  "geo" => [
    "@type" => "GeoCoordinates",
    "latitude" => 43.3906,
    "longitude" => -1.6624
  ]
];
?>

<!-- Datos estructurados: Breadcrumb -->
<script type="application/ld+json">
<?= json_encode($schemaBreadcrumb, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>

<!-- Datos estructurados: TouristDestination -->
<script type="application/ld+json">
<?= json_encode($schemaDestino, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>
