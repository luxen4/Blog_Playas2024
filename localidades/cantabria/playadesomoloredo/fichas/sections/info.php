


<?php
$nombre_Playa = 'Playa de Somo';
$nombre_Playa_region = 'Playa de Somo, Cantabria';
$ruta_imagenes = './localidades/cantabria/playadesomoloredo/img/';
$final_archivo = 'playa-somo-loredo-somo-cantabria.jpg';

$imagenes = [

    [
        'src' => $ruta_imagenes . $final_archivo,
        'alt' => $nombre_Playa . ', vista panorámica',
        'figcaption' =>  $nombre_Playa_region. '.',
        'href' => 'https://saposyprincesas.elmundo.es/actividades-ninos/cantabria/aire-libre/playas/playa-de-somo',
        'titulo_href' => 'saposyprincesas.elmundo.es'
    ],
    [
        'src' => $ruta_imagenes .'surf-'. $final_archivo,
        'alt' => 'Surf en ' . $nombre_Playa_region,
        'figcaption' => 'Surf en la '.$nombre_Playa_region. '.',
        'href' => 'https://elpais.com/elviajero/2021/01/21/actualidad/1611229533_330658.html#',
        'titulo_href' => 'elpais.com'
    ],
    [
        'src' => $ruta_imagenes .'atardecer-'. $final_archivo,
        'alt' => 'Atardecer en la '. $nombre_Playa_region. '.',
        'figcaption' => 'Atardecer en ' . $nombre_Playa_region. '.',
        'href' => 'https://misfotosdecantabria.blogspot.com/2019/09/atardecer-desde-somo.html',
        'titulo_href' => 'misfotosdecantabria.blogspot.com'
    ],
    [
        'src' => $ruta_imagenes .'senderismo-'. $final_archivo,
        'alt' => 'Senderismo cerca de ' .$nombre_Playa_region. '.',
        'figcaption' => 'Senderismo cerca de la ' . $nombre_Playa_region.'.',
        'href' => 'https://www.cantabriarural.com/blog/de-senderismo-por-la-costa-de-somo-langre-y-galizano/',
        'titulo_href' => 'cantabriarural.com'
    ],
    [
        'src' => $ruta_imagenes .'vista-aerea-'. $final_archivo,
        'alt' => 'Vista aérea de '. $nombre_Playa . ' en ' . $region . '.',
        'figcaption' => 'Vista aérea de la ' . $nombre_Playa_region. '.',
        'href' => 'https://es.kampaoh.com/guias-de-viaje/es/cantabria/que-ver-y-hacer-en-somo-cantabria-que-playas-rutas-y-visitas-se-recomiendan-donde-alojarse-y-comer-platos-tipicos/',
        'titulo_href' => 'es.kampaoh.com'
    ],
    [
        'src' => $ruta_imagenes .'familias-difrutando-'. $final_archivo,
        'alt' => 'Familias disfrutando en la '. $nombre_Playa_region. '.',
        'figcaption' => 'Familias disfrutando en la ' . $nombre_Playa_region . '.',
        'href' => 'https://www.tripadvisor.es/Attraction_Review-g644321-d10332784-Reviews-Playa_de_Somo-Somo_Cantabria.html',
        'titulo_href' => 'tripadvisor.es'
    ]
]; ?>