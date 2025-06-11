<?php define('PATH_HREF_RAIZ', "/Blog_Playas2024"); ?> 
<?php define('PATH_HREF_RAIZ_LOCALIDAD_PLAYA',  "/Blog_Playas2024/localidades/cantabria/castro-urdiales/"); ?>

<?php
function generarNavLink($slug, $texto, $icono = '', $titulo = '', $color = '#2980b9') {
    $href = ($_SERVER['SERVER_NAME'] == 'localhost')
        ? PATH_HREF_RAIZ . '/' . ltrim($slug, '/')
        : PATH_HREF_RAIZ_LOCALIDAD_PLAYA .'ocio/'. rtrim($slug, '/') . '.php';

    $tituloAttr = $titulo ? ' title="' . htmlspecialchars($titulo) . '"' : '';
    $iconoHTML = $icono ? $icono . ' ' : '';
    $style = ($_SERVER['SERVER_NAME'] == 'localhost') ? '' : ' style="color:' . htmlspecialchars($color) . ';"';

    return '<li class="nav-item">
                <a class="nav-link" href="' . $href . '"' . $tituloAttr . $style . '>' . $iconoHTML . htmlspecialchars($texto) . '</a>
            </li>
            ';
}
?>

   
   <!-- Header de Introducción --> 
    <?php /*<header class="bg-primary text-white text-center py-1">
        <h1 class="display-4">Descubre las Playas del Cantábrico</h1>
    </header> */?>

<header class="header-principal shadow-sm border-bottom mb-4">
        <nav class="container navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand fw-bold" href="/">Playas 2024</a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Menú">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto">
                <?= generarNavLink('restaurantes-castro-urdiales', 'Restaurantes', '🏨', 'Ver restaurantes en la zona') ?>
                <?= generarNavLink('alojamientos-castro-urdiales', 'Alojamientos', '🏨', 'Ver alojamientos en la zona') ?>
                <?= generarNavLink('rutas-costeras-castro-urdiales', 'Rutas Costeras', '🥾', 'Ver rutas costeras en la zona') ?>
                <?= generarNavLink('eventos-castro-urdiales', 'Eventos', '🎉', 'Ver eventos en la zona') ?>
                <?= generarNavLink('blog-castro-urdiales', 'Blog', '📰', 'Ver blog en Castro-Urdiales') ?>
            </ul>
          </div>
        </nav>
    </header>
<style>
      @media (max-width: 1024px) {
  .header-principal {
    display: none !important;
  }
}
</style>


<?php //require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY. "/header-playa.php"; ?>


<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN. "/main-playa-generico.php"; ?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_FOOTER. "/footer.php"; ?>

<?php require PATH_RAIZ . "/anuncios/pop-up-index.php"; ?>