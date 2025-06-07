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
            <a itemprop="item" href="/Blog_Playas2024/localidades/<?= $region; ?>/<?= $localidad_minuscula; ?>/index.php">
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