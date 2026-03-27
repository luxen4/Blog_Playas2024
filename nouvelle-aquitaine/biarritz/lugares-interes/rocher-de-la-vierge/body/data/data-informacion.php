<?php 
$header = [
  "titulo" => "🪨 Rocher de la Vierge (Biarritz)",
  "descripcion" => "El símbolo más emblemático de Biarritz, un mirador sobre el océano con vistas espectaculares del Cantábrico"
];
?>

<?php
$intro = [
  "parrafos" => [
    "El <strong>Rocher de la Vierge</strong> es uno de los lugares más icónicos de Biarritz, situado sobre una roca en medio del mar.",
    "Este impresionante enclave está coronado por una estatua de la Virgen y se accede a través de una pasarela metálica sobre el océano.",
    "Desde aquí se obtienen algunas de las mejores vistas de la costa vasca francesa, incluyendo playas, acantilados y el horizonte del Atlántico.",
    "Es un lugar imprescindible tanto por su valor paisajístico como por su historia ligada a la tradición marinera de la ciudad."
  ],
  "imagenes" => [
    [
      "src" => "https://upload.wikimedia.org/wikipedia/commons/6/6e/Biarritz_Rocher_de_la_Vierge.jpg",
      "alt" => "Rocher de la Vierge en Biarritz",
      "caption" => "Rocher de la Vierge",
      "fuente" => "https://fr.wikipedia.org/wiki/Biarritz",
      "fuente_texto" => "wikipedia.org"
    ],
    [
      "src" => "https://www.biarritz.fr/fileadmin/_processed_/5/3/csm_rocher_vierge_biarritz_01_9f8e7e.jpg",
      "alt" => "Pasarela hacia el Rocher de la Vierge",
      "caption" => "Acceso al mirador",
      "fuente" => "https://www.biarritz.fr",
      "fuente_texto" => "biarritz.fr"
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/6Z9kL3pQ0dE",
    "titulo" => "Video del Rocher de la Vierge en Biarritz"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "https://upload.wikimedia.org/wikipedia/commons/3/36/Rocher_de_la_Vierge_Biarritz_vue.jpg",
        "alt" => "Vista panorámica del Rocher de la Vierge",
        "caption" => "Vista panorámica",
        "fuente" => "https://wikipedia.org",
        "fuente_texto" => "wikipedia.org"
    ],
    [
        "src" => "https://www.france-voyage.com/visuals/photos/biarritz-rocher-vierge-1799_w600.webp",
        "alt" => "Rocher de la Vierge sobre el mar",
        "caption" => "Formación rocosa",
        "fuente" => "https://www.france-voyage.com",
        "fuente_texto" => "france-voyage.com"
    ],
    [
        "src" => "https://www.guide-du-paysbasque.com/_bibli_rubriques/14590/rocher-vierge.jpg",
        "alt" => "Pasarela sobre el océano",
        "caption" => "Pasarela metálica",
        "fuente" => "https://guide-du-paysbasque.com",
        "fuente_texto" => "guide-du-paysbasque.com"
    ],
    [
        "src" => "https://media.routard.com/image/98/3/rocher-vierge.159983.jpg",
        "alt" => "Rocher de la Vierge al atardecer",
        "caption" => "Atardecer en Biarritz",
        "fuente" => "https://www.routard.com",
        "fuente_texto" => "routard.com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información del Rocher de la Vierge",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Biarritz, País Vasco francés"
    ],
    [
      "icono" => "🪨",
      "titulo" => "Tipo",
      "descripcion" => "Formación rocosa con mirador"
    ],
    [
      "icono" => "🌉",
      "titulo" => "Acceso",
      "descripcion" => "Pasarela metálica sobre el mar"
    ],
    [
      "icono" => "👀",
      "titulo" => "Vistas",
      "descripcion" => "Panorámicas del océano y la costa"
    ],
    [
      "icono" => "📸",
      "titulo" => "Interés",
      "descripcion" => "Uno de los lugares más fotografiados de Biarritz"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "📸 Qué hacer en el Rocher de la Vierge",
  "items"  => [
    [ "icono" => "🚶‍♂️", "texto" => "Cruzar la pasarela sobre el mar" ],
    [ "icono" => "📸", "texto" => "Hacer fotos del paisaje costero" ],
    [ "icono" => "🌊", "texto" => "Disfrutar del sonido del océano" ],
    [ "icono" => "🌅", "texto" => "Ver el atardecer desde el mirador" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-rocher-vierge",
    "centro" => [43.4832, -1.5680],
    "zoom"   => 15,
    "marker" => [
        "coords" => [43.4832, -1.5680],
        "popup"  => "<strong>Rocher de la Vierge</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información",
  "telefono" => [
    "texto"  => "+33 5 59 22 37 10",
    "enlace" => "tel:+33559223710"
  ],
  "web"      => [
    "texto" => "www.biarritz.fr",
    "url"   => "https://www.biarritz.fr"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Sophie L.",
        "texto"  => "Un lugar impresionante con vistas únicas."
    ],
    [
        "nombre" => "Carlos M.",
        "texto"  => "La pasarela es espectacular, muy recomendable."
    ],
    [
        "nombre" => "Ane G.",
        "texto"  => "Perfecto para fotos, sobre todo al atardecer."
    ],
    [
        "nombre" => "Julien R.",
        "texto"  => "Uno de los rincones más bonitos de Biarritz."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.4832&lon=-1.5680&zoom=10"; 
?>