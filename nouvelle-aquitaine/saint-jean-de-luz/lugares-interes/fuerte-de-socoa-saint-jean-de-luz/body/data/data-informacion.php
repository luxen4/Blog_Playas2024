<?php 
$header = [
  "titulo" => "🏰 Fuerte de Socoa (Ciboure - Saint-Jean-de-Luz)",
  "descripcion" => "Una fortificación histórica frente al mar diseñada para proteger la bahía de Saint-Jean-de-Luz"
];
?>

<?php
$intro = [
  "parrafos" => [
    "El <strong>Fuerte de Socoa</strong> es una impresionante fortificación situada a la entrada de la bahía de Saint-Jean-de-Luz, en la localidad de Ciboure.",
    "Fue construido en el siglo XVII y reforzado por el ingeniero militar <strong>Vauban</strong>, con el objetivo de proteger la costa de ataques marítimos.",
    "Su ubicación estratégica frente al océano Atlántico lo convierte en uno de los puntos más fotogénicos de la zona.",
    "Hoy en día, aunque no siempre es visitable por dentro, es un lugar ideal para pasear, disfrutar de las vistas y conocer la historia militar de la región."
  ],
  "imagenes" => [
    [
      "src" => "https://upload.wikimedia.org/wikipedia/commons/3/33/Fort_de_Socoa.jpg",
      "alt" => "Fuerte de Socoa frente al mar",
      "caption" => "Fuerte de Socoa",
      "fuente" => "https://fr.wikipedia.org/wiki/Fort_de_Socoa",
      "fuente_texto" => "wikipedia.org"
    ],
    [
      "src" => "https://www.guide-du-paysbasque.com/_bibli_rubriques/14632/fort-socoa.jpg",
      "alt" => "Vista del fuerte desde la playa",
      "caption" => "Fuerte desde la costa",
      "fuente" => "https://guide-du-paysbasque.com",
      "fuente_texto" => "guide-du-paysbasque.com"
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/4y5u7kVdQeE",
    "titulo" => "Video del Fuerte de Socoa"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "https://upload.wikimedia.org/wikipedia/commons/5/5d/Fort_Socoa_Ciboure.jpg",
        "alt" => "Vista panorámica del Fuerte de Socoa",
        "caption" => "Vista panorámica",
        "fuente" => "https://wikipedia.org",
        "fuente_texto" => "wikipedia.org"
    ],
    [
        "src" => "https://www.france-voyage.com/visuals/photos/ciboure-fort-socoa-1801_w600.webp",
        "alt" => "Fuerte junto al mar Cantábrico",
        "caption" => "Fuerte junto al mar",
        "fuente" => "https://www.france-voyage.com",
        "fuente_texto" => "france-voyage.com"
    ],
    [
        "src" => "https://www.saint-jean-de-luz.com/fileadmin/_processed_/8/3/csm_fort_socoa_01_6d2f5f.jpg",
        "alt" => "Murallas del fuerte",
        "caption" => "Murallas defensivas",
        "fuente" => "https://www.saint-jean-de-luz.com",
        "fuente_texto" => "saint-jean-de-luz.com"
    ],
    [
        "src" => "https://media.routard.com/image/98/7/fort-socoa.159987.jpg",
        "alt" => "Fuerte al atardecer",
        "caption" => "Atardecer en Socoa",
        "fuente" => "https://www.routard.com",
        "fuente_texto" => "routard.com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información del Fuerte de Socoa",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Ciboure, junto a Saint-Jean-de-Luz (Francia)"
    ],
    [
      "icono" => "📅",
      "titulo" => "Construcción",
      "descripcion" => "Siglo XVII"
    ],
    [
      "icono" => "🛡️",
      "titulo" => "Función",
      "descripcion" => "Defensa de la bahía frente a ataques marítimos"
    ],
    [
      "icono" => "🏗️",
      "titulo" => "Ingeniero",
      "descripcion" => "Reforzado por Vauban"
    ],
    [
      "icono" => "👀",
      "titulo" => "Visitas",
      "descripcion" => "Exterior visitable, acceso interior limitado"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏰 Qué hacer en el Fuerte de Socoa",
  "items"  => [
    [ "icono" => "🚶‍♂️", "texto" => "Pasear por el entorno del fuerte" ],
    [ "icono" => "📸", "texto" => "Fotografiar el paisaje costero" ],
    [ "icono" => "🌅", "texto" => "Disfrutar del atardecer" ],
    [ "icono" => "📚", "texto" => "Conocer su historia militar" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-fuerte-socoa",
    "centro" => [43.3865, -1.6810],
    "zoom"   => 15,
    "marker" => [
        "coords" => [43.3865, -1.6810],
        "popup"  => "<strong>Fuerte de Socoa</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información",
  "telefono" => [
    "texto"  => "+33 5 59 47 64 56",
    "enlace" => "tel:+33559476456"
  ],
  "web"      => [
    "texto" => "www.saint-jean-de-luz.com",
    "url"   => "https://www.saint-jean-de-luz.com"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Pierre L.",
        "texto"  => "Un lugar impresionante con mucha historia."
    ],
    [
        "nombre" => "Lucía M.",
        "texto"  => "Vistas espectaculares al mar."
    ],
    [
        "nombre" => "Ander K.",
        "texto"  => "Perfecto para fotos y paseos tranquilos."
    ],
    [
        "nombre" => "Sophie D.",
        "texto"  => "Muy bonito al atardecer."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.3865&lon=-1.6810&zoom=10"; 
?>