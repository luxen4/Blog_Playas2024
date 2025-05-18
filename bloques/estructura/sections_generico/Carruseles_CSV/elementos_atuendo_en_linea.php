<div style="margin: 1em;" class="row box_atuendo">
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
  justify-content: center;
  align-items: center;
  gap: 1rem;
}

.custom-carousel-image-container {
  display: flex;
  justify-content: center;
  align-items: center;
}

/* Por defecto: escritorio */
.first-image {
  width: 18%;
}
.other-image {
  width: 12%;
}

.custom-carousel-image-container img {
  max-height: 100%;
  max-width: 100%;
  object-fit: contain;
  display: block;
  border-radius: 0.5rem;
}

/* Tablet */
@media (max-width: 992px) {
  .first-image {
    width: 30%;
  }
  .other-image {
    width: 20%;
  }
}

/* Móvil grande */
@media (max-width: 768px) {
  .first-image,
  .other-image {
    width: 40%;
  }
}

/* Móvil pequeño */
@media (max-width: 480px) {
  .first-image,
  .other-image {
    width: 25%;
  }

  .atuendo-flex {
    gap: 0.5rem;
  }
}
</style>