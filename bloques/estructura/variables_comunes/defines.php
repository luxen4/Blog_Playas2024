<?php

define('PATH_RAIZ', rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/Blog_Playas2024');
define('PATH_RAIZ_BLOQUES', rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/Blog_Playas2024/bloques');
define('PATH_RAIZ_BLOQUES_ESTRUCTURA', rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/Blog_Playas2024/bloques/estructura');

define('PATH_RAIZ_LOCALIDADES', rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/Blog_Playas2024/localidades');
define('PATH_RAIZ_LOCALIDADES_CARPETA', PATH_RAIZ_LOCALIDADES. "/" .$region_minuscula. "/" . $carpeta. "/paginas_secundarias");


define('SECTIONS_PAGINAS_SECUNDARIAS', './../paginas_secundarias/');


define('PATH_RAIZ_WEB_PLAYA', PATH_RAIZ_LOCALIDADES . "/{$region}/{$carpeta}/fichas/sections/head/variables/web-playa");




define('PATH_BLOQUES_SECTIONS_GENERICO',  PATH_RAIZ_BLOQUES_ESTRUCTURA. '/sections_generico');
