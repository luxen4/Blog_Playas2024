<?php define('PATH_RAIZ_ANUNCIOS',  PATH_RAIZ. '/anuncios'); ?>
<?php define('PATH_RAIZ_LOCALIDADES', PATH_RAIZ. '/localidades'); ?>
<?php define('PATH_RAIZ_BLOQUES',                                       PATH_RAIZ. '/bloques'); ?> 
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA',                            PATH_RAIZ_BLOQUES. '/estructura'); ?>
<?php define('PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN',    PATH_RAIZ_LOCALIDADES. "/_estructura/body/main"); ?>

<?php define('PATH_BLOQUES_SECTIONS_GENERICO',                          PATH_RAIZ_BLOQUES_ESTRUCTURA. '/sections_generico'); ?>
<?php define('PATH_BLOQUES_SECTIONS_CARRUSELES_CSV',  PATH_BLOQUES_SECTIONS_GENERICO. '/Carruseles_CSV'); ?>


<?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
<?php //require PATH_RAIZ_ANUNCIOS . "/pop-up-publicitario2.php"; ?>              <?php /* <!-- Scripts anuncios POP-UPS --> */?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . '/anuncios/js/logica_anuncios.php'; ?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . '/js_bootstrap/scripts-bootstrap.php'; ?>