<!-- Footer -->
<footer>
    <div class="container">
        <div class="text-center">
            <h2>Oficinas de Turismo</h2>

            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <h4>Cantabria</h4>
                    <h6><a href="https://turismo.santander.es/oficinas-de-turismo">Santander</a></h6>
                    <h6><a href="https://www.cylex.es/somo/oficina-de-turismo-de-somo-11456114.html">Somo</a></h6>
                    <h6><a href="https://www.islacantabria.com/inicio">Isla</a></h6>
                    <h6><a href="http://nojaturismo.com/">Noja</a></h6>
                    <h6><a href="https://www.laredo.es/09/oficina_turismo.php">Laredo</a></h6>
                    <h6><a href="https://turismo.castro-urdiales.net/">Castro-Urdiales</a></h6>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <h4>Vizcaya</h4>
                    <h6><a href="https://turismo.euskadi.eus/es/oficinas-turismo/oficina-de-turismo-de-san-sebastian/aa30-12375/es/">San Sebastián</a></h6>
                    <h6><a href="https://hondarribiaturismo.com/">Fuenterrabía</a></h6>
                    <h6><a href="https://lekeitioturismo.eus/es/">Lekeitio</a></h6>
                    <h6><a href="https://visitplentzia.com/">Plentzia</a></h6>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <h4>Guipúzcoa</h4>
                    <h6><a href="https://zumaia.eus/es/turismo/zumaia-turismo/oficina-de-turismo">Zumaia</a></h6>
                    <h6><a href="https://www.getariaturismo.eus/es">Getaria</a></h6>
                    <h6><a href="https://www.turismozarautz.eus/es/">Zarautz</a></h6>
                    <h6><a href="http://turismo.orio.eus/es/">Orio</a></h6>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <h4>Francia</h4>
                    <h6><a href="https://www.hendaye-tourisme.fr/es/">Hendaya</a></h6>
                    <h6><a href="https://www.saint-jean-de-luz.com/homepage-es/">San Juan de Luz</a></h6>
                    <h6><a href="https://tourisme.biarritz.fr/es">Biarritz</a></h6>
                </div>
            </div>

            <div class="d-flex justify-content-center align-items-center vh-5 mt-4">
                <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Blog_Playas2024/img/yo.png" alt="Auto de viaje" class="img-fluid" style="margin-right: 20px;">
                <div>
                    <p style="margin-bottom: 0rem;">Hecho por Adrián Laya García <br><a href="mailto:superlaya50@gmail.com">superlaya50@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    footer {
        background: #333;
        color: white;
        text-align: center;
        width: 100%;
        bottom: 0;
        padding: 20px 0; /* Agregar padding superior e inferior */
    }

    footer h4,
    footer h2 {
        text-align: center;
    }

    footer a {
        color: #4CAF50;
        text-decoration: none;
    }

    footer a:hover {
        text-decoration: underline;
    }

    @media (max-width: 767.98px) {
        footer h4 {
            font-size: 1.2rem;
        }

        footer h6 {
            font-size: 0.9rem;
        }
    }

    /* Estilo para la imagen de presentación del auto */
    footer img {
        max-height: 100px;
        margin: 20px;
        border-radius: 10px;
        border: 2px solid #ffffff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        opacity: 0.9;
        transition: transform 0.3s ease, opacity 0.3s ease;
    }

    footer img:hover {
        transform: scale(1.05);
        opacity: 1;
    }

    footer .small {
        opacity: 0.7;
        font-style: italic;
    }

    @media (max-width: 576px) {
        footer h1 {
            font-size: 1.5rem;
        }

        footer p.lead {
            font-size: 1rem;
        }

        footer img {
            max-height: 80px;
            margin: 10px;
        }
    }
</style>

<!-- <footer>
    <div style="padding: 1em;" class="text-center">

        <h2>Oficinas de Turismo</h2>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <h4>Cantabria</h4>
                <div class="row">
                    <div class="col-6">
                        <h6><a href="https://turismo.santander.es/oficinas-de-turismo">Santander</a></h6>
                        <h6><a href="https://www.cylex.es/somo/oficina-de-turismo-de-somo-11456114.html">Somo</a></h6>
                    </div>
                    <div class="col-6">
                        <h6><a href="https://www.islacantabria.com/inicio">Isla</a></h6>
                        <h6><a href="http://nojaturismo.com/">Noja</a></h6>
                    </div>
                </div>
                <h6><a href="https://www.laredo.es/09/oficina_turismo.php">Laredo</a></h6>
                <h6><a href="https://turismo.castro-urdiales.net/">Castro-Urdiales</a></h6>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <h4>Vizcaya</h4>
                <div class="row">
                    <div class="col-6">
                        <h6><a href="https://turismo.euskadi.eus/es/oficinas-turismo/oficina-de-turismo-de-san-sebastian/aa30-12375/es/">San Sebastián</a></h6>
                        <h6><a href="https://hondarribiaturismo.com/">Fuenterrabía</a></h6>
                    </div>
                    <div class="col-6">
                        <h6><a href="https://lekeitioturismo.eus/es/">Lekeitio</a></h6>
                        <h6><a href="https://visitplentzia.com/">Plentzia</a></h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <h4>Guipúzcoa</h4>
                <div class="row">
                    <div class="col-6">
                        <h6><a href="https://zumaia.eus/es/turismo/zumaia-turismo/oficina-de-turismo">Zumaia</a></h6>
                        <h6><a href="https://www.getariaturismo.eus/es">Getaria</a></h6>
                    </div>
                    <div class="col-6">
                        <h6><a href="https://www.turismozarautz.eus/es/">Zarautz</a></h6>
                        <h6><a href="http://turismo.orio.eus/es/">Orio</a></h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <h4>Francia</h4>
                <div class="row">
                    <div class="col-6">
                        <h6><a href="https://www.hendaye-tourisme.fr/es/">Hendaya</a></h6>
                        <h6><a href="https://www.saint-jean-de-luz.com/homepage-es/">San Juan de Luz</a></h6>
                    </div>
                    <div class="col-6">
                        <h6><a href="https://tourisme.biarritz.fr/es">Biarritz</a></h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center align-items-center vh-5">
            <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Blog_Playas2024/img/yo.png" alt="Auto de viaje" class="img-fluid" style="margin-right: 20px;">
            <div>
                <p style="margin-bottom: 0rem;">Hecho por Adrián Laya García <br><a href="mailto:superlaya50@gmail.com">superlaya50@gmail.com</a></p>
                <?php // <p>&copy; 2024 Playa de Santander. Todos los derechos reservados.</p> 
                ?>
            </div>
        </div>
    </div>
</footer> -->