<?php
    render_bloque_con_boton(
    "como_llegar",
    "📍",
    "Cómo llegar a la Playa de {$mainEntity_addressLocality}",
    "Consulta rutas, accesos y opciones de transporte para llegar cómodamente a la <strong>Playa de {$mainEntity_addressLocality}</strong> en 
    <a href='https://es.wikipedia.org/wiki/{$localidad}' target='_blank' rel='noopener'>{$localidad}, {$region}</a>, una de las joyas de la costa cántabra.",
    SECTIONS_PAGINAS_SECUNDARIAS. "/como-llegar/index.php",
    "Consultar ruta",
    "fas fa-map-marked-alt"
);?>