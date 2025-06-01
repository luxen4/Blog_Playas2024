<?php
    render_bloque_con_boton(
    "actividades",
    "🏄‍♂️",
    "Actividades Recomendadas en la Playa de {$mainEntity_addressLocality}",
    "Explora las <strong>mejores actividades turísticas y deportivas</strong> que ofrece la Playa de {$nombre_playa} en 
    <a href='https://es.wikipedia.org/wiki/{$localidad}' target='_blank' rel='noopener'>{$localidad}, {$region}</a>, ideal para los amantes del turismo activo y la naturaleza costera.",
    SECTIONS_PAGINAS_SECUNDARIAS. "actividades-{$rutas}.php",
    "Ver actividades",
    "fas fa-map-marked-alt"
    );
?>