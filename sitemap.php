<?php
header("Content-Type: application/xml; charset=UTF-8");
$baseUrl = "http://playas2024.kesug.com/Blog_Playas2025/";
$fechaHoy = date("Y-m-d");
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <url>
        <loc><?= $baseUrl ?>playa-de-ostende-castro-urdiales-cantabria</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc><?= $baseUrl ?>actividades-playa-de-ostende-castro-urdiales-cantabria</loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    
    <url>
    <loc><?= $baseUrl ?>como-llegar-playa-de-ostende-castro-urdiales-cantabria</loc>
    <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>


    <url>
    <loc><?= $baseUrl ?>servicios-playa-de-ostende-castro-urdiales-cantabria</loc>
    <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
    <loc><?= $baseUrl ?>eventos-festividades-playa-de-ostende-castro-urdiales-cantabria</loc>
    <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
    <loc><?= $baseUrl ?>preguntas-frecuentes-playa-de-ostende-castro-urdiales-cantabria</loc>
    <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <!-- Barra de navegación -->
    <url>
    <loc><?= $baseUrl ?>restaurantes-castro-urdiales</loc>
    <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
    <loc><?= $baseUrl ?>alojamientos-castro-urdiales</loc>
    <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
    <loc><?= $baseUrl ?>rutas-costeras-castro-urdiales</loc>
    <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
    <loc><?= $baseUrl ?>eventos-castro-urdiales</loc>
    <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
    <loc><?= $baseUrl ?>blog-castro-urdiales</loc>
    <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

</urlset>

<?php /*

    <url>
        <loc>http://playas2024.kesug.com/Blog_Playas2025/playa-de-somo-loredo-somo-cantabria</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>








    <url>
        <loc>http://playas2024.kesug.com/Blog_Playas2025/playa-de-noja-cantabria</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>




    <url>
        <loc>http://playas2024.kesug.com/Blog_Playas2025/actividades-playa-de-noja-cantabria</loc>
        <lastmod>2025-05-16</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>





    <url>
        <loc>http://playas2024.kesug.com/Blog_Playas2025/playa-de-berria-cantabria</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>http://playas2024.kesug.com/Blog_Playas2025/playa-de-sardinero-santander</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>http://playas2024.kesug.com/Blog_Playas2025/playa-de-laredo-cantabria</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>http://playas2024.kesug.com/Blog_Playas2025/playa-de-isla-cantabria</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>http://playas2024.kesug.com/Blog_Playas2025/playa-de-suances-cantabria</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>
    <!-- Cantabria -->





    <!-- Vizcaya -->
    <url>
        <loc>http://playas2024.kesug.com/Blog_Playas2025/playa-de-gorliz-vizcaya</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>http://playas2024.kesug.com/Blog_Playas2025/playa-de-getxo-vizcaya</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>http://playas2024.kesug.com/Blog_Playas2025/playa-de-vizcaya</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>http://playas2024.kesug.com/Blog_Playas2025/playa-de-bakio-vizcaya</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>http://playas2024.kesug.com/Blog_Playas2025/playa-de-lekeitio-vizcaya</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>http://playas2024.kesug.com/Blog_Playas2025/playa-de-sopelana-vizcaya</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>http://playas2024.kesug.com/Blog_Playas2025/playa-de-muskiz-vizcaya</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>http://playas2024.kesug.com/Blog_Playas2025/playa-de-plentzia-vizcaya</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>



    <!-- Guipuzkoa -->

    <url>
        <loc>http://playas2024.kesug.com/Blog_Playas2025/playa-de-fuenterrabia-gipuzkoa</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>http://playas2024.kesug.com/Blog_Playas2025/playa-de-zumaia-gipuzkoa</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>http://playas2024.kesug.com/Blog_Playas2025/playa-de-getaria-gipuzkoa</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url> 

    <url>
        <loc>http://playas2024.kesug.com/Blog_Playas2025/playa-de-deba-gipuzkoa</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>  

    <url>
        <loc>http://playas2024.kesug.com/Blog_Playas2025/playa-de-orio-gipuzkoa</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>   

    <url>
        <loc>http://playas2024.kesug.com/Blog_Playas2025/playa-de-zarautz-gipuzkoa</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>


    <!-- Francia -->

    <url>
        <loc>http://playas2024.kesug.com/Blog_Playas2025/playa-de-bayona-francia</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>http://playas2024.kesug.com/Blog_Playas2025/playa-de-hendaya-francia</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>http://playas2024.kesug.com/Blog_Playas2025/playa-de-saint-jean-de-luz-francia</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>http://playas2024.kesug.com/Blog_Playas2025/playa-de-biarritz-francia</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>












    <url>
        <loc>http://playas2024.kesug.com/localidades/playadedeba/fichas/playa-de-deba.php</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>



    <url>
        <loc>http://playas2024.kesug.com/localidades/playadesopelana/fichas/playa-de-sopelana.php</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>



    <url>
        <loc>http://playas2024.kesug.com/localidades/playadeberria/fichas/playa-de-berria.php</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>http://playas2024.kesug.com/localidades/castrourdiales/fichas/ficha_castrourdiales.php</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>



    
    <url>
        <loc>http://playas2024.kesug.com/localidades/castrourdiales/galeria.php</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    
    <url>
        <loc>http://playas2024.kesug.com/localidades/castrourdiales/eventos.php</loc>
        <lastmod>2025-05-15</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.7</priority>
    </url>
    
    <!-- Agrega más URLs aquí -->
*/?>



















