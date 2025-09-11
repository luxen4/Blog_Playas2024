<?php 
$latitude  = 43.64450;  
$longitude = -1.44120; 

// Variables para el schema – Piste Cyclable Vélodyssée (Capbreton)
$schemaTitle       = "Piste Cyclable Vélodyssée - Capbreton";
$schemaDescription = "La Piste Cyclable Vélodyssée en Capbreton forma parte de la gran ruta ciclista atlántica que conecta Francia de norte a sur. Ideal para paseos en bicicleta y turismo activo en Nouvelle-Aquitaine.";
$schemaUrl         = "https://www.tu-dominio.com/capbreton/lugares-interes/piste-cyclable-velodyssee"; // Cambia por tu URL real
$schemaImage       = "https://www.tu-dominio.com/images/piste-cyclable-velodyssee-capbreton.jpg";       // Cambia por la imagen real
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Piste Cyclable Vélodyssée",
    "addressLocality" => "Capbreton",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "40130",
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
  "touristType": [
    "Turismo activo",
    "Ciclismo",
    "Turismo familiar",
    "Naturaleza y deporte"
  ],
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Ruta ciclista señalizada",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Accesible para familias",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Entorno natural costero",
      "value": true
    }
  ],
  "sameAs": [
    "https://www.velodyssee.com/",
    "https://www.capbreton.fr/"
  ],
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?= $schemaUrl ?>"
  }
}
</script>
