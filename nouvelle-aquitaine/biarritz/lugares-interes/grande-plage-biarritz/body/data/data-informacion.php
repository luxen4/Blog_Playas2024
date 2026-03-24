<?php 
$header = [
  "titulo" => "🏖️ Grande Plage de Biarritz",
  "descripcion" => "La playa más famosa de Biarritz, ideal para disfrutar del océano, el surf y el ambiente elegante de la ciudad"
];
?>

<?php
$intro = [
  "parrafos" => [
    "La <strong>Grande Plage de Biarritz</strong> es la playa más emblemática de la ciudad y uno de los destinos más conocidos del País Vasco francés.",
    "Situada en pleno centro urbano, combina un entorno elegante con la fuerza del océano Atlántico.",
    "Es famosa por su arena fina, su animado ambiente y su tradición vinculada al surf.",
    "Además, está rodeada de hoteles históricos, paseos marítimos y restaurantes, lo que la convierte en un lugar perfecto para pasar el día."
  ],
  "imagenes" => [
    [
      "src" => "https://upload.wikimedia.org/wikipedia/commons/4/4d/Grande_Plages_Biarritz.jpg",
      "alt" => "Grande Plage de Biarritz",
      "caption" => "Grande Plage",
      "fuente" => "https://fr.wikipedia.org/wiki/Biarritz",
      "fuente_texto" => "wikipedia.org"
    ],
    [
      "src" => "https://www.biarritz.fr/fileadmin/_processed_/6/2/csm_grande_plage_01_5c9a5c.jpg",
      "alt" => "Playa con el paseo marítimo",
      "caption" => "Playa en el centro de Biarritz",
      "fuente" => "https://www.biarritz.fr",
      "fuente_texto" => "biarritz.fr"
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/0k1uP9k3Vn0",
    "titulo" => "Video de la Grande Plage de Biarritz"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "https://upload.wikimedia.org/wikipedia/commons/1/14/Biarritz_Grande_Plages_vue.jpg",
        "alt" => "Vista panorámica de la Grande Plage",
        "caption" => "Vista panorámica",
        "fuente" => "https://wikipedia.org",
        "fuente_texto" => "wikipedia.org"
    ],
    [
        "src" => "https://www.france-voyage.com/visuals/photos/biarritz-grande-plage-1798_w600.webp",
        "alt" => "Playa con bañistas",
        "caption" => "Ambiente veraniego",
        "fuente" => "https://www.france-voyage.com",
        "fuente_texto" => "france-voyage.com"
    ],
    [
        "src" => "https://www.guide-du-paysbasque.com/_bibli_rubriques/14589/grande-plage-biarritz.jpg",
        "alt" => "Surf en la Grande Plage",
        "caption" => "Surf en Biarritz",
        "fuente" => "https://guide-du-paysbasque.com",
        "fuente_texto" => "guide-du-paysbasque.com"
    ],
    [
        "src" => "https://media.routard.com/image/98/2/grande-plage-biarritz.159982.jpg",
        "alt" => "Atardecer en la playa",
        "caption" => "Atardecer en Biarritz",
        "fuente" => "https://www.routard.com",
        "fuente_texto" => "routard.com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información de la Grande Plage",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Centro de Biarritz, País Vasco francés"
    ],
    [
      "icono" => "🏖️",
      "titulo" => "Tipo de playa",
      "descripcion" => "Arena fina y dorada"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Oleaje",
      "descripcion" => "Moderado a fuerte, ideal para surf"
    ],
    [
      "icono" => "🏄‍♂️",
      "titulo" => "Ambiente",
      "descripcion" => "Surf, turismo y ambiente urbano"
    ],
    [
      "icono" => "🚿",
      "titulo" => "Servicios",
      "descripcion" => "Duchas, socorristas, alquiler de hamacas y restaurantes"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏄‍♂️ Qué hacer en la Grande Plage",
  "items"  => [
    [ "icono" => "🏊‍♂️", "texto" => "Bañarse en el océano Atlántico" ],
    [ "icono" => "🏄‍♂️", "texto" => "Practicar surf" ],
    [ "icono" => "🚶‍♂️", "texto" => "Pasear por el paseo marítimo" ],
    [ "icono" => "🌅", "texto" => "Disfrutar del atardecer" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-grande-plage-biarritz",
    "centro" => [43.4829, -1.5590],
    "zoom"   => 15,
    "marker" => [
        "coords" => [43.4829, -1.5590],
        "popup"  => "<strong>Grande Plage de Biarritz</strong>"
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
        "nombre" => "Laura M.",
        "texto"  => "Una playa espectacular en pleno centro."
    ],
    [
        "nombre" => "Iker S.",
        "texto"  => "Perfecta para surf y ambiente animado."
    ],
    [
        "nombre" => "Sophie D.",
        "texto"  => "Muy bonita, aunque bastante concurrida en verano."
    ],
    [
        "nombre" => "Carlos R.",
        "texto"  => "Ideal para pasar el día y disfrutar del paisaje."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.4829&lon=-1.5590&zoom=10"; 
?>