<?php 
$header = [
  "titulo" => "🌿 Parque Natural de los Montes de Triano (Muskiz)",
  "descripcion" => "Espacio natural de gran valor paisajístico e histórico en Bizkaia, ideal para senderismo y naturaleza"
];
?>

<?php
$intro = [
  "parrafos" => [
    "El <strong>Parque Natural de los Montes de Triano</strong> es un espacio natural situado entre varios municipios de Bizkaia, incluyendo Muskiz, conocido por su riqueza paisajística y su pasado minero.",
    "Este entorno combina montañas, bosques y antiguos restos de explotaciones mineras que forman parte de la historia industrial del País Vasco.",
    "Es un destino muy apreciado para el senderismo, con múltiples rutas que permiten descubrir miradores naturales y paisajes espectaculares.",
    "Además, ofrece vistas panorámicas del litoral y del interior de Bizkaia, convirtiéndolo en un lugar perfecto para disfrutar de la naturaleza."
  ],
  "imagenes" => [
    [
      "src" => "https://upload.wikimedia.org/wikipedia/commons/4/4e/Montes_de_Triano.jpg",
      "alt" => "Montes de Triano vista general",
      "caption" => "Vista de los Montes de Triano",
      "fuente" => "https://commons.wikimedia.org/wiki/File:Montes_de_Triano.jpg",
      "fuente_texto" => "Wikimedia Commons"
    ],
    [
      "src" => "https://turismovasco.com/wp-content/uploads/2015/06/montes-de-triano.jpg",
      "alt" => "Sendero en los Montes de Triano",
      "caption" => "Ruta de senderismo",
      "fuente" => "https://turismovasco.com/bizkaia/que-ver-bizkaia/",
      "fuente_texto" => "turismovasco.com"
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/4kYkJcZ9m2o",
    "titulo" => "Montes de Triano en Bizkaia"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "https://www.minube.com/tips/actualidad/wp-content/uploads/2020/07/montes-triano.jpg",
        "alt" => "Paisaje en los Montes de Triano",
        "caption" => "Paisaje natural",
        "fuente" => "https://www.minube.com",
        "fuente_texto" => "minube.com"
    ],
    [
        "src" => "https://www.eitb.eus/multimedia/images/2020/07/09/2598342/20200709_triano_1280x720.jpg",
        "alt" => "Vista aérea de los Montes de Triano",
        "caption" => "Vista aérea",
        "fuente" => "https://www.eitb.eus",
        "fuente_texto" => "eitb.eus"
    ],
    [
        "src" => "https://www.viajarporelpaisvasco.com/wp-content/uploads/2019/07/montes-triano.jpg",
        "alt" => "Bosques en los Montes de Triano",
        "caption" => "Zonas boscosas",
        "fuente" => "https://www.viajarporelpaisvasco.com",
        "fuente_texto" => "viajarporelpaisvasco.com"
    ],
    [
        "src" => "https://bizkaia.eus/documents/880303/0/Montes+Triano.jpg",
        "alt" => "Senderos en Triano",
        "caption" => "Senderos señalizados",
        "fuente" => "https://bizkaia.eus",
        "fuente_texto" => "bizkaia.eus"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información de los Montes de Triano",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Zona minera de Bizkaia (Muskiz y alrededores)"
    ],
    [
      "icono" => "🌿",
      "titulo" => "Tipo",
      "descripcion" => "Espacio natural y entorno histórico-minero"
    ],
    [
      "icono" => "⛰️",
      "titulo" => "Altitud",
      "descripcion" => "Cumbres en torno a los 700 m"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Restos mineros, miradores, rutas de senderismo"
    ],
    [
      "icono" => "🚗",
      "titulo" => "Acceso",
      "descripcion" => "Acceso en coche a diferentes puntos y rutas señalizadas"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🌿 Actividades en los Montes de Triano",
  "items"  => [
    [ "icono" => "🥾", "texto" => "Senderismo" ],
    [ "icono" => "🚵‍♂️", "texto" => "BTT y ciclismo de montaña" ],
    [ "icono" => "📸", "texto" => "Fotografía de paisaje" ],
    [ "icono" => "🌄", "texto" => "Disfrutar de miradores naturales" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-montes-triano",
    "centro" => [43.3050, -3.1050],
    "zoom"   => 13,
    "marker" => [
        "coords" => [43.3050, -3.1050],
        "popup"  => "<strong>Montes de Triano</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 946 70 70 00",
    "enlace" => "tel:+34946707000"
  ],
  "web"      => [
    "texto" => "www.bizkaia.eus",
    "url"   => "https://www.bizkaia.eus"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Asier D.",
        "texto"  => "Ruta increíble con mucha historia minera."
    ],
    [
        "nombre" => "Nerea B.",
        "texto"  => "Perfecto para hacer senderismo con vistas espectaculares."
    ],
    [
        "nombre" => "Jon A.",
        "texto"  => "Muy recomendable para desconectar en plena naturaleza."
    ],
    [
        "nombre" => "Marta L.",
        "texto"  => "Gran variedad de rutas y paisajes."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.3050&lon=-3.1050&zoom=10"; 
?>