<?php 
    render_bloque_con_boton(
    "actividades",
    "🏄‍♂️",
    "Actividades Recomendadas en la Playa de {$mainEntity_addressLocality}",
    "Explora las <strong>mejores actividades turísticas y deportivas</strong> que ofrece la Playa de {$nombre_playa} en 
    <a href='https://es.wikipedia.org/wiki/{$localidad}' target='_blank' rel='noopener'>{$localidad}, {$region}</a>, ideal para los amantes del turismo activo y la naturaleza costera.",
    SECTIONS_PAGINAS_SECUNDARIAS. "/actividades-recomendadas/index.php",
    "Ver actividades",
    "fas fa-map-marked-alt"
    );
?>


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


<?php
    render_bloque_con_boton(
    "eventos_festividades",
    "🎉",
    "Eventos y Festividades en la Playa de {$mainEntity_addressLocality}",
    "Vive las <strong>tradiciones y celebraciones locales</strong> más emblemáticas: hogueras de San Juan, procesiones marineras, mercados de verano y competiciones deportivas frente al mar Cantábrico.",
    SECTIONS_PAGINAS_SECUNDARIAS. "/eventos-festividades/index.php",
    "Consultar eventos",
    "fas fa-map-marked-alt"
);?>


<?php
    render_bloque_con_boton(
    "faqs_consejos",
    "❓",
    "¿Tienes más dudas sobre la Playa de {$mainEntity_addressLocality}?",
    "Resolvemos las <strong>preguntas más frecuentes</strong> sobre accesos, servicios, normativas y recomendaciones para que disfrutes al máximo tu visita a 
    <a href='https://es.wikipedia.org/wiki/{$localidad}' title='Más sobre {$localidad}'>{$localidad}</a>.",
    SECTIONS_PAGINAS_SECUNDARIAS. "/faqs-consejos/index.php",
    "Consultar FAQs",
    "fas fa-question-circle"
);?>


<?php  
    render_bloque_con_boton(
    "servicios",
    "🛟",
    "Servicios en la Playa de {$mainEntity_addressLocality}",
    "Descubre todos los <strong>servicios disponibles</strong> para tu comodidad: duchas, alquiler de equipamiento, restaurantes, aparcamiento y más.
    ¡Todo lo que necesitas para un día perfecto junto al mar!",
    SECTIONS_PAGINAS_SECUNDARIAS. "/servicios/index.php",
    "Consultar servicios",
    "fas fa-map-marked-alt"
); ?>