<?php 
$header = [
  "titulo" => "🌄 Mirador de Arrietara (Sopelana)",
  "descripcion" => "Espectacular mirador sobre los acantilados de Sopelana con vistas al mar Cantábrico"
];
?>

<?php
$intro = [
  "parrafos" => [
    "El <strong>Mirador de Arrietara</strong> es uno de los puntos más impresionantes de Sopelana, situado sobre los acantilados que dominan la playa.",
    "Desde este enclave se pueden contemplar vistas panorámicas del mar Cantábrico, la Playa de Arrietara y los espectaculares acantilados de la zona.",
    "Es un lugar muy frecuentado para pasear, hacer fotografías y disfrutar de atardeceres únicos.",
    "Forma parte de los recorridos costeros de Sopelana, conectando con rutas y senderos que recorren todo el litoral."
  ],
  "imagenes" => [
    [
      "src" => "https://upload.wikimedia.org/wikipedia/commons/1/1c/Acantilados_Sopelana.jpg",
      "alt" => "Acantilados de Sopelana desde el mirador",
      "caption" => "Vistas desde el Mirador de Arrietara",
      "fuente" => "https://commons.wikimedia.org/wiki/File:Acantilados_Sopelana.jpg",
      "fuente_texto" => "Wikimedia Commons"
    ],
    [
      "src" => "https://turismovasco.com/wp-content/uploads/2015/06/acantilados-sopelana.jpg",
      "alt" => "Costa de Sopelana desde el mirador",
      "caption" => "Panorámica de la costa",
      "fuente" => "https://turismovasco.com/bizkaia/que-ver-bizkaia/sopela/",
      "fuente_texto" => "turismovasco.com"
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/f3QxYp1vX6w",
    "titulo" => "Vistas desde el Mirador de Arrietara"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "https://www.minube.com/tips/actualidad/wp-content/uploads/2020/07/acantilados-sopelana.jpg",
        "alt" => "Acantilados en Sopelana",
        "caption" => "Acantilados junto al mirador",
        "fuente" => "https://www.minube.com",
        "fuente_texto" => "minube.com"
    ],
    [
        "src" => "https://www.eitb.eus/multimedia/images/2020/07/09/2598338/20200709_sopelana-acantilados_1280x720.jpg",
        "alt" => "Vista aérea de Sopelana",
        "caption" => "Vista aérea de los acantilados",
        "fuente" => "https://www.eitb.eus",
        "fuente_texto" => "eitb.eus"
    ],
    [
        "src" => "https://www.viajarporelpaisvasco.com/wp-content/uploads/2019/07/acantilados-sopelana.jpg",
        "alt" => "Sendero junto al acantilado",
        "caption" => "Senderos costeros",
        "fuente" => "https://www.viajarporelpaisvasco.com",
        "fuente_texto" => "viajarporelpaisvasco.com"
    ],
    [
        "src" => "https://bizkaia.eus/documents/880303/0/Sopelana+acantilados.jpg",
        "alt" => "Costa de Sopelana al atardecer",
        "caption" => "Atardecer desde el mirador",
        "fuente" => "https://bizkaia.eus",
        "fuente_texto" => "bizkaia.eus"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información del Mirador de Arrietara",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Sopelana - Bizkaia, País Vasco"
    ],
    [
      "icono" => "🌄",
      "titulo" => "Tipo",
      "descripcion" => "Mirador natural sobre acantilados"
    ],
    [
      "icono" => "📸",
      "titulo" => "Uso principal",
      "descripcion" => "Fotografía, paseo y observación del paisaje"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Playa de Arrietara, acantilados, rutas costeras"
    ],
    [
      "icono" => "🚗",
      "titulo" => "Acceso",
      "descripcion" => "Acceso a pie desde Sopelana o en coche con zonas cercanas de aparcamiento"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🌄 Actividades en el mirador",
  "items"  => [
    [ "icono" => "📸", "texto" => "Fotografía de paisajes y acantilados" ],
    [ "icono" => "🚶‍♂️", "texto" => "Paseos por senderos costeros" ],
    [ "icono" => "🌅", "texto" => "Disfrutar de atardeceres" ],
    [ "icono" => "🌊", "texto" => "Observación del mar y del oleaje" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-mirador-arrietara",
    "centro" => [43.3885, -2.9825],
    "zoom"   => 15,
    "marker" => [
        "coords" => [43.3885, -2.9825],
        "popup"  => "<strong>Mirador de Arrietara</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 944 06 70 00",
    "enlace" => "tel:+34944067000"
  ],
  "web"      => [
    "texto" => "www.sopela.eus",
    "url"   => "https://www.sopela.eus"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Unai L.",
        "texto"  => "Las vistas son impresionantes, sobre todo al atardecer."
    ],
    [
        "nombre" => "Nora P.",
        "texto"  => "Lugar perfecto para hacer fotos espectaculares."
    ],
    [
        "nombre" => "Gorka S.",
        "texto"  => "Muy recomendable pasear por los acantilados."
    ],
    [
        "nombre" => "Ane M.",
        "texto"  => "Uno de los rincones más bonitos de Sopelana."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.3885&lon=-2.9825&zoom=10"; 
?>