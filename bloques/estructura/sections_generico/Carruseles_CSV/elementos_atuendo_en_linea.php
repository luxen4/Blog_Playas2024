<div class="row box_atuendo">
  <div class="col-12 text-center">
    <div class="atuendo-flex">
      <!-- Primera imagen centrada -->
      <div class="custom-carousel-image-container square-container first-image">
        <a id="image-link_csv_0_<?php echo $nombreAtuendo; ?>"
           href="<?php echo $productos[0]['href']; ?>">
          <img id="image_csv_0_<?php echo $nombreAtuendo; ?>"
               src="<?php echo $productos[0]['src']; ?>"
               class="d-block custom-carousel-image"
               alt="<?php echo $productos[0]['alt']; ?>">
        </a>
      </div>

      <!-- Resto de imágenes -->
      <div class="custom-carousel-image-container square-container other-image">
        <a id="image-link_csv_1_<?php echo $nombreAtuendo; ?>"
           href="<?php echo $productos[1]['href']; ?>">
          <img src="<?php echo $productos[1]['src']; ?>"
               class="d-block custom-carousel-image"
               alt="<?php echo $productos[1]['alt']; ?>">
        </a>
      </div>

      <?php for ($i = 2; $i < 5; $i++): ?>
        <div class="custom-carousel-image-container square-container other-image">
          <a id="image-link_csv_<?php echo $i,'_',$nombreAtuendo; ?>"
             href="<?php echo $productos[$i]['href']; ?>">
            <img src="<?php echo $productos[$i]['src']; ?>"
                 class="d-block custom-carousel-image"
                 alt="<?php echo $productos[$i]['alt']; ?>">
          </a>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</div>
<style>
    .atuendo-flex {
  display: flex;
  flex-wrap: wrap;
  justify-content: center; /* Centra todo el contenido horizontalmente */
  align-items: center;
  gap: 1rem;
}

/* A la primera imagen dale un tamaño mayor si lo deseas */
.first-image {
  flex: 0 0 auto;
  width: 50%;   /* o el porcentaje que prefieras */
  display: flex;
  justify-content: center;
}

/* El resto un tamaño fijo o menor para no empujar la primera */
.other-image {
  flex: 0 0 auto;
  width: 20%;   /* ajusta según cuántas imágenes pequeñas tengas */
  display: flex;
  justify-content: center;
}

/* Ajustes internos de las imágenes */
.custom-carousel-image-container img {
  max-height: 100%;
  max-width: 100%;
  object-fit: contain;
  display: block;
}
</style>