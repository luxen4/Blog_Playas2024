<?php 
$header = [
  "titulo" => "🏛️ Plaza del Ayuntamiento",
  "descripcion" => "Centro neurálgico de Castro-Urdiales, rodeado de edificios históricos y ambiente local"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "La <strong>Plaza del Ayuntamiento de Castro-Urdiales</strong> es uno de los lugares más emblemáticos y concurridos de la villa, punto de encuentro para locales y visitantes.",

    "En ella se encuentra el <strong>Ayuntamiento</strong>, un edificio de gran valor arquitectónico, junto a construcciones históricas, soportales y terrazas que le dan un ambiente único.",

    "Es el corazón del <strong>casco histórico</strong>, donde se celebran eventos culturales, mercados, fiestas tradicionales y actividades sociales a lo largo del año.",

    "Un lugar perfecto para disfrutar de la vida castreña, rodeado de bares, restaurantes y con un ambiente siempre animado."
  ],
  "imagenes" => [
    [
        "src" => "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgxOYt1cI0riVsaxps2_8XRkMWIm-aNV2sA2rapFttbTnOjyRrVw_l7BgKWCbCjTv6unPJbqWPFIzkwzwHeh1SPGLVRPqOglU6OC4MF7guko6JvMDP4U_7zkKgSUVd0v6X9XtOTb2fL_XeZ/s16000/Castro-Urdiales-Plaza-del-Ayuntamiento.jpg",
        "alt" => "Plaza del Ayuntamiento de Castro-Urdiales con el edificio consistorial",
        "caption" => "Plaza del Ayuntamiento de Castro-Urdiales",
        "fuente" => "https://www.viajesyrutas.es/2021/07/que-ver-en-castro-urdiales-cantabria.html",
        "fuente_texto" => "viajesyrutas.es"
    ],
    [
        "src" => "https://www.muchocastro.com/asset/thumbnail,992,558,center,center/media/muchocastro/images/2000/01/19/ayuntamiento2.jpg",
        "alt" => "Fachada del Ayuntamiento de Castro-Urdiales",
        "caption" => "Edificio del Ayuntamiento",
        "fuente" => "https://www.muchocastro.com/articulo/sociedad/ayuntamiento-castro-urdiales-aprueba-importantes-inversiones/20250603153751075691.html",
        "fuente_texto" => "muchocastro.com"
    ],
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "https://www.viajaporlibre.com/wp-content/uploads/2020/09/castro-urdiales-ayuntamiento-770x513.jpg.webp",
        "alt" => "Vista general de la Plaza del Ayuntamiento",
        "caption" => "Ambiente en la Plaza del Ayuntamiento",
        "fuente" => "https://www.viajaporlibre.com/espana/cantabria/castro-urdiales",
        "fuente_texto" => "viajaporlibre.com"
    ],
    [
        "src" => "https://photo620x400.mnstatic.com/9aeb433d910d52b42ef89e2bd031d18f/plaza-del-ayuntamiento.jpg",
        "alt" => "Soportales en la Plaza del Ayuntamiento de Castro-Urdiales",
        "caption" => "Soportales de la plaza",
        "fuente" => "https://www.minube.com/rincon/plaza-del-ayuntamiento-a3659592",
        "fuente_texto" => "minube.com"
    ],
    [
        "src" => "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/12/56/00/a5/plaza-del-ayuntamiento.jpg?w=1200&h=1200&s=1",
        "alt" => "Plaza del Ayuntamiento iluminada de noche",
        "caption" => "La plaza de noche",
        "fuente" => "https://www.tripadvisor.es/Attraction_Review-g776898-d9974862-Reviews-or10-Plaza_Del_Ayuntamiento-Castro_Urdiales_Cantabria.html",
        "fuente_texto" => "tripadvisor.es"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información de la Plaza del Ayuntamiento",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "En el centro histórico de Castro-Urdiales, rodeada de comercios y bares"
    ],
    [
      "icono" => "🏛️",
      "titulo" => "Edificio principal",
      "descripcion" => "Ayuntamiento de Castro-Urdiales, construido en el siglo XVIII"
    ],
    [
      "icono" => "🎉",
      "titulo" => "Eventos",
      "descripcion" => "Fiestas locales, mercados y actividades culturales durante todo el año"
    ],
    [
      "icono" => "☕",
      "titulo" => "Ambiente",
      "descripcion" => "Zona animada con terrazas, bares y restaurantes"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏛️ Actividades en la Plaza del Ayuntamiento",
  "items"  => [
    [ "icono" => "☕", "texto" => "Disfrutar de un café o una comida en sus terrazas" ],
    [ "icono" => "📸", "texto" => "Fotografiar el edificio del Ayuntamiento y la vida de la plaza" ],
    [ "icono" => "🎶", "texto" => "Asistir a eventos y actuaciones culturales" ],
    [ "icono" => "🚶", "texto" => "Pasear por el casco histórico desde la plaza" ]
  ]
];
?>

<?php
// Configuración del mapa de la Plaza del Ayuntamiento en Castro-Urdiales
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-plaza-ayuntamiento",
    "centro" => [43.3821, -3.2177],   // Coordenadas aproximadas de la Plaza del Ayuntamiento
    "zoom"   => 17,
    "marker" => [
        "coords" => [43.3821, -3.2177],  
        "popup"  => "<strong>Plaza del Ayuntamiento - Castro-Urdiales</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 942 78 29 12", 
    "enlace" => "tel:+34942782912" // Oficina de Turismo de Castro-Urdiales
  ],
  "web"      => [
    "texto" => "aytocastro.es",
    "url"   => "https://www.aytocastro.es"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Sofía L.",
        "texto"  => "Un lugar muy animado, ideal para tomar algo en las terrazas."
    ],
    [
        "nombre" => "Pedro M.",
        "texto"  => "La arquitectura del Ayuntamiento es preciosa, merece la pena la visita."
    ],
    [
        "nombre" => "Elena R.",
        "texto"  => "El ambiente de la plaza es fantástico, sobre todo en fiestas."
    ],
    [
        "nombre" => "Ander G.",
        "texto"  => "Punto de partida perfecto para recorrer el casco histórico de Castro."
    ]
];
?>
