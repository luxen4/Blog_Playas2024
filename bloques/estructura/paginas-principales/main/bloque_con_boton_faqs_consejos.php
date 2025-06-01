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