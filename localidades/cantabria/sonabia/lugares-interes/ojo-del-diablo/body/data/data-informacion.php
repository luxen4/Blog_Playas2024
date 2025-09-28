<?php 
$header = [
  "titulo" => "⛰️ Ojo del Diablo en Sonabia",
  "descripcion" => "Formación rocosa emblemática con vistas espectaculares al Cantábrico y a la costa cántabra"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "El <strong>Ojo del Diablo</strong> es una curiosa formación rocosa situada en Sonabia, famosa por sus vistas panorámicas del mar Cantábrico.",
    "Un lugar perfecto para el senderismo, la fotografía y para contemplar la fuerza del mar golpeando los acantilados.",
    "El acceso se realiza a través de senderos naturales que permiten disfrutar del paisaje, la fauna y la flora autóctona de la zona.",
    "Una visita ideal para amantes de la naturaleza, la geología y los paisajes costeros impresionantes."
  ],
  "imagenes" => [
    [
        "src" => "https://s2.ppllstatics.com/eldiariomontanes/www/multimedia/2023/03/27/ruta-ojos-diablo-kEgF-U1901013690534ppF-1200x840@Diario%20Montanes.jpg",
        "alt" => "Vista del Ojo del Diablo en Sonabia",
        "caption" => "Formación rocosa Ojo del Diablo",
        "fuente" => "https://www.eldiariomontanes.es/dmontana/senderismo/ojos-diablo-puerta-acceso-rincon-magico-liendo-20230328185739-nt.html?ref=https%3A%2F%2Fwww.eldiariomontanes.es%2Fdmontana%2Fsenderismo%2Fojos-diablo-puerta-acceso-rincon-magico-liendo-20230328185739-nt.html",
        "fuente_texto" => "eldiariomontanes.es"
    ],
    [
        "src" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsZ0wER8bxV6MmS0FccYeYnu-KXJ-AjOjvFQ&s",
        "alt" => "Sendero hacia el Ojo del Diablo en Sonabia",
        "caption" => "Ruta de acceso al Ojo del Diablo",
        "fuente" => "https://sendasdeviaje.com/ruta-ojos-diablo-orinon-sonabia/",
        "fuente_texto" => "sendasdeviaje.com"
    ]
  ],
  "video" => [
      "url" => "https://www.youtube.com/embed/XMnF84XSBHg", // reemplaza con ID real si hay
      "titulo" => "Video del Ojo del Diablo"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "https://www.escapadarural.com/blog/wp-content/uploads/2025/07/AdobeStock_815200096_diablo2-1024x683.webp",
        "alt" => "Acantilados junto al Ojo del Diablo",
        "caption" => "Acantilados y mar Cantábrico",
        "fuente" => "https://www.escapadarural.com/blog/ruta-ojos-del-diablo-cantabria/",
        "fuente_texto" => "escapadarural.com"
    ],
    [
        "src" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTq7NFMM_hFt5JnDgGGhV_5ZwFXSeE3ciZHFcpjAmW31BrwNISLa7Nr2xpv2XqBZvYN7pQ&usqp=CAU",
        "alt" => "Detalle de la formación Ojo del Diablo",
        "caption" => "Curiosa formación rocosa",
        "fuente" => "https://sendasdeviaje.com/ruta-ojos-diablo-orinon-sonabia/",
        "fuente_texto" => "sendasdeviaje.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/puesta-de-sol-ojos-de-diablo.jpg",
        "alt" => "Puesta de sol en Ojo del Diablo",
        "caption" => "Atardecer sobre la costa",
        "fuente" => "https://elgiroscopo.es/ruta-por-cantabria-ii-subida-los-ojos-del-diablo/",
        "fuente_texto" => "elgiroscopo.es"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/mapa-ruta-ojos-del-diablo.jpg",
        "alt" => "Mapa de la Ruta de los Ojos del Diablo",
        "caption" => "Mapa de la Ruta de los Ojos del Diablo",
        "fuente" => "https://elgiroscopo.es/ruta-por-cantabria-ii-subida-los-ojos-del-diablo/",
        "fuente_texto" => "elgiroscopo.es"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información del Ojo del Diablo",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Sonabia - Cantabria"
    ],
    [
      "icono" => "⛰️",
      "titulo" => "Acceso",
      "descripcion" => "Senderos naturales de baja dificultad, ida y vuelta aprox. 3 km"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Entorno",
      "descripcion" => "Acantilados, formaciones rocosas y vistas al Cantábrico"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Formación rocosa Ojo del Diablo, miradores, fauna y flora autóctona"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏞️ Actividades en Ojo del Diablo",
  "items"  => [
    [ "icono" => "🚶‍♂️", "texto" => "Senderismo y rutas circulares" ],
    [ "icono" => "📸", "texto" => "Fotografía de formaciones rocosas y panorámicas del mar" ],
    [ "icono" => "🌅", "texto" => "Disfrutar de amaneceres y atardeceres sobre el Cantábrico" ],
    [ "icono" => "🦅", "texto" => "Observación de aves y flora autóctona" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-ojo-del-diablo",
    "centro" => [43.4500, -3.5230],   // Latitud, Longitud aproximadas de Ojo del Diablo
    "zoom"   => 15,
    "marker" => [
        "coords" => [43.4500, -3.5230],
        "popup"  => "<strong>Ojo del Diablo - Sonabia</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 942 66 00 50",
    "enlace" => "tel:+34942660050" // Oficina de Turismo de Santoña
  ],
  "web"      => [
    "texto" => "www.santona.es",
    "url"   => "https://www.santona.es"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Carlos V.",
        "texto"  => "Un lugar sorprendente con vistas increíbles al Cantábrico."
    ],
    [
        "nombre" => "Elena P.",
        "texto"  => "Sendero fácil y paisaje espectacular, perfecto para un paseo de tarde."
    ],
    [
        "nombre" => "Miguel R.",
        "texto"  => "Ideal para fotografía y disfrutar de la costa cántabra."
    ],
    [
        "nombre" => "Raquel M.",
        "texto"  => "Una formación única y un entorno natural muy bonito."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.4500&lon=-3.5230&zoom=10"; 
?>
