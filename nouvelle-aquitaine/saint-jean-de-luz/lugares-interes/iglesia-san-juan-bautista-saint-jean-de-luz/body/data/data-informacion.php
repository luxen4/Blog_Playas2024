<?php 
$header = [
  "titulo" => "⛪ Iglesia de San Juan Bautista (Saint-Jean-de-Luz)",
  "descripcion" => "Uno de los templos más emblemáticos del País Vasco francés, famoso por la boda de Luis XIV"
];
?>

<?php
$intro = [
  "parrafos" => [
    "La <strong>Iglesia de San Juan Bautista</strong> es uno de los monumentos más importantes de Saint-Jean-de-Luz, conocida por su impresionante arquitectura y su relevancia histórica.",
    "Aquí se celebró en 1660 la boda del rey <strong>Luis XIV de Francia</strong> con María Teresa de Austria, un evento clave en la historia europea.",
    "El interior del templo destaca por sus galerías de madera típicas del País Vasco y su espectacular retablo barroco dorado.",
    "Situada en pleno centro histórico, es una visita imprescindible para quienes recorren esta elegante ciudad costera."
  ],
  "imagenes" => [
    [
      "src" => "https://upload.wikimedia.org/wikipedia/commons/5/5f/Saint-Jean-Baptiste_Saint-Jean-de-Luz.jpg",
      "alt" => "Fachada de la Iglesia de San Juan Bautista",
      "caption" => "Iglesia de San Juan Bautista",
      "fuente" => "https://fr.wikipedia.org/wiki/%C3%89glise_Saint-Jean-Baptiste_de_Saint-Jean-de-Luz",
      "fuente_texto" => "wikipedia.org"
    ],
    [
      "src" => "https://upload.wikimedia.org/wikipedia/commons/4/47/Eglise_Saint-Jean-Baptiste_interieur.jpg",
      "alt" => "Interior con galerías de madera",
      "caption" => "Interior de la iglesia",
      "fuente" => "https://fr.wikipedia.org",
      "fuente_texto" => "wikipedia.org"
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/2F0zR6rK9lA",
    "titulo" => "Video de la Iglesia de San Juan Bautista"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "https://www.saint-jean-de-luz.com/fileadmin/_processed_/c/5/csm_eglise_saint_jean_baptiste_01_0c4c7f.jpg",
        "alt" => "Vista exterior de la iglesia",
        "caption" => "Fachada principal",
        "fuente" => "https://www.saint-jean-de-luz.com",
        "fuente_texto" => "saint-jean-de-luz.com"
    ],
    [
        "src" => "https://upload.wikimedia.org/wikipedia/commons/7/7c/Saint-Jean-de-Luz_eglise_interieur.jpg",
        "alt" => "Galerías interiores de madera",
        "caption" => "Galerías típicas vascas",
        "fuente" => "https://wikipedia.org",
        "fuente_texto" => "wikipedia.org"
    ],
    [
        "src" => "https://www.guide-du-paysbasque.com/_bibli_rubriques/14630/eglise-saint-jean-baptiste.jpg",
        "alt" => "Retablo barroco dorado",
        "caption" => "Retablo barroco",
        "fuente" => "https://guide-du-paysbasque.com",
        "fuente_texto" => "guide-du-paysbasque.com"
    ],
    [
        "src" => "https://media.routard.com/image/98/5/eglise-saint-jean-baptiste.159985.jpg",
        "alt" => "Entrada de la iglesia en el casco antiguo",
        "caption" => "Entrada en el centro histórico",
        "fuente" => "https://www.routard.com",
        "fuente_texto" => "routard.com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información de la Iglesia de San Juan Bautista",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Centro histórico de Saint-Jean-de-Luz, Francia"
    ],
    [
      "icono" => "📅",
      "titulo" => "Construcción",
      "descripcion" => "Siglo XVII"
    ],
    [
      "icono" => "👑",
      "titulo" => "Evento histórico",
      "descripcion" => "Boda de Luis XIV en 1660"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Destaca por",
      "descripcion" => "Galerías de madera y retablo barroco"
    ],
    [
      "icono" => "⏰",
      "titulo" => "Visitas",
      "descripcion" => "Abierta al público con horarios variables"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🎒 Qué hacer en la iglesia",
  "items"  => [
    [ "icono" => "⛪", "texto" => "Visitar el interior del templo" ],
    [ "icono" => "📸", "texto" => "Fotografiar su arquitectura histórica" ],
    [ "icono" => "📜", "texto" => "Descubrir su historia y la boda real" ],
    [ "icono" => "🚶‍♂️", "texto" => "Pasear por el casco antiguo cercano" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-iglesia-san-juan-bautista-luz",
    "centro" => [43.3887, -1.6627],
    "zoom"   => 15,
    "marker" => [
        "coords" => [43.3887, -1.6627],
        "popup"  => "<strong>Iglesia de San Juan Bautista</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información",
  "telefono" => [
    "texto"  => "+33 5 59 26 08 81",
    "enlace" => "tel:+33559260881"
  ],
  "web"      => [
    "texto" => "www.saintjeandeluz.fr",
    "url"   => "https://www.saintjeandeluz.fr"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Marie L.",
        "texto"  => "Impresionante por dentro, muy diferente a otras iglesias."
    ],
    [
        "nombre" => "Carlos M.",
        "texto"  => "Muy interesante por su historia y arquitectura."
    ],
    [
        "nombre" => "Ane B.",
        "texto"  => "El retablo es espectacular."
    ],
    [
        "nombre" => "Julien P.",
        "texto"  => "Una visita obligatoria en Saint-Jean-de-Luz."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.3887&lon=-1.6627&zoom=10"; 
?>