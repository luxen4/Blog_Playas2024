<?php 
$header = [
  "titulo" => "🌅 Faro de Gorliz",
  "descripcion" => "El faro más alto de la costa cantábrica, con impresionantes vistas al mar y rutas de senderismo."
];
?>

<?php
$intro = [
  "parrafos" => [
    "El <strong>Faro de Gorliz</strong>, inaugurado en 1990, es el faro más alto de la costa cantábrica, situado a unos 165 metros sobre el nivel del mar.",
    "Se encuentra en el cabo Billano, en un entorno natural privilegiado, rodeado de acantilados y vegetación costera.",
    "Desde el faro se pueden contemplar vistas espectaculares de la bahía de Gorliz, la costa de Bizkaia e incluso, en días despejados, la costa de Gipuzkoa.",
    "El acceso al faro se realiza a pie, a través de rutas de senderismo muy populares entre los visitantes, que combinan mar, naturaleza y tranquilidad."
  ],
  "imagenes" => [
    [
      "src" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZmyjjAJE-g96f-bsSV2h9u8Ikco71eki9JA&s",
      "alt" => "Faro de Gorliz sobre el cabo",
      "caption" => "Faro de Gorliz en el cabo Billano",
      "fuente" => "https://www.visitgorliz.eus/patrimonio/faro/",
      "fuente_texto" => "visitgorliz.eus"
    ],
    [
      "src" => "https://yendoporlavida.com/wp-content/uploads/2018/03/DSC_0405-1024x683.jpg",
      "alt" => "Sendero hacia el Faro de Gorliz",
      "caption" => "Acceso al Faro de Gorliz",
      "fuente" => "https://yendoporlavida.com/ruta-del-faro-de-gorliz-por-la-costa/",
      "fuente_texto" => "yendoporlavida.com"
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/Z9S8yV2SLjs", 
    "titulo" => "Video de la Ruta al Faro de Gorliz"
  ]
];
?>


<?php
$galeria_imagenes = [
    [
        "src" => "https://live.staticflickr.com/6102/6318556786_46ee3bf4af_b.jpg",
        "alt" => "Faro de Gorliz desde el acantilado",
        "caption" => "Faro de Gorliz en los acantilados",
        "fuente" => "https://www.flickr.com/photos/roberrekalde/6318556786",
        "fuente_texto" => "flickr.com"
    ],
    [
        "src" => "https://turismo.euskadi.eus/contenidos/blog_post/0000000441_post_turismo/es_441/images/GLP_442_farogorliz.jpg",
        "alt" => "Faro de Gorliz al atardecer",
        "caption" => "Atardecer en el Faro de Gorliz",
        "fuente" => "https://turismo.euskadi.eus/contenidos/blog_post/0000000441_post_turismo/es_441/",
        "fuente_texto" => "turismo.euskadi.eus"
    ],
    [
      "src" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvxw3Xz764pSogPKxvk7KgF7ZoNtoClsVxDQ&s",
      "alt" => "Vista aerea del Faro de Gorliz",
      "caption" => "Vista aerea del Faro de Gorliz",
      "fuente" => "https://www.tiktok.com/@autokanpers/video/7335901118574251297",
      "fuente_texto" => "tiktok.com"
    ]
];
?>


<?php
$info = [
  "titulo" => "ℹ️ Información del Faro de Gorliz",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Cabo Billano, Gorliz - Bizkaia"
    ],
    [
      "icono" => "📏",
      "titulo" => "Altura",
      "descripcion" => "165 m sobre el nivel del mar (el más alto del Cantábrico)"
    ],
    [
      "icono" => "👣",
      "titulo" => "Acceso",
      "descripcion" => "A pie mediante rutas de senderismo desde la playa de Astondo"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Acantilados, vistas panorámicas, rutas costeras"
    ],
    [
      "icono" => "📸",
      "titulo" => "Fotografía",
      "descripcion" => "Uno de los lugares más fotografiados de Gorliz"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🚶‍♂️ Actividades en el Faro de Gorliz",
  "items"  => [
    [ "icono" => "🚶‍♀️", "texto" => "Hacer senderismo por la costa hasta el faro" ],
    [ "icono" => "📸", "texto" => "Fotografiar el faro y los acantilados" ],
    [ "icono" => "🌅", "texto" => "Disfrutar de un atardecer único sobre el Cantábrico" ],
    [ "icono" => "🌿", "texto" => "Explorar la naturaleza y el entorno protegido" ]
  ]
];
?>

<?php
// Configuración del mapa del Faro de Gorliz
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-faro-gorliz",
    "centro" => [43.4231, -2.9278],   // Coordenadas aproximadas
    "zoom"   => 14,
    "marker" => [
        "coords" => [43.4231, -2.9278],
        "popup"  => "<strong>Faro de Gorliz</strong>"
    ]
];
?>


<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 946 77 00 05",
    "enlace" => "tel:+34946770005"
  ],
  "web"      => [
    "texto" => "www.gorliz.eus",
    "url"   => "https://www.gorliz.eus"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Iñaki M.",
        "texto"  => "Las vistas desde el faro son espectaculares, merece la caminata."
    ],
    [
        "nombre" => "María G.",
        "texto"  => "Un lugar perfecto para ver el atardecer sobre el Cantábrico."
    ],
    [
        "nombre" => "Aitor L.",
        "texto"  => "Ruta fácil desde la playa de Astondo, muy recomendable."
    ],
    [
        "nombre" => "Lucía F.",
        "texto"  => "El faro más alto que he visto, la panorámica es increíble."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.4231&lon=-2.9278&zoom=10"; 
?>
