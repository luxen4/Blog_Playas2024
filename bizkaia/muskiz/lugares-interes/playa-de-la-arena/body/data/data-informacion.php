<?php 
$header = [
  "titulo" => "🏖️ Playa de La Arena (Muskiz)",
  "descripcion" => "Extensa playa de arena dorada entre Bizkaia y Cantabria, ideal para surf, paseos y naturaleza"
];
?>

<?php
$intro = [
  "parrafos" => [
    "La <strong>Playa de La Arena</strong> es una de las más extensas del litoral vizcaíno, situada entre los municipios de Muskiz (Bizkaia) y Castro Urdiales (Cantabria).",
    "Con más de 1 km de longitud, destaca por su amplitud, su arena dorada y su entorno natural abierto.",
    "Es muy frecuentada por surfistas debido a su oleaje constante, aunque también es perfecta para largos paseos junto al mar.",
    "Además, cuenta con zonas protegidas de dunas y un ambiente menos urbanizado que otras playas cercanas."
  ],
  "imagenes" => [
    [
      "src" => "https://upload.wikimedia.org/wikipedia/commons/5/57/Playa_de_la_Arena_Muskiz.jpg",
      "alt" => "Playa de La Arena vista general",
      "caption" => "Vista panorámica de la Playa de La Arena",
      "fuente" => "https://commons.wikimedia.org/wiki/File:Playa_de_la_Arena_Muskiz.jpg",
      "fuente_texto" => "Wikimedia Commons"
    ],
    [
      "src" => "https://turismovasco.com/wp-content/uploads/2015/06/playa-de-la-arena.jpg",
      "alt" => "Surf en la Playa de La Arena",
      "caption" => "Surfistas en La Arena",
      "fuente" => "https://turismovasco.com/bizkaia/que-ver-bizkaia/muskiz/",
      "fuente_texto" => "turismovasco.com"
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/5yYl7k9sF3Q",
    "titulo" => "Playa de La Arena en Muskiz"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "https://www.minube.com/tips/actualidad/wp-content/uploads/2020/07/playa-de-la-arena.jpg",
        "alt" => "Ambiente en la Playa de La Arena",
        "caption" => "Ambiente veraniego en La Arena",
        "fuente" => "https://www.minube.com",
        "fuente_texto" => "minube.com"
    ],
    [
        "src" => "https://www.eitb.eus/multimedia/images/2020/07/09/2598340/20200709_playa-arena_1280x720.jpg",
        "alt" => "Vista aérea de la Playa de La Arena",
        "caption" => "Vista aérea de la playa",
        "fuente" => "https://www.eitb.eus",
        "fuente_texto" => "eitb.eus"
    ],
    [
        "src" => "https://www.viajarporelpaisvasco.com/wp-content/uploads/2019/07/playa-la-arena.jpg",
        "alt" => "Dunas en la Playa de La Arena",
        "caption" => "Zona de dunas",
        "fuente" => "https://www.viajarporelpaisvasco.com",
        "fuente_texto" => "viajarporelpaisvasco.com"
    ],
    [
        "src" => "https://bizkaia.eus/documents/880303/0/Playa+La+Arena.jpg",
        "alt" => "Playa de La Arena con gente",
        "caption" => "Playa amplia y abierta",
        "fuente" => "https://bizkaia.eus",
        "fuente_texto" => "bizkaia.eus"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información de la Playa de La Arena",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Muskiz (Bizkaia) / Castro Urdiales (Cantabria)"
    ],
    [
      "icono" => "📏",
      "titulo" => "Extensión",
      "descripcion" => "Aprox. 1.200 m de longitud"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Características",
      "descripcion" => "Playa abierta, oleaje frecuente y arena fina"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Dunas, entorno natural, límite entre comunidades"
    ],
    [
      "icono" => "🚗",
      "titulo" => "Acceso",
      "descripcion" => "Acceso en coche con amplias zonas de aparcamiento"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏖️ Actividades en la Playa de La Arena",
  "items"  => [
    [ "icono" => "🏄‍♂️", "texto" => "Surf y bodyboard" ],
    [ "icono" => "🚶‍♀️", "texto" => "Paseos largos por la orilla" ],
    [ "icono" => "📸", "texto" => "Fotografía de paisajes naturales" ],
    [ "icono" => "🌅", "texto" => "Disfrutar de atardeceres" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-playa-arena",
    "centro" => [43.3645, -3.1225],
    "zoom"   => 14,
    "marker" => [
        "coords" => [43.3645, -3.1225],
        "popup"  => "<strong>Playa de La Arena</strong>"
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
    "texto" => "www.muskiz.eus",
    "url"   => "https://www.muskiz.eus"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Iñaki R.",
        "texto"  => "Una de las playas más amplias, perfecta para pasear."
    ],
    [
        "nombre" => "Leire G.",
        "texto"  => "Muy buenas olas para surfear, nos encantó."
    ],
    [
        "nombre" => "David S.",
        "texto"  => "Menos masificada que otras, ideal para desconectar."
    ],
    [
        "nombre" => "Paula M.",
        "texto"  => "Preciosos atardeceres y entorno natural muy bonito."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.3645&lon=-3.1225&zoom=10"; 
?>