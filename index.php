    <?php
    // Rutas base del proyecto
    define('NOMBRE_PROYECTO', '/Blog_Playas2025');
    define('PATH_RAIZ', rtrim($_SERVER['DOCUMENT_ROOT']). NOMBRE_PROYECTO);
    define('PATH_RAIZ_ANUNCIOS', PATH_RAIZ. '/anuncios');
    define('PATH_RAIZ_LOCALIDADES', PATH_RAIZ . '/localidades');
    define('PATH_RAIZ_BLOQUES', PATH_RAIZ . '/bloques');
    define('PATH_RAIZ_BLOQUES_ESTRUCTURA', PATH_RAIZ_BLOQUES . '/estructura');
    define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_SECUNDARIAS_HEAD', PATH_RAIZ_BLOQUES_ESTRUCTURA . '/paginas-secundarias/head');
    define('PATH_BLOQUES_SECTIONS_GENERICO', PATH_RAIZ_BLOQUES_ESTRUCTURA . '/sections_generico'); ?>

<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Verificación Google Search Console -->
    <meta name="google-site-verification" content="O4CyyseatW1WkLbzw9poeIPyF27Eik_tDlqrO0ank4o" /><?php /* para verificar https://search.google.com/search-console/welcome?utm_source=wmx&utm_medium=deprecation-pane&utm_content=home#utm_source=es-wmxmsg&utm_medium=wmxmsg&utm_campaign=bm&authuser=0*/ ?> 


    <!-- Verificación Seobility -->
    <meta name="seobility" content="6fdc72f26c4563f937e32ff3def5f9d5" /> 
    <!-- Meta descripción para SEO -->
    <meta name="description" content="Explora las playas del Cantábrico con Los Viajes de Adrián. Guías, actividades, fotos y consejos para tus escapadas al norte de España." />

    <title>Los Viajes de Adrián</title>

    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_SECUNDARIAS_HEAD . "/links-generico.php"; ?>





<!-- Google Analytics 4 --> <?php /* https://analytics.google.com/analytics/web/#/p414698765/realtime/overview?params=_u..nav%3Dmaui%26_u.date00%3D20250615%26_u.date01%3D20250615%26_u..comparisons%3D%5B%7B%22savedComparisonId%22:%226735513331%22,%22name%22:%22Todos%20los%20usuarios%22,%22isEnabled%22:true,%22filters%22:%5B%5D,%22systemDefinedSavedComparisonType%22:8,%22isSystemDefined%22:true%7D,%7B%22name%22:%22Ciudad%20coincide%20exactamente%20con%20Logrono%22,%22isEnabled%22:true,%22filters%22:%5B%7B%22expression%22:%22Logrono%22,%22fieldName%22:%22city%22%7D%5D%7D,%7B%22name%22:%22Ciudad%20coincide%20exactamente%20con%20Logrono%22,%22isEnabled%22:true,%22filters%22:%5B%7B%22expression%22:%22Logrono%22,%22fieldName%22:%22city%22%7D%5D%7D%5D%26_u..built_comparisons_enabled%3Dtrue&collectionId=10864986929 */ ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1GL7TGHSN4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1GL7TGHSN4');

</script>



<?php if ($_SERVER['HTTP_HOST'] !== 'localhost'): ?>
<!-- Google Analytics 4 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1GL7TGHSN4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1GL7TGHSN4');
</script>
<?php endif; ?>

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

