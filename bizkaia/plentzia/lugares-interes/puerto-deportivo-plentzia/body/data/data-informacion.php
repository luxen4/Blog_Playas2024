<?php 
$header = [
  "titulo" => "⛵ Puerto Deportivo de Plentzia",
  "descripcion" => "Encantador puerto en la ría de Plentzia, ideal para paseos, navegación y ambiente marinero"
];
?>

<?php
$intro = [
  "parrafos" => [
    "El <strong>Puerto Deportivo de Plentzia</strong> es uno de los rincones con más encanto de la costa de Bizkaia, situado en la desembocadura de la ría.",
    "Rodeado de casas tradicionales y un cuidado paseo, ofrece un ambiente tranquilo perfecto para pasear y disfrutar del paisaje.",
    "Es un punto habitual para embarcaciones de recreo y actividades náuticas, además de contar con servicios para navegantes.",
    "Su cercanía a la Playa de Plentzia lo convierte en un lugar ideal para combinar ocio marítimo, gastronomía y relax."
  ],
  "imagenes" => [
    [
      "src" => "https://upload.wikimedia.org/wikipedia/commons/5/5e/Plentzia_puerto.jpg",
      "alt" => "Puerto de Plentzia vista general",
      "caption" => "Vista del Puerto Deportivo de Plentzia",
      "fuente" => "https://commons.wikimedia.org/wiki/File:Plentzia_puerto.jpg",
      "fuente_texto" => "Wikimedia Commons"
    ],
    [
      "src" => "https://turismovasco.com/wp-content/uploads/2015/06/puerto-de-plentzia.jpg",
      "alt" => "Barcos en el puerto de Plentzia",
      "caption" => "Embarcaciones en la ría de Plentzia",
      "fuente" => "https://turismovasco.com/bizkaia/que-ver-bizkaia/plentzia/",
      "fuente_texto" => "turismovasco.com"
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/6lFQz3Yk8kA",
    "titulo" => "Video del Puerto de Plentzia"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "https://www.minube.com/tips/actualidad/wp-content/uploads/2020/07/plentzia-puerto.jpg",
        "alt" => "Paseo junto al puerto de Plentzia",
        "caption" => "Paseo marítimo en el puerto",
        "fuente" => "https://www.minube.com",
        "fuente_texto" => "minube.com"
    ],
    [
        "src" => "https://www.eitb.eus/multimedia/images/2020/07/09/2598335/20200709_plentzia-puerto_1280x720.jpg",
        "alt" => "Vista aérea del puerto de Plentzia",
        "caption" => "Vista aérea del puerto",
        "fuente" => "https://www.eitb.eus",
        "fuente_texto" => "eitb.eus"
    ],
    [
        "src" => "https://www.viajarporelpaisvasco.com/wp-content/uploads/2019/07/puerto-de-plentzia.jpg",
        "alt" => "Barcos amarrados en Plentzia",
        "caption" => "Barcos en el puerto",
        "fuente" => "https://www.viajarporelpaisvasco.com",
        "fuente_texto" => "viajarporelpaisvasco.com"
    ],
    [
        "src" => "https://bizkaia.eus/documents/880303/0/Plentzia+puerto.jpg",
        "alt" => "Puerto y ría de Plentzia",
        "caption" => "Ría y puerto deportivo",
        "fuente" => "https://bizkaia.eus",
        "fuente_texto" => "bizkaia.eus"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información del Puerto Deportivo de Plentzia",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Plentzia - Bizkaia, País Vasco"
    ],
    [
      "icono" => "⚓",
      "titulo" => "Tipo",
      "descripcion" => "Puerto deportivo y pesquero"
    ],
    [
      "icono" => "🚤",
      "titulo" => "Servicios",
      "descripcion" => "Amarres, mantenimiento básico y servicios para embarcaciones"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Ría de Plentzia, paseo marítimo, casco histórico"
    ],
    [
      "icono" => "🚇",
      "titulo" => "Acceso",
      "descripcion" => "Acceso en metro desde Bilbao (línea hasta Plentzia) y en coche"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "⛵ Actividades en el Puerto de Plentzia",
  "items"  => [
    [ "icono" => "🚶‍♀️", "texto" => "Pasear junto a la ría" ],
    [ "icono" => "📸", "texto" => "Fotografiar el entorno marinero" ],
    [ "icono" => "🚤", "texto" => "Navegación recreativa" ],
    [ "icono" => "🍴", "texto" => "Disfrutar de bares y restaurantes cercanos" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-puerto-plentzia",
    "centro" => [43.4045, -2.9485],
    "zoom"   => 15,
    "marker" => [
        "coords" => [43.4045, -2.9485],
        "popup"  => "<strong>Puerto Deportivo de Plentzia</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 944 00 80 00",
    "enlace" => "tel:+34944008000"
  ],
  "web"      => [
    "texto" => "www.plentzia.eus",
    "url"   => "https://www.plentzia.eus"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Unai G.",
        "texto"  => "Un lugar precioso para pasear al atardecer."
    ],
    [
        "nombre" => "Marta C.",
        "texto"  => "Muy buen ambiente y vistas bonitas de la ría."
    ],
    [
        "nombre" => "Jon K.",
        "texto"  => "Perfecto para combinar con la playa y comer algo cerca."
    ],
    [
        "nombre" => "Elena R.",
        "texto"  => "Puerto pequeño pero con mucho encanto."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.4045&lon=-2.9485&zoom=10"; 
?>