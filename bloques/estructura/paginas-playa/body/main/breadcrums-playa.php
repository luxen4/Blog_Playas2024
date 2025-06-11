<nav aria-label="Breadcrumb">
    <ol itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="/Blog_Playas2024/index.php">
                <span itemprop="name">Inicio</span>
            </a>
            <meta itemprop="position" content="1" />
        </li>

        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="/Blog_Playas2024/index.php#<?= $region; ?>">
                <span itemprop="name"><?= $region; ?></span>
            </a>
            <meta itemprop="position" content="2" />
        </li>

        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="/Blog_Playas2024/localidades/<?= $region_minuscula; ?>/<?= $localidad_minuscula; ?>/index.php">
                <span itemprop="name"><?= $localidad; ?></span>
            </a>
            <meta itemprop="position" content="3" />
        </li>
    </ol>
</nav>

<style>
    .breadcrumb {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        padding: 0;
        font-size: 0.95rem;
    }

    .breadcrumb li+li::before {
        content: "›";
        padding: 0 0.5em;
        color: #aaa;
    }
</style>



<?php
function generarNavSecundaria($items = []) {
    if (empty($items)) return '';

    $html = '<nav class="d-lg-none" aria-label="Navegación secundaria">';
    $html .= '<ul class="pseudo-nav-horizontal">';

    foreach ($items as $item) {
        $slug = $item['slug'] ?? '#';
        $texto = $item['texto'] ?? '';
        $icono = $item['icono'] ?? '';
        $color = $item['color'] ?? '#2980b9';

        $href = PATH_HREF_RAIZ_LOCALIDAD . '/' . ltrim($slug, '/');
        $iconoHTML = $icono ? $icono . ' ' : '';

        $html .= '<li><a href="' . htmlspecialchars($href) . '" style="color:' . htmlspecialchars($color) . ';">' . $iconoHTML . htmlspecialchars($texto) . '</a></li>';
    }

    $html .= '</ul></nav>';
    return $html;
}
?>

<?= generarNavSecundaria([
    ['slug' => 'restaurantes-castro-urdiales.php', 'texto' => 'Restaurantes', 'icono' => '🍽️'],
    ['slug' => 'alojamientos-castro-urdiales.php', 'texto' => 'Alojamientos', 'icono' => '🏨'],
    ['slug' => 'rutas-costeras-castro-urdiales.php', 'texto' => 'Rutas', 'icono' => '🥾'],
    ['slug' => 'eventos-castro-urdiales.php', 'texto' => 'Eventos', 'icono' => '🎉'],
    ['slug' => 'blog-castro-urdiales.php', 'texto' => 'Blog', 'icono' => '📰']
]) ?>



<style>.pseudo-nav-horizontal {
  display: flex;
  flex-wrap: nowrap;
  overflow-x: auto;
  list-style: none;
  padding: 0.5rem 1rem;
  margin: 0;
  background-color: #f8f9fa;
  border-bottom: 1px solid #ddd;
  font-size: 0.95rem;
  gap: 1rem;
  white-space: nowrap;
}

.pseudo-nav-horizontal li {
  flex: 0 0 auto;
}

.pseudo-nav-horizontal a {
  text-decoration: none;
  font-weight: 500;
  padding: 0.25rem 0.5rem;
  display: block;
  border-radius: 4px;
}

.pseudo-nav-horizontal a:hover {
  background-color: #eaf3fb;
}
</style>



