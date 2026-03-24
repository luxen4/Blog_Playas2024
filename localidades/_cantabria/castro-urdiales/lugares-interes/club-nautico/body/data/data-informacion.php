<?php 
$header = [
  "titulo" => "⛵ Club Náutico",
  "descripcion" => "Club Náutico de Castro-Urdiales, instalaciones deportivas y vistas al puerto y la costa cántabra"
];
?>


<?php 
$intro = [
  "parrafos" => [
    "El <strong>Club Náutico de Castro-Urdiales</strong>, ubicado en el corazón del puerto, es un referente para los amantes del mar y los deportes náuticos en la costa cántabra.",

    "Su historia está ligada a la tradición marinera de la villa y hoy en día combina instalaciones modernas con un entorno privilegiado junto al mar.",

    "En el Club Náutico se pueden practicar <strong>vela</strong>, <strong>remo</strong>, <strong>pesca deportiva</strong> y disfrutar de actividades sociales relacionadas con la cultura marítima.",

    "Además de sus servicios náuticos, ofrece un punto de encuentro ideal para locales y visitantes que desean vivir la experiencia del mar Cantábrico en un ambiente único."
  ],
  "imagenes" => [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/club-nautico-castro-urdiales-cantabria-1.jpg",
        "alt" => "Vista exterior del Club Náutico de Castro-Urdiales",
        "caption" => "Club Náutico de Castro-Urdiales",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => "https://static.eldiario.es/clip/93c33959-870d-4d5e-ac3d-e1dd71e6c431_16-9-aspect-ratio_default_0.jpg",
        "alt" => "Puerto deportivo junto al Club Náutico de Castro-Urdiales",
        "caption" => "Puerto deportivo del Club Náutico",
        "fuente" => "https://www.eldiario.es/cantabria/primera-pagina/club-nautico-castro-urdiales-privado_132_1641862.html",
        "fuente_texto" => "eldiario.es"
    ],
  ]
];
?>


<?php
$galeria_imagenes = [
    [
        "src" => "https://www.muchocastro.com/asset/thumbnail,992,558,center,center/media/muchocastro/images/2023/11/11/2023111111303429656.jpg",
        "alt" => "Vista exterior del Club Náutico de Castro-Urdiales",
        "caption" => "Club Náutico de Castro-Urdiales",
        "fuente" => "https://www.muchocastro.com/articulo/reportajes/real-club-nautico-castro-urdiales-ofrece-concesion-restaurante/20231111113751071742.html",
        "fuente_texto" => "muchocastro.com"
    ],
    [
        "src" => "https://www.muchocastro.com/asset/thumbnail,992,558,center,center/media/muchocastro/images/2023/11/11/2023111111303496935.jpg",
        "alt" => "Detalle del edificio del Club Náutico junto al puerto",
        "caption" => "Interior del comedor del Club Náutico",
        "fuente" => "https://www.muchocastro.com/articulo/reportajes/real-club-nautico-castro-urdiales-ofrece-concesion-restaurante/20231111113751071742.html",
        "fuente_texto" => "muchocastro.com"
    ],
    [
        "src" => "https://patrimonio.coacan.es/wp-content/uploads/2018/03/17.CLUB-NA%C3%9ATICO-CASTRO-1100x543.jpg",
        "alt" => "Detalle del edificio del Club Náutico junto al puerto",
        "caption" => "Edificio del Club Náutico",
        "fuente" => "https://patrimonio.coacan.es/club-nautico/",
        "fuente_texto" => "patrimonio.coacan.es"
    ],
    [
        "src" => "https://vivecamino.com/img/gal/puerto-pesquero-de-castro-urdiales-wikimediamanuel-m-v_10498_p.jpg",
        "alt" => "Barcos amarrados en el puerto deportivo del Club Náutico de Castro-Urdiales",
        "caption" => "Puerto deportivo del Club Náutico",
        "fuente" => "https://vivecamino.com/castro-urdiales/puerto-pesquero-de-castro-urdiales-3522/",
        "fuente_texto" => "vivecamino.com"
    ]
];
?>





<?php
$info = [
  "titulo" => "ℹ️ Información del Club Náutico",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Edificio singular sobre el mar, en el puerto de Castro-Urdiales (Cantabria)"
    ],
    [
      "icono" => "⛵",
      "titulo" => "Actividad principal",
      "descripcion" => "Centro de actividades náuticas, vela y deportes marítimos"
    ],
    [
      "icono" => "🏛️",
      "titulo" => "Arquitectura",
      "descripcion" => "Ejemplo destacado de arquitectura racionalista de los años 30"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Vistas al puerto, entorno marítimo, eventos culturales y deportivos"
    ]
  ]
];
?>



<?php 
$actividades = [
  "titulo" => "⛵ Actividades en el Club Náutico de Castro-Urdiales",
  "items"  => [
    [ "icono" => "🚤", "texto" => "Práctica de vela y deportes náuticos" ],
    [ "icono" => "🎣", "texto" => "Pesca deportiva y recreativa en el Cantábrico" ],
    [ "icono" => "📸", "texto" => "Fotografía del puerto, embarcaciones y la costa" ],
    [ "icono" => "🌊", "texto" => "Paseos en barco y excursiones marítimas" ],
    [ "icono" => "👨‍👩‍👧‍👦", "texto" => "Actividades familiares y cursos de iniciación a la vela" ],
    [ "icono" => "🍹", "texto" => "Disfrutar de la terraza con vistas al mar" ]
  ]
];
?>

<?php
// Configuración del mapa del Club Náutico en Castro-Urdiales
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-club-nautico",
    "centro" => [43.3837, -3.2183],   // Latitud, Longitud aproximada del Club Náutico
    "zoom"   => 16,
    "marker" => [
        "coords" => [43.3837, -3.2183],  // Latitud, Longitud aproximada del Club Náutico
        "popup"  => "<strong>Club Náutico - Castro-Urdiales</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 942 86 97 76", 
    "enlace" => "tel:+34942869776" // Teléfono del Club Náutico Castro-Urdiales
  ],
  "web"      => [
    "texto" => "www.nauticocastrourdiales.com",
    "url"   => "https://www.nauticocastrourdiales.com"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "María G.",
        "texto"  => "El club tiene un ambiente estupendo, perfecto para disfrutar de la vela y el mar Cantábrico."
    ],
    [
        "nombre" => "Iñigo R.",
        "texto"  => "Gran lugar para aprender y practicar deportes náuticos, con muy buenas instalaciones."
    ],
    [
        "nombre" => "Clara S.",
        "texto"  => "Ideal para familias, mis hijos disfrutaron mucho con las actividades de iniciación a la vela."
    ],
    [
        "nombre" => "David L.",
        "texto"  => "Las vistas desde el puerto deportivo son espectaculares, muy recomendable para pasear y relajarse."
    ]
];
?>

<?php // $iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat={$latitude}&lon={$longitude}&zoom=10"; ?>





