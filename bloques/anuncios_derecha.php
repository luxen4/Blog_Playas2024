<style>
	.amazon-product {
		border: 1px solid #ddd;
		padding: 10px;
		/*margin: 20px;*/
		max-width: 300px;
		font-family: Arial, sans-serif;
	}

	.amazon-product img {
		width: 100%;
		height: auto;
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

<div class="amazon-product" class="d-block w-100" >
	<a href="<?= $href; ?>" target="_blank">
		<img src="<?= $src; ?>" alt="AAA">
	</a>
	<div class="amazon-product-title">
		<a href="<?= $src; ?>" target="_blank"><?= $nombre_producto; ?></a>
	</div>
	<div class="amazon-product-price"><?= $price; ?></div>
	<div>
		<a href="https://amzn.to/3yWwF3G" target="_blank">
			<button>Comprar ahora en Amazon</button>
		</a>
	</div>
</div>