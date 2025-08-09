<?php
// schemas-body.php para Puerto de Castro Urdiales

LUGAR = LUGAR ?? 'Puerto de Castro Urdiales';
$description = $description_content ?? 'Disfruta del Puerto de Castro Urdiales, un punto clave para la pesca, la navegación y la gastronomía local en Cantabria.';
$url = "https://www.turismocastrourdiales.net/{$rutas}";
$image1 = PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG . "/puerto-castro-urdiales-2.jpg";
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Place",
  "name": "<?= htmlspecialchars(LUGAR, ENT_QUOTES) ?>",
  "description": "<?= htmlspecialchars($description, ENT_QUOTES) ?>",
  "image": "<?= $image1 ?>",
  "url": "<?= $url ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Muelle, s/n",
    "addressLocality": "Castro Urdiales",
    "addressRegion": "Cantabria",
    "postalCode": "39700",
    "addressCountry": "ES"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 43.3833,
    "longitude": -3.2167
  }
}
</script>
