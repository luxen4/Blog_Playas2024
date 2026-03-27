<?php 
$header = [
  "titulo" => "🏄 Surf en la Playa de Bakio",
  "descripcion" => "Destino surfero por excelencia en Bizkaia, con olas potentes y un entorno natural único"
];
?>
<?php /* https://www.yumping.com/surf/bakio-surf-taldea--e3291 */ ?>
<?php
$intro = [
  "parrafos" => [
    "La <strong>Playa de Bakio</strong> es uno de los principales destinos para la práctica del surf en el País Vasco, reconocida por sus olas largas y consistentes.",
    "Su extensión de más de 1 km de arena dorada la convierte en un lugar perfecto tanto para surfistas experimentados como para quienes desean iniciarse.",
    "En el paseo marítimo se encuentran numerosas <strong>escuelas de surf</strong>, alquiler de material y locales con ambiente surfero.",
    "Además, la playa ofrece vistas únicas a los acantilados y se encuentra muy cerca de <strong>San Juan de Gaztelugatxe</strong>, lo que la hace ideal para combinar deporte y turismo."
  ],
  "imagenes" => [
    [
      "src" => "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/17/6b/f7/e0/bakio-surf-rip-curl-eskola.jpg?w=900&h=500&s=1",
      "alt" => "Surfistas entrando al agua en la Playa de Bakio",
      "caption" => "Surf en la Playa de Bakio",
      "fuente" => "https://www.tripadvisor.es/Attraction_Review-g1069106-d12805421-Reviews-Bakio_Surf_Rip_Curl_Eskola-Bakio_Province_of_Vizcaya_Basque_Country.html",
      "fuente_texto" => "tripadvisor.es"
    ],
    [
      "src" => "https://kobasurfeskola.com/wp-content/uploads/2024/11/DSC07459-copia-1024x683.jpg",
      "alt" => "Escuela de surf en Bakio con alumnos",
      "caption" => "Tablas de la ecuela de surf en Bakio",
      "fuente" => "https://kobasurfeskola.com/",
      "fuente_texto" => "kobasurfeskola.com"
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/wrtxI2VDoBo", 
    "titulo" => "Surf en Bakio"
  ]
];
?>


<?php
$galeria_imagenes = [
    [
        "src" => "https://www.uribe.eu/gestor/recursos/uploads/imagenes/disfruta/playas/uribe-playas-bakio-3.jpg",
        "alt" => "Surfista en plena ola en Bakio",
        "caption" => "Olas para todos los niveles",
        "fuente" => "https://www.uribe.eu/somos-uribe/pueblos/bakio-es",
        "fuente_texto" => "uribe.eu"
    ],
    [
        "src" => "https://www.singlequiver.com/enelpico/wp-content/uploads/2021/04/playa-de-bakio-bizkaia.jpg",
        "alt" => "Panorámica de la Playa de Bakio",
        "caption" => "Playa de Bakio, paraíso surfero",
        "fuente" => "https://www.singlequiver.com/enelpico/surf-trip-a-bakio/",
        "fuente_texto" => "singlequiver.com"
    ],
    [
        "src" => "https://cdn1.yumping.com/emp/fotos/28/E/019722456/960/Al%20atardecer.jpg",
        "alt" => "Surfistas al atardecer en Bakio",
        "caption" => "Surf al atardecer en Bakio",
        "fuente" => "https://www.yumping.com/deportes-acuaticos/lokal-surf-bakio--e19722456?srsltid=AfmBOorbpq3rHVoM_HAMdt7i96Ha_IgEdGiuMwvOVLGcYxzLaV2X_rwx",
        "fuente_texto" => "yumping.com"
    ]
];
?>


<?php
$info = [
  "titulo" => "ℹ️ Información sobre el Surf en Bakio",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Bakio - Bizkaia, costa del País Vasco"
    ],
    [
      "icono" => "🏄",
      "titulo" => "Actividad principal",
      "descripcion" => "Surf durante todo el año, especialmente en otoño e invierno"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Características",
      "descripcion" => "Playa amplia, olas largas y potentes, apta para todos los niveles"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Servicios",
      "descripcion" => "Escuelas de surf, alquiler de material, duchas y paseo marítimo"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏄 Actividades en Bakio",
  "items"  => [
    [ "icono" => "🏄‍♀️", "texto" => "Tomar clases de surf en una de sus escuelas" ],
    [ "icono" => "🌅", "texto" => "Disfrutar de los atardeceres desde la playa" ],
    [ "icono" => "🍴", "texto" => "Probar pintxos y gastronomía local en el paseo marítimo" ],
    [ "icono" => "🚶‍♂️", "texto" => "Pasear hasta el mirador de Gaztelugatxe" ]
  ]
];
?>


<?php
// Configuración del mapa de la Playa de Bakio
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-playa-bakio",
    "centro" => [43.4297, -2.8111],   // Coordenadas aproximadas de Bakio
    "zoom"   => 14,
    "marker" => [
        "coords" => [43.4297, -2.8111],
        "popup"  => "<strong>Playa de Bakio - Surf</strong>"
    ]
];
?>


<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 946 19 91 91", 
    "enlace" => "tel:+34946199191" // Oficina de Turismo de Bakio
  ],
  "web"      => [
    "texto" => "www.bakio.org",
    "url"   => "https://www.bakio.org"
  ]
];
?>


<?php
$comentarios = [
    [
        "nombre" => "Mikel A.",
        "texto"  => "Las olas de Bakio son perfectas para mejorar la técnica, muy buen ambiente surfero."
    ],
    [
        "nombre" => "Laura S.",
        "texto"  => "Tomé clases de surf aquí y me encantó, profesores muy atentos."
    ],
    [
        "nombre" => "Jon I.",
        "texto"  => "Bakio es mi playa favorita del País Vasco para surfear."
    ],
    [
        "nombre" => "Andrea G.",
        "texto"  => "Aunque no surfees, la playa es preciosa y perfecta para pasar el día."
    ]
];
?>


<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.4297&lon=-2.8111&zoom=10"; 
?>
