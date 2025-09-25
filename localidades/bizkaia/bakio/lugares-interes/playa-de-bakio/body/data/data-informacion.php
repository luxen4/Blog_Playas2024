<?php 
$header = [
  "titulo" => "🏖️ Playa de Bakio",
  "descripcion" => "Amplia playa de arena fina en la costa de Bizkaia, ideal para surf y turismo familiar"
];
?>

<?php
$intro = [
  "parrafos" => [
    "La <strong>Playa de Bakio</strong> es una de las más conocidas de la costa vizcaína, famosa por su arena dorada y sus olas, lo que la convierte en un lugar de referencia para los surfistas.",
    "Con más de 1 km de extensión, es ideal tanto para familias como para quienes buscan practicar deportes acuáticos.",
    "Se encuentra rodeada de un paseo marítimo con bares, restaurantes y zonas de ocio, con un ambiente veraniego muy animado.",
    "A poca distancia se encuentra San Juan de Gaztelugatxe, lo que convierte Bakio en un punto perfecto para combinar naturaleza, playa y cultura."
  ],
  "imagenes" => [
    [
      "src" => "https://turismovasco.com/wp-content/uploads/2016/05/playa-de-bakio.jpg",
      "alt" => "Playa de Bakio vista panorámica",
      "caption" => "Playa de Bakio desde el paseo marítimo",
      "fuente" => "https://turismovasco.com",
      "fuente_texto" => "turismovasco.com"
    ],
    [
      "src" => "https://static1.eskypartners.com/wp-content/uploads/sites/19/2020/09/03142243/Playa-Bakio.jpg",
      "alt" => "Zona de surf en la Playa de Bakio",
      "caption" => "Surfistas en Bakio",
      "fuente" => "https://viajes.eskypartners.com",
      "fuente_texto" => "eskypartners.com"
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/8Y1pRz5dJ_A", // video de la Playa de Bakio
    "titulo" => "Video de la Playa de Bakio"
  ]
];
?>


<?php
$galeria_imagenes = [
    [
        "src" => "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0e/3e/10/47/playa-de-bakio.jpg?w=1200&h=-1&s=1",
        "alt" => "Playa de Bakio con bañistas",
        "caption" => "Ambiente veraniego en Bakio",
        "fuente" => "https://tripadvisor.com",
        "fuente_texto" => "tripadvisor.com"
    ],
    [
        "src" => "https://saposyprincesas.elmundo.es/wp-content/uploads/2019/06/playa-de-bakio.jpg",
        "alt" => "Playa de Bakio con marea baja",
        "caption" => "Playa en marea baja",
        "fuente" => "https://saposyprincesas.elmundo.es",
        "fuente_texto" => "saposyprincesas.elmundo.es"
    ],
    [
        "src" => "https://media.istockphoto.com/id/1137586116/es/foto/panor%C3%A1mica-de-la-playa-de-bakio.jpg?s=612x612",
        "alt" => "Vista panorámica aérea de Bakio",
        "caption" => "Bakio desde el aire",
        "fuente" => "https://istockphoto.com",
        "fuente_texto" => "istockphoto.com"
    ]
];
?>


<?php
$info = [
  "titulo" => "ℹ️ Información de la Playa de Bakio",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Bakio - Bizkaia, País Vasco"
    ],
    [
      "icono" => "📏",
      "titulo" => "Extensión",
      "descripcion" => "Aprox. 1 km de longitud y 100 m de anchura"
    ],
    [
      "icono" => "🏄‍♂️",
      "titulo" => "Actividades",
      "descripcion" => "Surf, bodyboard, paseos y ocio familiar"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Playa, paseo marítimo, surf, proximidad a San Juan de Gaztelugatxe"
    ],
    [
      "icono" => "🚗",
      "titulo" => "Acceso",
      "descripcion" => "Acceso en coche con aparcamiento cercano y transporte público desde Bilbao"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏖️ Actividades en la Playa de Bakio",
  "items"  => [
    [ "icono" => "🏄‍♂️", "texto" => "Surf y deportes acuáticos" ],
    [ "icono" => "🚶‍♀️", "texto" => "Pasear por el paseo marítimo" ],
    [ "icono" => "🍴", "texto" => "Degustar pintxos y gastronomía local" ],
    [ "icono" => "📸", "texto" => "Fotografiar la playa y San Juan de Gaztelugatxe cercano" ]
  ]
];
?>

<?php
// Configuración del mapa de la Playa de Bakio
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-playa-bakio",
    "centro" => [43.4294, -2.8116],   // Latitud, Longitud aproximadas
    "zoom"   => 14,
    "marker" => [
        "coords" => [43.4294, -2.8116],
        "popup"  => "<strong>Playa de Bakio</strong>"
    ]
];
?>


<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 946 19 44 25",
    "enlace" => "tel:+34946194425"
  ],
  "web"      => [
    "texto" => "www.bakio.eus",
    "url"   => "https://www.bakio.eus"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Mikel A.",
        "texto"  => "Playa amplia y perfecta para aprender surf, muy buen ambiente."
    ],
    [
        "nombre" => "Andrea G.",
        "texto"  => "Arena dorada y buenas olas, nos encantó la experiencia."
    ],
    [
        "nombre" => "Jon I.",
        "texto"  => "Ideal para ir en familia, con buen paseo marítimo y restaurantes cercanos."
    ],
    [
        "nombre" => "Laura F.",
        "texto"  => "Muy cerca de Gaztelugatxe, perfecta combinación de playa y excursión."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.4294&lon=-2.8116&zoom=10"; 
?>
