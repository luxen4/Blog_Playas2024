<?php 
$header = [
  "titulo" => "🏖️ Playa de los Barcos",
  "descripcion" => "Una de las playas más bonitas de Isla, con arena dorada, aguas tranquilas y un entorno natural privilegiado"
];
?>

<?php
$intro = [
  "parrafos" => [
    "La <strong>Playa de los Barcos</strong>, situada en la localidad de Isla (Cantabria), es una de las más populares de la zona gracias a su belleza natural y su ambiente familiar.",
    "De arena fina y dorada, esta playa ofrece aguas tranquilas ideales para el baño, especialmente en verano cuando es muy frecuentada por turistas y locales.",
    "Está rodeada de formaciones rocosas y pequeñas calas que le dan un encanto especial, perfecto para explorar y disfrutar del paisaje costero.",
    "Cuenta con buenos accesos, servicios cercanos y es perfecta tanto para familias como para quienes buscan relajarse junto al mar Cantábrico."
  ],
  "imagenes" => [
    [
      "src" => "https://turismodecantabria.com/wp-content/uploads/2023/03/playa-de-los-barcos-isla.png",
      "alt" => "Playa de los Barcos en Isla Cantabria",
      "caption" => "Playa de los Barcos",
      "fuente" => "https://turismodecantabria.com/playas/playa-de-los-barcos/",
      "fuente_texto" => "turismodecantabria.com"
    ],
    [
      "src" => "https://www.cantabriarural.com/wp-content/uploads/2019/06/playa-de-los-barcos-isla.jpg",
      "alt" => "Vista de la Playa de los Barcos con rocas",
      "caption" => "Entorno natural de la Playa de los Barcos",
      "fuente" => "https://www.cantabriarural.com",
      "fuente_texto" => "cantabriarural.com"
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/6m0kGzTzv1Q",
    "titulo" => "Video de la Playa de los Barcos"
  ]
]; 
?>

<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-barcos-isla-vista-general.jpg",
        "alt" => "Vista general de la Playa de los Barcos",
        "caption" => "Vista general",
        "fuente" => "https://turismodecantabria.com",
        "fuente_texto" => "turismodecantabria.com"
    ],
    [
        "src" => "https://upload.wikimedia.org/wikipedia/commons/8/8a/Playa_de_los_Barcos_Isla.jpg",
        "alt" => "Arena dorada de la Playa de los Barcos",
        "caption" => "Arena y costa",
        "fuente" => "https://commons.wikimedia.org",
        "fuente_texto" => "wikimedia.org"
    ],
    [
        "src" => "https://www.turismoislacantabria.com/wp-content/uploads/playa-barcos.jpg",
        "alt" => "Rocas en la Playa de los Barcos",
        "caption" => "Formaciones rocosas",
        "fuente" => "https://www.turismoislacantabria.com",
        "fuente_texto" => "turismoislacantabria.com"
    ],
    [
        "src" => "https://live.staticflickr.com/65535/playa-barcos-atardecer.jpg",
        "alt" => "Atardecer en la Playa de los Barcos",
        "caption" => "Atardecer en la playa",
        "fuente" => "https://www.flickr.com",
        "fuente_texto" => "flickr.com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información de la Playa de los Barcos",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Isla - Arnuero, Cantabria"
    ],
    [
      "icono" => "📏",
      "titulo" => "Longitud",
      "descripcion" => "Aproximadamente 300 metros"
    ],
    [
      "icono" => "🏖️",
      "titulo" => "Tipo de playa",
      "descripcion" => "Arena dorada y aguas tranquilas"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Servicios",
      "descripcion" => "Accesos, bares cercanos, zona turística"
    ],
    [
      "icono" => "🚗",
      "titulo" => "Acceso",
      "descripcion" => "Acceso fácil a pie desde el centro de Isla"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏄‍♂️ Actividades en la Playa de los Barcos",
  "items"  => [
    [ "icono" => "🏊‍♂️", "texto" => "Baño en aguas tranquilas" ],
    [ "icono" => "☀️", "texto" => "Tomar el sol en la arena" ],
    [ "icono" => "📸", "texto" => "Fotografía de paisajes costeros" ],
    [ "icono" => "🚶‍♀️", "texto" => "Paseos por la costa y calas cercanas" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-playa-barcos",
    "centro" => [43.499500, -3.543000],
    "zoom"   => 15,
    "marker" => [
        "coords" => [43.500000, -3.542000],
        "popup"  => "<strong>Playa de los Barcos</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 942 67 70 00",
    "enlace" => "tel:+34942677000"
  ],
  "web"      => [
    "texto" => "www.aytoarnuero.org",
    "url"   => "https://www.aytoarnuero.org"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Marta S.",
        "texto"  => "Una playa preciosa y muy tranquila, perfecta para ir en familia."
    ],
    [
        "nombre" => "Carlos D.",
        "texto"  => "De las mejores playas de Isla, muy limpia y bien cuidada."
    ],
    [
        "nombre" => "Laura G.",
        "texto"  => "Me encantaron las rocas y el paisaje, muy fotogénica."
    ],
    [
        "nombre" => "Javier T.",
        "texto"  => "Ideal para pasar el día, con todos los servicios cerca."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.5000&lon=-3.5420&zoom=10"; 
?>