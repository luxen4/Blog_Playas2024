<?php 
$latitude  = 43.38890;  
$longitude = -1.66110; 

// Variables para el schema – Puerto Pesquero (Saint-Jean-de-Luz)
$schemaTitle       = "Puerto Pesquero - Saint-Jean-de-Luz";
$schemaDescription = "Descubre el Puerto Pesquero de Saint-Jean-de-Luz, en Nouvelle-Aquitaine: tradición marinera, barcos coloridos y gastronomía local en un enclave pintoresco junto al Atlántico.";
$schemaUrl         = "https://www.tu-dominio.com/saint-jean-de-luz/lugares-interes/puerto-pesquero"; // Cambia por la URL real
$schemaImage       = "https://www.tu-dominio.com/images/puerto-pesquero-saint-jean-de-luz.jpg";       // Cambia por la URL real de la imagen principal
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Quai de l'Infante",
    "addressLocality" => "Saint-Jean-de-Luz",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "64500",
    "addressCountry"  => "FR"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "<?= $schemaTitle ?>",
  "description": "<?= $schemaDescription ?>",
  "url": "<?= $schemaUrl ?>",
  "image": "<?= $schemaImage ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "<?= $schemaAddress['streetAddress'] ?>",
    "addressLocality": "<?= $schemaAddress['addressLocality'] ?>",
    "addressRegion": "<?= $schemaAddress['addressRegion'] ?>",
    "postalCode": "<?= $schemaAddress['postalCode'] ?>",
    "addressCountry": "<?= $schemaAddress['addressCountry'] ?>"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": <?= $latitude ?>,
    "longitude": <?= $longitude ?>
  },
  "sameAs": [
    "https://www.tu-dominio.com/saint-jean-de-luz"
  ]
}
</script>
