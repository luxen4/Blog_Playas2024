<?php 
$header = [
  "titulo" => "🌊 Paseo Marítimo",
  "descripcion" => "Paseo frente al mar en Castro-Urdiales, ideal para caminar, disfrutar de las vistas y la brisa del Cantábrico"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "El <strong>Paseo Marítimo de Castro-Urdiales</strong> recorre la costa de la villa ofreciendo unas vistas espectaculares del <em>mar Cantábrico</em> y del puerto.",

    "Es un lugar ideal para caminar, correr, disfrutar de la brisa marina y contemplar los barcos amarrados en el puerto.",

    "El paseo está rodeado de jardines, bancos y zonas de descanso, siendo un punto de encuentro popular tanto para locales como para turistas.",

    "Su recorrido permite combinar la experiencia marítima con otros lugares de interés cercanos, como la playa, el puerto deportivo y el casco histórico."
  ],
  "imagenes" => [
    [
        "src" => "https://www.muchocastro.com/asset/thumbnail,992,558,center,center/media/muchocastro/images/2021/04/22/490728578e7b1cbd0f37c39bcf5c4488.jpg",
        "alt" => "Vista del Paseo Marítimo de Castro-Urdiales junto al mar",
        "caption" => "Paseo Marítimo",
        "fuente" => "https://www.muchocastro.com/articulo/sociedad/las-obras-de-reparacion-y-pintado-de-la-balaustrada-del-paseo-maritimo-se-ejecutaran-antes-del-verano/20210422143708061564.html",
        "fuente_texto" => "muchocastro.com"
    ],
    [
        "src" => "https://15bc603535021b5e1f6540fa725b517a.cdn.bubble.io/cdn-cgi/image/w=1536,h=864,f=auto,dpr=1,fit=contain/f1724083116298x192407337286862430/paseo-maritimo-de-castro-urdiales-cantabria-vivirnoescaro.jpg",
        "alt" => "Bancos y zonas de descanso en el Paseo Marítimo",
        "caption" => "Áreas de descanso",
        "fuente" => "https://mobilcity.es/lugares_de_interes/paseo-mar%C3%ADtimo",
        "fuente_texto" => "mobilcity.es"
    ]
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "https://www.viajaporlibre.com/wp-content/uploads/2020/09/castro-urdiales-5-770x513.jpg.webp",
        "alt" => "Vista del Paseo Marítimo de Castro-Urdiales",
        "caption" => "Paseo Marítimo",
        "fuente" => "https://www.viajaporlibre.com/espana/cantabria/castro-urdiales",
        "fuente_texto" => "viajaporlibre.com"
    ],
    [
        "src" => "https://www.viajandoporelmundomundial.com/wp-content/uploads/2021/02/puerto.jpg.webp",
        "alt" => "Personas paseando por el Paseo Marítimo",
        "caption" => "Personas paseando por el Paseo Marítimo",
        "fuente" => "https://www.viajandoporelmundomundial.com/que-ver-en-castro-urdiales-cantabria/",
        "fuente_texto" => "viajandoporelmundomundial.com"
    ],
    [
        "src" => "https://cornisacantabrica.com/wp-content/uploads/2023/10/letras-de-Castro-Urdiales.jpeg",
        "alt" => "Atardecer desde el Paseo Marítimo en Castro-Urdiales",
        "caption" => "Atardecer junto al Cantábrico",
        "fuente" => "https://cornisacantabrica.com/donde-ver-el-atardecer-en-castro-urdiales",
        "fuente_texto" => "cornisacantabrica.com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información del Paseo Marítimo",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Recorre la costa de Castro-Urdiales, desde el puerto hasta las zonas de playa"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Entorno",
      "descripcion" => "Frente al mar Cantábrico, con vistas al puerto y playas"
    ],
    [
      "icono" => "🏞️",
      "titulo" => "Atractivo principal",
      "descripcion" => "Pasear, hacer deporte, disfrutar de la brisa marina y la panorámica costera"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Vistas al puerto, paseos al atardecer, bancos y jardines"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🌊 Actividades en el Paseo Marítimo",
  "items"  => [
    [ "icono" => "🚶", "texto" => "Caminar a lo largo del paseo" ],
    [ "icono" => "🏃", "texto" => "Correr o practicar deporte al aire libre" ],
    [ "icono" => "📸", "texto" => "Fotografía del mar, barcos y atardeceres" ],
    [ "icono" => "🧘", "texto" => "Relajarse y disfrutar de la brisa marina" ],
    [ "icono" => "👨‍👩‍👧‍👦", "texto" => "Pasar tiempo en familia en zonas seguras y accesibles" ]
  ]
];
?>

<?php
// Configuración del mapa del Paseo Marítimo en Castro-Urdiales
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-paseo-maritimo",
    "centro" => [43.3838, -3.2189],   // Coordenadas aproximadas del paseo
    "zoom"   => 16,
    "marker" => [
        "coords" => [43.3838, -3.2189],  
        "popup"  => "<strong>Paseo Marítimo - Castro-Urdiales</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 942 78 29 12", 
    "enlace" => "tel:+34942782912" // Oficina de Turismo de Castro-Urdiales
  ],
  "web"      => [
    "texto" => "turismodecastro.com",
    "url"   => "https://turismodecastro.com"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Ana L.",
        "texto"  => "Un paseo agradable con vistas preciosas al puerto y al mar."
    ],
    [
        "nombre" => "Pedro F.",
        "texto"  => "Ideal para caminar al atardecer y relajarse."
    ],
    [
        "nombre" => "Lucía G.",
        "texto"  => "Perfecto para pasear con niños o salir a correr."
    ],
    [
        "nombre" => "Javier M.",
        "texto"  => "El ambiente junto al mar es muy agradable, especialmente los fines de semana."
    ]
];
?>

