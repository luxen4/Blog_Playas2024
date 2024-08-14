<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div>
    <a class="navbar-brand" href="#">

        <img style="max-width: 100px;" src="<?= $src; ?>" alt="Logo" class="d-inline-block align-top"><br>
        <p id="">Viaja con Laya </p>  
    </a>
    </div>
  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto" style="margin: auto;">

            <li class="nav-item active">
            <a class="nav-link" href="./../../../../">Inicio <span class="sr-only"></span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Blog_Playas2024/#cantabria">Cantabria<span class="sr-only"></span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Blog_Playas2024/#vizcaya">Vizcaya<span class="sr-only"></span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Blog_Playas2024/#guipuzkoa">Guipuzkoa<span class="sr-only"></span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Blog_Playas2024/#francia">Francia<span class="sr-only"></span></a>
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
        <?php /*
        <form class="form-inline my-2 my-lg-0">
        <div style="display: flex;">
          <div>
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          </div>
          <div>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </div>
        </div>
      </form> */?>
        <a href="#" class="btn btn-outline-primary ml-lg-3">Iniciar Sesión</a>
    </div>
</nav>

<style>
    #navbar{
    font-family: Oswald, sans-serif;
    font-weight: bold;
    letter-spacing: -0.5px;
    color: blue;
    font-size: 34px;
    line-height: 1.95;
    }
</style>