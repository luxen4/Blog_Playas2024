<?php 
$latitude  = 43.3472;  
$longitude = -3.0483; 

// Variables para el schema – Torre de Muskiz
$schemaTitle       = "Torre de Muskiz - Muskiz";
$schemaDescription = "Descubre la Torre de Muskiz en Bizkaia: un edificio histórico emblemático de la Edad Media, hoy convertido en espacio cultural y turístico.";
$schemaUrl         = "https://www.tu-dominio.com/muskiz/lugares-interes/torre-de-muskiz"; 
$schemaImage       = "https://www.tu-dominio.com/images/torre-de-muskiz.jpg";                   
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Calle Torre, s/n",
    "addressLocality" => "Muskiz",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48550",
    "addressCountry"  => "ES"
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
    "https://www.tu-dominio.com/muskiz"
  ]
}
</script>
