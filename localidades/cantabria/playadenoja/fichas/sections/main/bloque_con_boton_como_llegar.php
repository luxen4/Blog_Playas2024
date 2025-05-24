<?php
    render_bloque_con_boton(
        "como_llegar",
        "📍",
        "Cómo llegar a la Playa de {$mainEntity_addressLocality}",
        "Consulta rutas, accesos y opciones de transporte para llegar cómodamente a la <strong>Playa de {$mainEntity_addressLocality}</strong> en 
        <a href='https://es.wikipedia.org/wiki/Noja' target='_blank' rel='noopener'>Noja</a>, una de las joyas de la costa cántabra.",
        SECTIONS_PAGINAS_SECUNDARIAS . 'como-llegar-playa-de-noja-cantabria.php',
        "Consultar ruta",
        "fas fa-map-marked-alt"
    );
?>