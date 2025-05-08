<section id="caracteristicas">
<h5 class="section-header"><i class="fas fa-calendar-alt" style="color: #e67e22;"></i>🎉 Eventos y Festividades Playa de <?= $localidad; ?> en <?= $region; ?> </h5>
<?php 
    if (isset($caja_eventosYfestividades)) {
        echo ($caja_eventosYfestividades);
    }  
?>
</section>