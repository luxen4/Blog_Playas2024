<?php
// Leer CSV y agrupar cada 3 imágenes para alternar en popup
$filename = PATH_RAIZ. './anuncios/amazon_botas_hombre_images.csv'; 
$filename = PATH_RAIZ. './anuncios/amazon_chaquetas_hombre_images.csv';
$filename = PATH_RAIZ. './anuncios/amazon_jeans_man_images.csv';
$filename = PATH_RAIZ. './anuncios/amazon_shorts_hombre_images.csv';


// Definir array con rutas de archivos CSV
$csv_files = [
    /*PATH_RAIZ . '/anuncios/amazon_botas_hombre_images.csv',
    PATH_RAIZ . '/anuncios/amazon_chaquetas_hombre_images.csv',
    PATH_RAIZ . '/anuncios/amazon_dress_woman_images.csv',
    PATH_RAIZ . '/anuncios/amazon_jeans_man_images.csv',
    PATH_RAIZ . '/anuncios/amazon_shorts_images.csv',
    PATH_RAIZ . '/anuncios/amazon_sneakers_images.csv',
    PATH_RAIZ . '/anuncios/amazon_sports_shirts_images.csv',
    PATH_RAIZ . '/anuncios/amazon_vaqueros_hombre_images.csv',*/
    PATH_RAIZ . '/anuncios/amazon_camisas_hawaianas_man_images.csv',
];

// Seleccionar uno al azar
$filename = $csv_files[array_rand($csv_files)];


$allImages = [];

if (($handle = fopen($filename, "r")) !== FALSE) {
    $header = fgetcsv($handle);
    while (($data = fgetcsv($handle)) !== FALSE) {
        $row = array_combine($header, $data);
        $allImages[] = [
            'src' => $row['src'],
            'link' => $row['href'],
            'alt' => $row['alt'] ?? 'Publicidad',
        ];
    }
    fclose($handle);
}

// Agrupar imágenes de 3 en 3
$imageSets = array_chunk($allImages, 4);
?>









<?php /*
// Rutas CSV
$csv_files = [
    PATH_RAIZ . '/anuncios/amazon_botas_hombre_images.csv',
    PATH_RAIZ . '/anuncios/amazon_chaquetas_hombre_images.csv',
    PATH_RAIZ . '/anuncios/amazon_dress_woman_images.csv',
    PATH_RAIZ . '/anuncios/amazon_jeans_man_images.csv',
    PATH_RAIZ . '/anuncios/amazon_shorts_images.csv',
    PATH_RAIZ . '/anuncios/amazon_sneakers_images.csv',
    PATH_RAIZ . '/anuncios/amazon_sports_shirts_images.csv',
    PATH_RAIZ . '/anuncios/amazon_vaqueros_hombre_images.csv'
];

$allImages = [];

// Leer todos los CSVs
foreach ($csv_files as $filename) {
    if (($handle = fopen($filename, "r")) !== FALSE) {
        $header = fgetcsv($handle);
        while (($data = fgetcsv($handle)) !== FALSE) {
            $row = array_combine($header, $data);
            $allImages[] = [
                'src' => $row['src'],
                'link' => $row['href'],
                'alt' => $row['alt'] ?? 'Publicidad',
            ];
        }
        fclose($handle);
    }
}

// Mezclar todas las imágenes
shuffle($allImages);

// Agrupar de 4 en 4 (o cambia a 3 si prefieres)
$imageSets = array_chunk($allImages, 4); */
?>






















<style>
#imagePopup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 45vw; /* Escritorio por defecto */
    max-height: 80vh;
    background: white;
    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
    z-index: 9999;
    padding: 20px;
    overflow-y: auto;
}

/* Clase activa que muestra el popup con efecto fade */

/* Tablets (pantallas medianas) */
@media (max-width: 1024px) {
    #imagePopup {
        width: 70vw;
    }
}

/* Móviles (pantallas pequeñas) */
@media (max-width: 768px) {
    #imagePopup {
        width: 90vw;
        padding: 15px;
    }
}

        #imagePopup img {
            width: 100%;
            height: auto;
            border-radius: 6px;
        }

        #imagePopup .closeBtn {
            position: absolute;
            top: 10px;
            right: 14px;
            font-size: 28px;
            cursor: pointer;
            color: #333;
            font-weight: bold;
            user-select: none;
        }
        .col-md-4 {
            width: 30%;
            display: inline-block;
            vertical-align: top;
            margin-right: 3.3%;
        }
        .col-md-4:last-child {
            margin-right: 0;
        }
        .mb-3 {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>

    <!-- Popup Modal -->
    <div id="imagePopup" aria-modal="true" role="dialog">
        <span class="closeBtn" title="Cerrar">&times;</span>
        <div class="container">
            <div class="row" id="popupImagesContainer"></div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const imageSets = <?php echo json_encode($imageSets); ?>;

        let currentSet = 0;
        const popup = document.getElementById('imagePopup');
        const closeBtn = popup.querySelector('.closeBtn');
        const container = document.getElementById('popupImagesContainer');

        function showPopup() {
            container.innerHTML = '';

            imageSets[currentSet].forEach(({ src, link, alt }) => {
                const col = document.createElement('div');
                col.className = 'col-md-3 mb-3';

                const anchor = document.createElement('a');
                anchor.href = link;
                anchor.target = '_blank';

                const img = document.createElement('img');
                img.src = src;
                img.alt = alt || 'Publicidad';

                anchor.appendChild(img);
                col.appendChild(anchor);
                container.appendChild(col);
            });

            popup.style.display = 'block';
            currentSet = (currentSet + 1) % imageSets.length;
        }

        closeBtn.onclick = () => {
            popup.style.display = 'none';
        };

        showPopup();
        setInterval(showPopup, 5000);
    });
    </script>