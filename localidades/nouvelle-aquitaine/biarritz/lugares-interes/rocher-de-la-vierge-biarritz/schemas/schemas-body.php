<?php
// Variables para el schema en el cuerpo (reutilizamos las del head si están definidas)
$schemaTitle       = $schemaTitle       ?? "Puerto Pesquero - Saint-Jean-de-Luz";
$schemaDescription = $schemaDescription ?? "Descubre el Puerto Pesquero de Saint-Jean-de-Luz, un lugar con tradición marinera, barcos coloridos, gastronomía local y vistas al mar en el corazón del País Vasco Francés.";
$schemaUrl         = $schemaUrl         ?? "https://www.tu-dominio.com/saint-jean-de-luz/lugares-interes/puerto-pesquero";
$schemaImage       = $schemaImage       ?? "https://www.tu-dominio.com/images/puerto-pesquero-saint-jean-de-luz.jpg";
$schemaAddress     = $schemaAddress     ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Quai de l'Infante",
    "addressLocality" => "Saint-Jean-de-Luz",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "64500",
    "addressCountry"  => "FR"
];

$schemaData = [
    "@context" => "https://schema.org",
    "@type"    => "Place",
    "name"     => $schemaTitle,
    "description" => $schemaDescription,
    "url"      => $schemaUrl,
    "image"    => $schemaImage,
    "address"  => [
        "@type" => "PostalAddress",
        "streetAddress"   => $schemaAddress['streetAddress'],
        "addressLocality" => $schemaAddress['addressLocality'],
        "addressRegion"   => $schemaAddress['addressRegion'],
        "postalCode"      => $schemaAddress['postalCode'],
        "addressCountry"  => $schemaAddress['addressCountry'],
    ],
    "geo" => [
        "@type"    => "GeoCoordinates",
        "latitude" => 43.3889,
        "longitude"=> -1.6611,
    ],
    "amenityFeature" => [
        [
            "@type" => "LocationFeatureSpecification",
            "name"  => "Zona peatonal junto al muelle",
            "value" => true
        ],
        [
            "@type" => "LocationFeatureSpecification",
            "name"  => "Restaurantes y bares con vistas al puerto",
            "value" => true
        ],
        [
            "@type" => "LocationFeatureSpecification",
            "name"  => "Embarcaciones de pesca y paseos turísticos",
            "value" => true
        ]
    ],
    "sameAs" => [
        "https://www.tu-dominio.com/saint-jean-de-luz"
    ]
];
?>

<script type="application/ld+json">
<?= json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>
