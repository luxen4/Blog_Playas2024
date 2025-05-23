<?php
/**
 * Renderiza un bloque con ícono, título, texto y botón.
 *
 * @param string $id            ID del bloque y del anchor
 * @param string $icono         Emoji o ícono decorativo
 * @param string $titulo        Título principal del bloque
 * @param string $descripcion   Texto principal del párrafo (puede contener HTML)
 * @param string $url           Enlace del botón
 * @param string $texto_boton   Texto visible del botón
 * @param string $icono_boton   Clases de ícono FontAwesome (opcional)
 */
function render_bloque_con_boton($id, $icono, $titulo, $descripcion, $url, $texto_boton, $icono_boton = 'fas fa-arrow-right') {
    echo <<<HTML
    <section id="{$id}" class="mt-5">
        <header class="mb-3">
            <h2 class="text-primary">{$icono} {$titulo}</h2>
        </header>
        <p>
            {$descripcion}
            <a href="{$url}" class="btn btn-sm btn-outline-primary ms-2" target="_blank" rel="noopener">
                <i class="{$icono_boton} me-1"></i> {$texto_boton}
            </a>
        </p>
    </section>
    HTML;
}
?>