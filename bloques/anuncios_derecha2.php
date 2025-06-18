
<?php
// Vamos a alternar entre 3 camisas Hawaianas diferentes //
$alt_general = 'Imagen de una Camisa Hawaiana';
$images_zapatillas = [
    [
        "href" => "https://www.amazon.es/COOFANDY-Camisas-Informal-Botones-01-Azul/dp/B09MQ11X6F?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=2IVZC6Y904QIN&dib=eyJ2IjoiMSJ9.gk5iCYRfIUH0UVPetJGl2iV0eZBrX6EellrsML7XhX6WWvBVZemVvoEwA4Kl2I46cRe8cA67P9jNDT9aKZEfPioqrHqJ38LSzP4gqa87X6YJ16EGu5LsJIdF83Mmosj9YlIH3ynzv3acwIalvr5a-EBCAtfOowZNvzzDXp5VoIkDWhCSzR7HbULU2NpxbaNNsThd5PfBeovqSnp-1zN07DEe1szxulOHPm2oTQjVYm-Lvz7da2dUkmZYO1S2_wWEsYBoxkYnLeaIWN9y__uI-BhDgZ7ySN_VGAmiJkU8N9A.vDQchxWio3IHOKCbvOV5S-WOQpRWvVbecOscbctUzhg&dib_tag=se&keywords=camisas+para+vestir+playa+de+hombre&qid=1720715131&sprefix=camisas+para+vestir+playa+de+hombre%2Caps%2C111&sr=8-11&linkCode=ll1&tag=adrian8204-21&linkId=a0e0bf3b67b618d90e9bec7b78cefbcd&language=es_ES&ref_=as_li_ss_tl",
        "src" => "https://m.media-amazon.com/images/I/71nq02NKgvL._AC_SX569_.jpg",
        "alt" => $alt_general
    ],
    [
        "href" => "https://www.amazon.es/Danfiki-Camisa-Hawaiana-Hombre-Camisas/dp/B0D2CRFF56?pd_rd_w=JZlHL&content-id=amzn1.sym.7d8190a3-4976-4a6e-a163-4b93400f9ccc&pf_rd_p=7d8190a3-4976-4a6e-a163-4b93400f9ccc&pf_rd_r=17G9YKYE4RAXTBFTP007&pd_rd_wg=N56jB&pd_rd_r=7ae21743-6f66-4b26-8abc-2e0620e47ee1&pd_rd_i=B0CYGWV89T&psc=1&linkCode=ll1&tag=adrian8204-21&linkId=24c293096014b6ef54123a447cb7ee8a&language=es_ES&ref_=as_li_ss_tl",
        "src" => "https://m.media-amazon.com/images/I/81g7POIIdAL._AC_SX569_.jpg",
        "alt" => $alt_general
    ],
    [
        "href" => "https://www.amazon.es/APTRO-Camisa-Hawaiana-Hombre-Informal/dp/B09ZPC773S?pd_rd_w=k1yGw&content-id=amzn1.sym.7d8190a3-4976-4a6e-a163-4b93400f9ccc&pf_rd_p=7d8190a3-4976-4a6e-a163-4b93400f9ccc&pf_rd_r=C8G0H6YX9JR9NZAHTZZE&pd_rd_wg=qOW3x&pd_rd_r=7e19b2d4-ec81-47ff-97cf-c74f9ee50267&pd_rd_i=B0CYDH9Z54&psc=1&linkCode=ll1&tag=adrian8204-21&linkId=f724c8b9eae7dbed0ab1bca5468de518&language=es_ES&ref_=as_li_ss_tl",
        "src" => "https://m.media-amazon.com/images/I/810bWrGwYAL._AC_SY741_.jpg",
        "alt" => $alt_general
    ],

    [
        "href" => "https://www.amazon.es/Danfiki-Camisa-Hawaiana-Hombre-Camisas/dp/B0D2CWH8C2?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=1BJDM69TI67HB&dib=eyJ2IjoiMSJ9.g7Fo-DN7PeTgn0CpFJkDZHlEk8QxldBUOeaqjid44Er_UXbQ6bHvD9gHoN3Z4LkDoeDueF4itboCOPmKw3JzOXNxgJMb_HB_k67nnJxk9pR5QS-caD2u-oqwhtbLIy4w4d50A0lKPRoitXUupYk5QiOx9NSZztSuN9g8EyYxJ1S9qwVCHs1Wxy7RccyuxulLONMtE4SZJxgPjEgj1o6ME8m0JzinG_Bah8ILwpzM68V2Yuxka8XtIvpSYTAXZyZy5FZhJePrNRobMDTrNfT6NLFzOeDAhwUv773VvCFJZT8.OAp2NWwAtYxdzeuLg8cu2t2FhZGrr61SMrhkfqa7hvs&dib_tag=se&keywords=camisas%2Bhawaianas&qid=1718143466&s=apparel&sprefix=camisas%2Bhawayanas%2Cfashion-mens%2C138&sr=1-5&th=1&psc=1&linkCode=ll1&tag=adrian8204-21&linkId=ed11af21f7e6761c6df289d3b9afe311&language=es_ES&ref_=as_li_ss_tl",
        "src" => "https://m.media-amazon.com/images/I/81vifK5caHL._AC_SX679_.jpg",
        "alt" => $alt_general
    ]
]; ?>


<style>
	.amazon-product {
		/*border: 1px solid #ddd;*/
		/*padding: 10px;*/
		/*margin-top: 20px;*/
		max-width: 300px;
		font-family: Arial, sans-serif;
	}
	
	.amazon-product img {
  width: 100%;
  height: 470px; /* altura fija para todas las imágenes */
  object-fit: cover; /* mantiene proporciones recortando si es necesario */
  display: block;
}



	.amazon-product-title {
		font-size: 16px;
		margin: 10px 0;
	}

	.amazon-product-price {
		font-size: 18px;
		color: #B12704;
		margin: 10px 0;
	}

	.amazon-product button {
		background-color: #FF9900;
		color: white;
		padding: 10px;
		border: none;
		cursor: pointer;
		text-align: center;
		display: block;
		width: 100%;
	}

	.amazon-product button:hover {
		background-color: #E68900;
	}


</style>
<?php


// Producto 1
$href = "https://www.amazon.es/Irevial-Cuadros-Franela-Boyfriend-Bolsillo/dp/B09QKHXFX7?tag=adrian8204-21";
$src = "https://m.media-amazon.com/images/I/71GrO7q8jhL._AC_SX569_.jpg";
$alt = "Camisa cuadros mujer";
$nombre = "Irevial Camisa Manga Larga Mujer Oficina Elegante";
$price = "29.99€";
$buy_link = "https://amzn.to/3yWwF3G";

// Producto 2
$src2 = "https://m.media-amazon.com/images/I/71UYnXrB2XL._AC_SX569_.jpg";


$productos = [
    [
        'href' => $href,
        'src' => $src,
        'alt' => $alt,
        'nombre' => $nombre,
        'price' => $price,
        'buy_link' => $buy_link
    ],
    [
        'href' => $href,
        'src' => $src2,
        'alt' => $alt,
        'nombre' => $nombre,
        'price' => $price,
        'buy_link' => $buy_link
    ],
];


?>
<div id="amazon-carousel" style="max-width: 300px; margin: auto;">
    <?php foreach ($productos as $index => $prod): ?>
    <div class="amazon-product" style="display: <?= $index === 0 ? 'block' : 'none' ?>;">
        <a href="<?= $prod['href'] ?>" target="_blank">
            <img src="<?= $prod['src'] ?>" alt="<?= htmlspecialchars($prod['alt']) ?>">
        </a>
        <div class="amazon-product-title">
            <a href="<?= $prod['href'] ?>" target="_blank"><?= htmlspecialchars($prod['nombre']) ?></a>
        </div>
        <div class="amazon-product-price">
            <?= htmlspecialchars($prod['price']) ?>
        </div>
        <div>
            <a href="<?= $prod['buy_link'] ?>" target="_blank">
                <button style="background-color: #FF9900; color: white; padding: 10px; border: none; cursor: pointer; width: 100%; transition: background-color 0.3s ease;"
                    onmouseover="this.style.backgroundColor='#E68900'" 
                    onmouseout="this.style.backgroundColor='#FF9900'">
                    Comprar ahora en Amazon
                </button>
            </a>
        </div>
    </div>
    <?php endforeach; ?>
</div>


<script>
    const productosDivs = document.querySelectorAll('#amazon-carousel .amazon-product');
    let currentIndex = 0;

    setInterval(() => {
        // Ocultar el producto actual
        productosDivs[currentIndex].style.display = 'none';
        // Siguiente índice (circular)
        currentIndex = (currentIndex + 1) % productosDivs.length;
        // Mostrar siguiente producto
        productosDivs[currentIndex].style.display = 'block';
    }, 3000); // Cambia cada 3 segundos
</script>



