<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>Cómo llegar a la Playa de Ostende – Castro-Urdiales</title>

  <?php $region_minuscula = 'cantabria'; $carpeta = 'playadeostende'; $tema='como-llegar';?>
  <?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2024/bloques/estructura/variables_comunes/defines.php"; ?>
  <?php require PATH_RAIZ_LOCALIDADES_CARPETA_PAGINAS_SECUNDARIAS. "/head_generico.php";?> 
</head>

<body>

  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA."/header.php"; ?>

  <main id="main-content" role="main" class="py-5">
    <div class="container">
      <section id="como-llegar-ostende" class="container">
        <header class="text-center mb-4">
          <h2 class="text-danger section-header"><i class="fas fa-map-marked-alt"></i> Cómo llegar a la Playa de Ostende</h2>
          <p class="lead">
            Planifica tu ruta hacia una de las playas más accesibles de 
            <a href="/castro-urdiales/" style="color:#2980b9;" title="Visita Castro Urdiales">Castro Urdiales</a>, 
            en pleno litoral cántabro.
          </p>
        </header>

        <div class="info-box">
          <ul class="list-unstyled">
            <li>
              <i class="fas fa-car" style="color:#3498db;"></i>
              <strong>En coche:</strong><br>
              Desde <strong>Santander</strong>, toma la <abbr title="Autovía del Cantábrico">A-67</abbr> (dirección Bilbao) y continúa durante unos 25 minutos. Hay <em>aparcamientos gratuitos y de pago</em> a 5 minutos a pie de la playa.
            </li>
            <li>
              <i class="fas fa-bus" style="color:#e67e22;"></i>
              <strong>En autobús:</strong><br>
              Conexiones regulares con 
              <a href="https://www.bizkaibus.eus/" target="_blank" rel="noopener noreferrer" style="color:#2980b9;" title="Horarios Bizkaibus">Bizkaibus</a> 
              desde Bilbao, Santander y localidades cercanas. La parada <em>“Ostende Playa”</em> se encuentra muy próxima al acceso principal.
            </li>
            <li>
              <i class="fas fa-bicycle" style="color:#2ecc71;"></i>
              <strong>A pie o en bicicleta:</strong><br>
              Disfruta del paseo por los 
              <a href="/ruta-costera-ostende" style="color:#2980b9;" title="Ruta costera">senderos costeros señalizados</a>, 
              ideales para caminar o pedalear desde el centro urbano (20 minutos aprox.).
            </li>
          </ul>
        </div>

        <h5 class="mt-5 mb-3 text-primary"><i class="fas fa-map"></i> Mapa interactivo</h5>
        <div class="map-responsive mb-4">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5831.651444241797!2d-3.8591253222141294!3d43.45938808069519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd493580c7f8b1cf%3A0x4f643bc98d20e61e!2sPlaya%20de%20Ostende!5e0!3m2!1ses!2ses!4v1692110560672!5m2!1ses!2ses"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Ubicación Playa de Ostende">
          </iframe>
        </div>

        <p class="text-center">
          ¿Desde otro punto? Usa 
          <a href="https://www.google.com/maps/dir//Playa+de+Ostende" 
            target="_blank" 
            rel="noopener noreferrer" 
            title="Ruta en Google Maps" 
            style="color:#2980b9;">
            Google Maps
          </a> para trazar tu ruta personalizada.
        </p>
      </section>
    </div>
  </main>


<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA."/footer.php"; ?>
<?php require  PATH_RAIZ. "/anuncios/pop-up-publicitario2.php"; ?>
<?php require  PATH_RAIZ_BLOQUES_ESTRUCTURA . "/js_bootstrap/scripts-bootstrap2.php"; ?>


</body>
</html>

<?php //require PATH_BLOQUES_SECTIONS_CARRUSELES_CSV.'/prueba_atuendo4.php'; ?>
<?php /* Antes del <head> <!-- Adcash (opcional) --><script src="https://static.adcash.com/js/aclib.js" async></script>
  <?php require "./../../../../bloques/estructura/anuncios/js/logica_anuncios_addcash.php"; */?>