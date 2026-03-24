<?php 
$header = [
  "titulo" => "🏖️ Playa de Laga",
  "descripcion" => "Una de las playas más bonitas de Bizkaia, rodeada de naturaleza, arena dorada y vistas al Cabo de Ogoño."
];
?>

<?php
$intro = [
  "parrafos" => [
    "La <strong>Playa de Laga</strong>, situada en el municipio de Ibarrangelu, es uno de los arenales más espectaculares de la costa vizcaína.",
    "Se encuentra dentro de la <em>Reserva de la Biosfera de Urdaibai</em>, rodeada de montañas y del imponente Cabo de Ogoño.",
    "Es una playa de arena dorada y fina, muy apreciada por surfistas debido a la fuerza de sus olas.",
    "Además de ser un lugar perfecto para tomar el sol y bañarse, ofrece vistas increíbles y rutas de senderismo cercanas."
  ],
  "imagenes" => [
    [
      "src" => "https://www.eusko-ikaskuntza.eus/Imgs3digitala/12446.jpg",
      "alt" => "Vista general de la Playa de Laga",
      "caption" => "Playa de Laga en la Reserva de Urdaibai",
      "fuente" => "https://www.eusko-ikaskuntza.eus/es/fondo-documental/fondo-multimedia/mu-112446/",
      "fuente_texto" => "eusko-ikaskuntza.eus"
    ],
    [
      "src" => "https://martinelorza.com/wp-content/uploads/2018/09/panoramica-ogo%C3%B1o-playa-laga.jpg",
      "alt" => "Cabo Ogoño visto desde Laga",
      "caption" => "El Cabo de Ogoño desde la Playa de Laga",
      "fuente" => "https://martinelorza.com/es/escalada-cabo-ogono-via-gaviotas-130m5o-via-mailua-90m6oa5o/",
      "fuente_texto" => "martinelorza.com"
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/2MOMCDlE8EE", 
    "titulo" => "Video de la Playa de Laga"
  ]
];
?>


<?php
$galeria_imagenes = [
    [
        "src" => "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgZ7dTCG_UG_5GyjrBfRq82m7MzCGAx21U6kIoArIlllM_4qMOQ9_0wNoLg4BJKGopBoOsI3fnjRZvpqMSsJdi7bjgfcBXMQo6G32HxnZZi7qny37uQFaHjx2QLtDodX_Bc0cNwdMPgCIU/s640-rw/Playa-de-Laga+desde+ogo%25C3%25B1o.jpg",
        "alt" => "Playa de Laga desde Ogoño",
        "caption" => "Playa de Laga vista panorámica",
        "fuente" => "https://memoriasclubdeportivodebilbao.blogspot.com/2016/02/remansos-de-pazlaida-la-playa-de-oro-y.html",
        "fuente_texto" => "memoriasclubdeportivodebilbao.blogspot.com"
    ],
    [
        "src" => "https://www.hola.com/horizon/original_aspect_ratio/49959c6d70be-hms-hemis-2148438-a.jpg",
        "alt" => "Arena dorada en Laga",
        "caption" => "Arena dorada y olas en Laga",
        "fuente" => "https://www.hola.com/viajes/20220701212887/playa-laga-guia/",
        "fuente_texto" => "hola.com"
    ],
    [
      "src" => "https://estaticosgn-cdn.deia.eus/clip/359a9905-fdb6-49fc-a92c-d6dc5451cc73_16-9-aspect-ratio_default_0.jpg",
      "alt" => "'Paddle surf' en un día excepcional sin olas.",
      "caption" => "Paddle surf' en un día excepcional sin olas.",
      "fuente" => "https://www.noticiasdenavarra.com/rutas-y-naturaleza/2021/05/29/laga-ancestral-arenal-todavia-salvaje-2134847.html",
      "fuente_texto" => "noticiasdenavarra.com"
    ]
];
?>


<?php
$info = [
  "titulo" => "ℹ️ Información de la Playa de Laga",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Ibarrangelu, Reserva de la Biosfera de Urdaibai - Bizkaia"
    ],
    [
      "icono" => "📏",
      "titulo" => "Longitud",
      "descripcion" => "575 metros de arena dorada"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Oleaje",
      "descripcion" => "Fuerte, ideal para surfistas experimentados"
    ],
    [
      "icono" => "🚗",
      "titulo" => "Acceso",
      "descripcion" => "Accesible en coche, dispone de aparcamiento cercano"
    ],
    [
      "icono" => "🏄‍♂️",
      "titulo" => "Actividades",
      "descripcion" => "Surf, senderismo, fotografía y naturaleza"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🎯 Actividades en la Playa de Laga",
  "items"  => [
    [ "icono" => "🏄", "texto" => "Practicar surf en sus olas" ],
    [ "icono" => "🚶‍♂️", "texto" => "Caminar hasta el Cabo de Ogoño" ],
    [ "icono" => "📸", "texto" => "Fotografiar la playa y sus acantilados" ],
    [ "icono" => "🌞", "texto" => "Disfrutar de un día de sol y mar" ]
  ]
];
?>

<?php
// Configuración del mapa de la Playa de Laga
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-playa-laga",
    "centro" => [43.4044, -2.6355],   // Coordenadas Playa de Laga
    "zoom"   => 14,
    "marker" => [
        "coords" => [43.4044, -2.6355],
        "popup"  => "<strong>Playa de Laga</strong>"
    ]
];
?>


<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 946 25 81 11",
    "enlace" => "tel:+34946258111"
  ],
  "web"      => [
    "texto" => "www.turismo.euskadi.eus",
    "url"   => "https://turismo.euskadi.eus"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Ane Z.",
        "texto"  => "Playa preciosa, con arena fina y vistas espectaculares al cabo."
    ],
    [
        "nombre" => "Jon A.",
        "texto"  => "Perfecta para surfear, aunque hay que tener cuidado con el oleaje fuerte."
    ],
    [
        "nombre" => "Laura F.",
        "texto"  => "Un lugar mágico dentro de la Reserva de Urdaibai."
    ],
    [
        "nombre" => "Pedro M.",
        "texto"  => "Una de las playas más bonitas del País Vasco, ideal para pasar el día."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.4044&lon=-2.6355&zoom=10"; 
?> 
