<?php 
$header = [
  "titulo" => "⛪ Iglesia de Santa María de la Asunción",
  "descripcion" => "Monumento gótico en Castro-Urdiales, patrimonio histórico con vistas al puerto y al mar Cantábrico"
];
?>


<?php 
$intro = [
  "parrafos" => [
    "La <strong>Iglesia de Santa María de la Asunción</strong>, situada en lo alto del casco histórico de Castro-Urdiales, es uno de los ejemplos más destacados de <em>arquitectura gótica</em> en Cantabria.",

    "Su construcción comenzó en el siglo XIII, inspirada en el estilo de la catedral de Burgos y otras grandes obras góticas de Castilla, siendo un símbolo del esplendor medieval de la villa marinera.",

    "Declarada <strong>Monumento Nacional</strong> en 1931, la iglesia impresiona por su estructura de tres naves, sus arbotantes y sus espectaculares vidrieras.",

    "Desde su ubicación privilegiada junto al mar, ofrece unas vistas únicas del puerto, el rompeolas y el entorno histórico que comparte con el Castillo-Faro y la ermita de Santa Ana."
  ],
  "imagenes" => [
    [
        "src" => "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEguRFU5vOJ0zuZBGywsuUFzySd9MwgyEndKgLmymfzpjCHX8Y2pvegiBcz-Ik7WxVzAQJIFnUN2SgfveTL8b-9SnLn22DjKoLVNxHKz_ll9wuJlJoM4bzCEPryt3bU7STlU-jWRatdhExY/s640/Iglesia+de+Santa+Maria+de+la+Asuncion+3.JPG",
        "alt" => "Vista de la Iglesia de Santa María de la Asunción en Castro-Urdiales",
        "caption" => "Iglesia de Santa María de la Asunción",
        "fuente" => "https://loqueseveyoye.blogspot.com/2011/10/iglesia-de-santa-maria-de-la-asuncion.html",
        "fuente_texto" => "loqueseveyoye.blogspot.com"
    ],
    [
        "src" => "https://eolapaz.com/wp-content/uploads/2021/09/arte-arq-asuncion-castro2.jpg",
        "alt" => "Interior gótico de la Iglesia de Santa María en Castro-Urdiales",
        "caption" => "Interior de la Iglesia de Santa María",
        "fuente" => "https://eolapaz.com/ntra-sra-de-la-asuncion-de-castro-urdiales/",
        "fuente_texto" => "eolapaz.com"
    ],
  ]
];
?>


<?php
$galeria_imagenes = [
    [
        "src" => "https://www.cantabriarural.com/wp-content/uploads/2016/09/Iglesia-de-Santa-Maria-de-la-Asuncion-Castro-Urdiales-B-800x533.jpg",
        "alt" => "Fachada de la Iglesia de Santa María de Castro-Urdiales",
        "caption" => "Fachada principal de la iglesia",
        "fuente" => "https://www.cantabriarural.com/lugares-con-encanto/iglesia-de-santa-maria-de-la-asuncion.html",
        "fuente_texto" => "cantabriarural.com"
    ],
    [
        "src" => "https://d2exd72xrrp1s7.cloudfront.net/www/000/1k3/1n/1nku6ytdpnraa3slvwte0mj6a36p4wqmn-uhi9283114/0?width=768&height=576&crop=true",
        "alt" => "Interior gótico de la iglesia de Santa María en Castro-Urdiales",
        "caption" => "Interior de la iglesia",
        "fuente" => "https://www.komoot.com/es-es/highlight/1051258",
        "fuente_texto" => "komoot.com"
    ], /* https://losviajesdemargalliver.com/visitar-castro-urdiales-en-un-dia-cantabria/ */
    [
        "src" => "https://imagenes.20minutos.es/files/image_990_556/uploads/imagenes/2025/03/14/fotografia-castro-urdiales.jpeg",
        "alt" => "Vista del conjunto histórico con la Iglesia de Santa María y el puerto",
        "caption" => "Conjunto histórico y vistas al mar",
        "fuente" => "https://www.20minutos.es/viajes/destinos/cantabria-costa-castro-urdiales-iglesia-gotica-patrimonio-mundial-5691016/",
        "fuente_texto" => "20minutos.es"
    ]
];
?>


<?php
$info = [
  "titulo" => "ℹ️ Información de la Iglesia de Santa María",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Situada en el casco histórico, junto al puerto y al Castillo-Faro de Castro-Urdiales"
    ],
    [
      "icono" => "🏰",
      "titulo" => "Estilo arquitectónico",
      "descripcion" => "Ejemplo destacado del <strong>gótico clásico</strong> en el norte de España"
    ],
    [
      "icono" => "📜",
      "titulo" => "Historia",
      "descripcion" => "Construida entre los siglos XIII y XV, declarada Monumento Nacional en 1931"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Vidrieras, retablos, vistas panorámicas al mar y entorno monumental"
    ]
  ]
];
?>


<?php 
$actividades = [
  "titulo" => "⛪ Actividades y visitas en la Iglesia de Santa María",
  "items"  => [
    [ "icono" => "👣", "texto" => "Recorridos guiados por el interior de la iglesia" ],
    [ "icono" => "📸", "texto" => "Fotografía del conjunto histórico y las vistas al mar" ],
    [ "icono" => "📚", "texto" => "Conocer la historia gótica y el patrimonio de Castro-Urdiales" ],
    [ "icono" => "🎶", "texto" => "Asistencia a conciertos de música sacra en su interior" ],
    [ "icono" => "🌅", "texto" => "Disfrutar del atardecer desde su entorno privilegiado" ]
  ]
];
?>


<?php
// Configuración del mapa de la Iglesia de Santa María en Castro-Urdiales
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-santa-maria",
    "centro" => [43.3843, -3.2192],   // Coordenadas aproximadas de la iglesia
    "zoom"   => 17,
    "marker" => [
        "coords" => [43.3843, -3.2192],  
        "popup"  => "<strong>Iglesia de Santa María de la Asunción - Castro-Urdiales</strong>"
    ]
];
?>


<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 942 78 29 12", 
    "enlace" => "tel:+34942782912" // Teléfono de la Oficina de Turismo de Castro-Urdiales
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
        "nombre" => "Laura P.",
        "texto"  => "Una joya del gótico en Cantabria, con unas vidrieras impresionantes."
    ],
    [
        "nombre" => "José M.",
        "texto"  => "Las vistas desde la iglesia hacia el puerto y el mar son espectaculares."
    ],
    [
        "nombre" => "Ana R.",
        "texto"  => "Muy recomendable la visita guiada para comprender la historia y los detalles arquitectónicos."
    ],
    [
        "nombre" => "Carlos V.",
        "texto"  => "Un lugar imprescindible en Castro-Urdiales, lleno de historia y belleza."
    ]
];
?>
