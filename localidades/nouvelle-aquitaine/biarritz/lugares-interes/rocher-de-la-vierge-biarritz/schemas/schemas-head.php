<?php 
$latitude  = 43.38890;  
$longitude = -1.66110; 

// Variables para el schema – Puerto Pesquero (Saint-Jean-de-Luz)
$schemaTitle       = "Puerto Pesquero - Saint-Jean-de-Luz";
$schemaDescription = "Descubre el Puerto Pesquero de Saint-Jean-de-Luz, en Nouvelle-Aquitaine: tradición marinera, barcos coloridos y gastronomía local en un enclave pintoresco junto al Atlántico.";
$schemaUrl         = "https://www.tu-dominio.com/saint-jean-de-luz/lugares-interes/puerto-pesquero";
$schemaImage       = "https://www.tu-dominio.com/images/puerto-pesquero-saint-jean-de-luz.jpg";
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Quai de l'Infante",
    "addressLocality" => "Saint-Jean-de-Luz",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "64500",
    "addressCountry"  => "FR"
];

$schemaData = [
    "@context" => "https://schema.org",
    "@type"    => "TouristAttraction",
    "name"     => $schemaTitle,
    "description" => $schemaDescription,
    "url"      => $schemaUrl,
    "image"    => $schemaImage,
    "address"  => $schemaAddress,
    "geo" => [
        "@type"    => "GeoCoordinates",
        "latitude" => $latitude,
        "longitude"=> $longitude
    ],
    "sameAs" => [
        "https://www.tu-dominio.com/saint-jean-de-luz"
    ]
];
?>

<script type="application/ld+json">
<?= json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>
