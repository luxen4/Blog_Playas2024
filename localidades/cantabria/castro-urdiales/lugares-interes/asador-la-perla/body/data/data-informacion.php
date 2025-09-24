<?php 
$header = [
  "titulo" => "🐟 Asador La Perla",
  "descripcion" => "Gastronomía cántabra frente al mar en Castro-Urdiales: pescados frescos y vistas al Cantábrico"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "El <strong>Asador La Perla</strong>, situado en <span class='font-semibold'>Castro-Urdiales</span>, 
    es un restaurante de referencia en la costa cántabra, famoso por su cocina tradicional y sus espectaculares vistas al mar Cantábrico.",

    "Especializado en <strong>pescados frescos</strong> y <strong>carnes a la brasa</strong>, ofrece una experiencia gastronómica que combina el sabor del producto local con un entorno único.",

    "El ambiente acogedor y su ubicación privilegiada junto al mar lo convierten en un lugar ideal para celebraciones, comidas familiares y escapadas gastronómicas.",

    "Un imprescindible para los amantes de la <strong>gastronomía cántabra</strong> y quienes buscan disfrutar de una experiencia culinaria con vistas inolvidables."
  ],
  "imagenes" => [
    [
        "src" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDJmTgxca6YCE72FWJNZm9S1BMRikJk3pXIg&s",
        "alt" => "Vista exterior del Asador La Perla en Castro-Urdiales",
        "caption" => "Vista exterior Asador La Perla",
        "fuente" => "https://gastroranking.es/r/asador-perla-2_290711/",
        "fuente_texto" => "gastroranking.es"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/plato-pescado-fresco-asador-la-perla.jpg",
        "alt" => "Plato de pescado fresco en el Asador La Perla",
        "caption" => "Especialidad de pescados frescos",
        "fuente" => "https://www.tripadvisor.es/Restaurant_Review-g776898-d1234567-Reviews-Asador_La_Perla-Castro_Urdiales_Cantabria.html",
        "fuente_texto" => "tripadvisor.es"
    ],
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjV-Qlg5nxD-s8fUmYc1GSb1y5cTntY5VtmmGRx2THOtjkukZaZFmYZ4ogWOHWV-oaEP5DsBxdwlcefKbpQLqH4Za3bY1aM7Y_cIVGpJpyBku7vgl7AAcaDdd1InKa5cTYgz6fZyq77JoyM/s1600/IMG_0240.JPG",
        "alt" => "Comedor interior del Asador La Perla en Castro-Urdiales",
        "caption" => "Comedor del Asador La Perla",
        "fuente" => "https://www.gastrourdiales.com/2018/07/asador-perla-castro-urdiales.html",
        "fuente_texto" => "gastrourdiales.com"
    ],
    [
        "src" => "https://img.carta.menu/storage/media/company_images/37574219/conversions/thumbnail.jpg",
        "alt" => "Vistas al mar desde el Asador La Perla",
        "caption" => "Vistas al mar Cantábrico",
        "fuente" => "https://carta.menu/restaurants/castro-urdiales/asador-perla-1#google_vignette",
        "fuente_texto" => "carta.menu"
    ],
    [
        "src" => "https://s2.ppllstatics.com/elcorreo/www/multimedia/201907/04/media/cortadas/parrillas2-kJFE-U806794120254DD-624x422@El%20Correo.jpg",
        "alt" => "Parrilla de sardinas asadas en el Asador La Perla",
        "caption" => "Parrilla de sardinas asadas en el Asador La Perla",
        "fuente" => "https://www.elcorreo.com/jantour/reportajes/parrillas-verano-20190705113400-nt.html",
        "fuente_texto" => "elcorreo.com"
    ]
];
?>


<?php
$info = [
  "titulo" => "ℹ️ Información del Asador",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Paseo Marítimo, Castro-Urdiales - Cantabria"
    ],
    [
      "icono" => "🍽️",
      "titulo" => "Especialidad",
      "descripcion" => "Pescados frescos del Cantábrico y carnes a la brasa"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Ambiente",
      "descripcion" => "Restaurante con vistas al mar en un entorno único"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Servicios",
      "descripcion" => "Reservas, terraza frente al mar, ambiente familiar y acogedor"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🍴 Actividades en el Asador La Perla",
  "items"  => [
    [ "icono" => "🐟", "texto" => "Disfrutar de pescados y mariscos frescos del Cantábrico" ],
    [ "icono" => "🍷", "texto" => "Acompañar la comida con vinos y txakoli de la región" ],
    [ "icono" => "🍮", "texto" => "Probar postres caseros típicos cántabros" ],
    [ "icono" => "🌊", "texto" => "Comer con vistas privilegiadas al mar Cantábrico" ],
    [ "icono" => "👨‍👩‍👧‍👦", "texto" => "Ambiente acogedor ideal para comidas en familia o con amigos" ],
    [ "icono" => "📸", "texto" => "Fotografiar las panorámicas del puerto y la costa" ]
  ]
];
?>

<?php
// Configuración del mapa del Asador La Perla en Castro-Urdiales
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-asador-la-perla",
    "centro" => [43.3822, -3.2205],   // Latitud, Longitud aproximada del centro (Castro-Urdiales)
    "zoom"   => 15,
    "marker" => [
        "coords" => [43.3822, -3.2205],  // Latitud, Longitud aproximada del Asador La Perla
        "popup"  => "<strong>Asador La Perla - Castro-Urdiales</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 942 86 25 21", 
    "enlace" => "tel:+34942862521" // Teléfono del Asador La Perla
  ],
  "web"      => [
    "texto" => "www.asadorlaperla.es",
    "url"   => "https://www.asadorlaperla.es"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Marina G.",
        "texto"  => "El mejor pescado a la brasa que he probado, totalmente fresco y con un sabor increíble."
    ],
    [
        "nombre" => "Iker R.",
        "texto"  => "La ubicación frente al mar es espectacular, cenar con esas vistas no tiene precio."
    ],
    [
        "nombre" => "Claudia S.",
        "texto"  => "Muy buena atención y ambiente acogedor, perfecto para ir en pareja o con amigos."
    ],
    [
        "nombre" => "Javier T.",
        "texto"  => "La carne a la brasa estaba deliciosa, y la carta de vinos muy completa."
    ]
];
?>

<?php // $iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat={$latitude}&lon={$longitude}&zoom=10"; ?>


