<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div>
    <a class="navbar-brand" href="#">

        <img style="max-width: 100px;" src="<?= $src; ?>" alt="Logo" class="d-inline-block align-top"><br>
        Destinos Playeros  
    </a>
    </div>
  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item active">
                <a class="nav-link" href="./../../../../">Inicio <span class="sr-only"></span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="./../../../../">Cantabria<span class="sr-only"></span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="./../../../../">Vizcaya<span class="sr-only"></span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="./../../../../">Guipuzkoa<span class="sr-only"></span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="./../../../../">Francia<span class="sr-only"></span></a>
            </li>


            <?php /*
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Playas de Cantabria</a>
                    <a class="dropdown-item" href="#">Playas de Vizcaya</a>
                    <a class="dropdown-item" href="#">Playas de Guipuzkoa</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Servicios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sobre Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contacto</a>
            </li> */ ?>


        </ul>
        <form class="form-inline my-2 my-lg-0">
        <div style="display: flex;">
          <div>
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          </div>
          <div>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </div>
        </div>
      </form>
        <a href="#" class="btn btn-outline-primary ml-lg-3">Iniciar Sesión</a>
    </div>
</nav>