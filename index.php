    
    <?php $title='Playas del Cantabrico'; ?>
    
    <?php
    // Rutas base del proyecto
    define('NOMBRE_PROYECTO', '/Blog_Playas2025');
    define('PATH_RAIZ', rtrim($_SERVER['DOCUMENT_ROOT']). NOMBRE_PROYECTO);
    define('PATH_RAIZ_ANUNCIOS', PATH_RAIZ. '/anuncios');
    define('PATH_RAIZ_HOME_HEAD_VARIABLES', PATH_RAIZ. '/home/head/variables');
    define('PATH_RAIZ_LOCALIDADES', PATH_RAIZ . '/localidades');
    define('PATH_RAIZ_BLOQUES', PATH_RAIZ . '/bloques');
    define('PATH_RAIZ_BLOQUES_CONTROL', PATH_RAIZ_BLOQUES . '/control');
    define('PATH_RAIZ_BLOQUES_ESTRUCTURA', PATH_RAIZ_BLOQUES . '/estructura');
    define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD', PATH_RAIZ_BLOQUES_ESTRUCTURA . '/paginas-generico/head');
    define('PATH_BLOQUES_SECTIONS_GENERICO', PATH_RAIZ_BLOQUES_ESTRUCTURA . '/sections_generico'); 
    
    define('PATH_HREF_RAIZ', "/Blog_Playas2025");  
    define('HOY', date('Y-m-d'));?>
        
    <?php require PATH_RAIZ_HOME_HEAD_VARIABLES. "/meta-tags.php";?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD. "/etiquetas-meta.php";?>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/links-generico.php"; ?>
    <title><?= $title; ?></title>
    <?php require PATH_RAIZ_BLOQUES_CONTROL . "/google-analytics.php"; ?>

</head>

<body>

    <!-- Encabezado -->
    <header class="bg-primary text-white text-center py-1">
        <h1 class="display-4">Descubre las Playas del Cantábrico</h1>
    </header>

    <div class="container my-4">
        <p style="text-align: left;">
            Bienvenido a nuestro blog, donde te invitamos a explorar las playas más impresionantes de la costa cantábrica. <br>
            Desde extensas franjas de arena dorada y aguas cristalinas, hasta rincones tranquilos y vibrantes actividades acuáticas,
            aquí encontrarás toda la información que necesitas para planificar tu próxima escapada a la costa norte de España.
            Navega por nuestras guías y descubre la belleza natural y la rica gastronomía de cada destino.
        </p>

        <div class="row">
            <div class="col-12">
                <?php include  PATH_RAIZ_LOCALIDADES . '/cantabria/sumario-playas-cantabria.php'; ?>

                <!-- Contenedor para anuncios -->
                <div id="adcash-zone" style="width: 100%; text-align: center; margin: 1em 0;"></div>
            </div>

            <div class="col-12">
                <?php //include './localidades/vizcaya/sumario-playas-vizcaya.php'; ?>
            </div>

            <div class="col-12">
                <?php //include './localidades/gipuzkoa/sumario-playas-gipuzkoa.php'; ?>
            </div>

            <div class="col-12">
                <?php /*include './localidades/francia/sumario-playas-francia.php'; */?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require './bloques/estructura/paginas-generico/footer.php'; ?>
    
    <?php require PATH_RAIZ . "/anuncios/pop-up-index.php"; ?>

    <?php $ruta_archivo_visitas = './bloques/control/visitas.csv'; ?>               <?php  //<!-- Registro de visitas --> ?>
    <?php require PATH_RAIZ_BLOQUES . "/control/control-visitas.php"; ?>



<script id="aclib" type="text/javascript" src="//acscdn.com/script/aclib.js"></script>

<script type="text/javascript">
    aclib.runAutoTag({
        zoneId: 'qfow4eeyo8',
    });
</script>


</body>

</html>
   

<?php /*
ftpupload.net

FTP USERNAME
if0_38843592

USERNAME
if0_38843592 


PASSWORD
5HJqjWqYLP4k  

http://playas2025.kesug.com/Blog_Playas2025/*/
https://playas2024.kesug.com/Blog_Playas2025/
?>

