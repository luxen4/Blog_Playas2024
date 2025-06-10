    <!-- Header de Introducción -->
    <header class="bg-primary text-white text-center py-1">
        <h1 class="display-4">Descubre las Playas del Cantábrico</h1>
    </header>

    <header class="bg-white shadow-sm border-bottom mb-4">
  <nav class="container navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand fw-bold" href="/">Playas 2024</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Menú">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= PATH_HREF_RAIZ_LOCALIDAD?>/restaurantes-castro-urdiales.php">🍽️ Restaurantes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/alojamientos-en-castro.php">🏨 Alojamientos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/rutas-costeras.php">🥾 Rutas costeras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/eventos.php">🎉 Eventos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/blog.php">📰 Blog</a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY. "/header-playa.php"; ?>


<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN. "/main-playa-generico.php"; ?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_FOOTER. "/footer.php"; ?>

<?php require PATH_RAIZ . "/anuncios/pop-up-index.php"; ?>