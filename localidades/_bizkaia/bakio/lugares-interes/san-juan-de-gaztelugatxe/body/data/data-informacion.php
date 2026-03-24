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
      "src" => "https://www.barcelo.com/guia-turismo/wp-content/uploads/2019/01/san-juan-de-gaztelugatxe-vista.jpg",
      "alt" => "Vista aerea de San Juan de Gaztelugatxe",
      "caption" => "Vista aerea de Gaztelugatxe",
      "fuente" => "https://www.barcelo.com/guia-turismo/es/espana/bilbao/que-ver/san-juan-de-gaztelugatxe/",
      "fuente_texto" => "barcelo.com"
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
    "url" => "https://www.youtube.com/embed/i5V2pzfNfdY", 
    "titulo" => "Video de San Juan de Gaztelugatxe"
  ]
];
?>


<?php
$galeria_imagenes = [
    [
        "src" => "https://turismo.euskadi.eus/contenidos/h_cultura_y_patrimonio/0000010461_h5_rec_turismo/es_10461/images/GL_sanjuandegaztelugatxeermita.jpg",
        "alt" => "Ermita en lo alto de San Juan de Gaztelugatxe",
        "caption" => "Ermita de San Juan",
        "fuente" => "https://turismo.euskadi.eus/es/san-juan-de-gaztelugatxe/webtur00-recursostop/es/",
        "fuente_texto" => "turismo.euskadi.eus"
    ],
    [
        "src" => "https://turismovasco.com/wp-content/uploads/2022/06/tour-excursion-a-San-Juan-de-Gaztelugatxe-desde-Bilbao.jpg",
        "alt" => "Escalera de piedra hacia San Juan de Gaztelugatxe",
        "caption" => "Escaleras míticas",
        "fuente" => "https://turismovasco.com/bizkaia/que-ver-bizkaia/san-juan-de-gaztelugatxe/",
        "fuente_texto" => "turismovasco.com"
    ],
    [
        "src" => "https://turismovasco.com/wp-content/uploads/et_temp/interior-ermita-San-Juan-de-Gaztelugatxe-215729_1024x675.jpg",
        "alt" => "interior ermita, San Juan de Gaztelugatxe",
        "caption" => "interior ermita, San Juan de Gaztelugatxe",
        "fuente" => "https://turismovasco.com/bizkaia/que-ver-bizkaia/san-juan-de-gaztelugatxe/attachment/interior-ermita-san-juan-de-gaztelugatxe/",
        "fuente_texto" => "turismovasco.com"
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
