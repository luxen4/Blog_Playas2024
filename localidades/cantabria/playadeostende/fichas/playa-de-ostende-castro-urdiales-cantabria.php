<!DOCTYPE html>
<html lang="es">

    <?php // Variables para la página de la Playa de Ostende ?>
    <?php $region_minuscula = 'cantabria'; $carpeta = 'playadeostende'; $tema='playa-de-ostende';?>
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2024/bloques/estructura/variables_comunes/defines.php"; ?>
    <?php require PATH_RAIZ_LOCALIDADES_CARPETA_WEB_PLAYA. "/localizacion-playa.php"; ?>
 
<?php
// Variables para las etiquetas meta y SEO
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Ostende si se utiliza para verificación
$description_content = 'Descubre la Playa de Ostende, un hermoso arenal en Cantabria, perfecto para relajarse, practicar deportes acuáticos y disfrutar de la naturaleza.';
$keywords_content = 'Playa de Ostende, surf, naturaleza, Costa Cantábrica, turismo en Cantabria, Ostende';


require PATH_RAIZ_WEB_PLAYA. "/grupo1/index.php"; 

require PATH_RAIZ_BLOQUES_ESTRUCTURA. "/head.php"; ?>

<body>
    <?php $page = 'playade'.$nombre_playa_minuscula;?>
    <?php require "./sections/info.php"; ?>    
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA. "/body_generico.php"; ?>


<script>
  const urlAmigable = '/playa-de-ostende-castro-urdiales-cantabria';
  const urlReal = '/Blog_Playas2024/localidades/cantabria/playadeostende/fichas/playa-de-ostende-castro-urdiales-cantabria.php'; // usa ruta relativa, no localhost

  // Mostrar la URL actual cargada
  console.log("URL actual cargada:", window.location.href);
  console.log("Pathname:", window.location.pathname);

  // Detectar si es una recarga de página
  const navigationEntry = performance.getEntriesByType("navigation")[0] || { type: performance.navigation.type };
  const isReload = navigationEntry.type === "reload";
  console.log("¿Es recarga?:", isReload);

  // Si fue una recarga Y estamos en la URL amigable
  if (isReload && window.location.pathname === urlAmigable) {
    alert("Redirigiendo a la URL real para evitar problemas de carga.");
    window.location.replace(urlReal);
  } else {
    history.replaceState({}, '', urlReal);
        history.replaceState({}, '', urlAmigable);
  }
</script>

</body>

</html>