<?php 
$header = [
  "titulo" => "⛪ San Juan de Gaztelugatxe",
  "descripcion" => "Islote emblemático del País Vasco con una ermita dedicada a San Juan y espectaculares vistas al mar Cantábrico"
];
?>

<?php
$intro = [
  "parrafos" => [
    "San Juan de Gaztelugatxe es uno de los lugares más icónicos del País Vasco, famoso por su ermita en lo alto del islote unida a tierra firme por un espectacular puente de piedra y 241 escalones.",
    "La tradición dice que tras subir, hay que tocar la campana de la ermita tres veces y pedir un deseo.",
    "El entorno natural, los acantilados y el mar Cantábrico convierten a Gaztelugatxe en un escenario único para los amantes de la fotografía y el senderismo.",
    "Además, su fama internacional creció al ser escenario de la serie *Juego de Tronos*, representando Rocadragón."
  ],
  "imagenes" => [
    [
      "src" => "https://www.spain.info/export/sites/segtur/.content/imagenes/cabeceras-grandes/pais-vasco/gaztelugatxe-bizkaia-cabecera-cg.jpg",
      "alt" => "San Juan de Gaztelugatxe visto desde la costa",
      "caption" => "Vista panorámica de Gaztelugatxe",
      "fuente" => "https://spain.info",
      "fuente_texto" => "spain.info"
    ],
    [
      "src" => "https://cdn.civitatis.com/espana/bilbao/galeria/san-juan-gaztelugatxe.jpg",
      "alt" => "Escalera hacia la ermita de San Juan de Gaztelugatxe",
      "caption" => "Los 241 escalones de Gaztelugatxe",
      "fuente" => "https://civitatis.com",
      "fuente_texto" => "civitatis.com"
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/mRjA8Xz0iSw", 
    "titulo" => "Video de San Juan de Gaztelugatxe"
  ]
];
?>


<?php
$galeria_imagenes = [
    [
        "src" => "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/0a/13/7d/caption.jpg?w=1200&h=-1&s=1",
        "alt" => "Ermita en lo alto de San Juan de Gaztelugatxe",
        "caption" => "Ermita de San Juan",
        "fuente" => "https://tripadvisor.com",
        "fuente_texto" => "tripadvisor.com"
    ],
    [
        "src" => "https://media.tacdn.com/media/attractions-splice-spp-674x446/0b/1d/5f/7a.jpg",
        "alt" => "Escalera de piedra hacia San Juan de Gaztelugatxe",
        "caption" => "Escaleras míticas",
        "fuente" => "https://tripadvisor.com",
        "fuente_texto" => "tripadvisor.com"
    ],
    [
        "src" => "https://cdn.getyourguide.com/img/tour/63c2f4f92a8e3.jpeg/146.jpg",
        "alt" => "Vista aérea de San Juan de Gaztelugatxe",
        "caption" => "Vista aérea de Gaztelugatxe",
        "fuente" => "https://getyourguide.com",
        "fuente_texto" => "getyourguide.com"
    ]
];
?>


<?php
$info = [
  "titulo" => "ℹ️ Información de San Juan de Gaztelugatxe",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Bermeo - Bizkaia, País Vasco"
    ],
    [
      "icono" => "⛪",
      "titulo" => "Ermita",
      "descripcion" => "Dedicada a San Juan Bautista, origen medieval"
    ],
    [
      "icono" => "🪜",
      "titulo" => "Acceso",
      "descripcion" => "241 escalones conectan el islote con tierra firme"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Puente, escalera, ermita, vistas al Cantábrico"
    ],
    [
      "icono" => "🎬",
      "titulo" => "Cine y TV",
      "descripcion" => "Escenario de 'Juego de Tronos' como Rocadragón"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🌊 Actividades en San Juan de Gaztelugatxe",
  "items"  => [
    [ "icono" => "🚶‍♂️", "texto" => "Subir los escalones hasta la ermita" ],
    [ "icono" => "📸", "texto" => "Fotografiar las vistas y el islote" ],
    [ "icono" => "🔔", "texto" => "Tocar la campana de la ermita y pedir un deseo" ],
    [ "icono" => "🌅", "texto" => "Disfrutar de amaneceres y atardeceres únicos" ]
  ]
];
?>


<?php
// Configuración del mapa de San Juan de Gaztelugatxe
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-san-juan-gaztelugatxe",
    "centro" => [43.4470, -2.7850],   // Coordenadas aproximadas
    "zoom"   => 14,
    "marker" => [
        "coords" => [43.4470, -2.7850],
        "popup"  => "<strong>San Juan de Gaztelugatxe</strong>"
    ]
];
?>


<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 946 88 11 95",
    "enlace" => "tel:+34946881195" // Oficina de Turismo de Bermeo
  ],
  "web"      => [
    "texto" => "www.bermeo.eus",
    "url"   => "https://www.bermeo.eus"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Sofía M.",
        "texto"  => "Subir los escalones fue agotador pero la vista desde arriba lo merece totalmente."
    ],
    [
        "nombre" => "Pedro L.",
        "texto"  => "Un lugar mágico, de lo mejor del País Vasco."
    ],
    [
        "nombre" => "Isabel R.",
        "texto"  => "La experiencia de tocar la campana fue muy especial."
    ],
    [
        "nombre" => "Carlos T.",
        "texto"  => "Impresionante al atardecer, recomiendo llevar cámara buena."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.4470&lon=-2.7850&zoom=10"; 
?>
