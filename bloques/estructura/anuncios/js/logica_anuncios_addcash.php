
<?php

function getAdcashLibTag()
  {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://adbpage.com/adblock?v=3');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $content = curl_exec($ch);
    curl_close($ch);
    return $content;
  }

  echo getAdcashLibTag();
  ?>

  <script type="text/javascript">
    aclib.runAutoTag({
        zoneId: 'f7d43jg7bo',
    });

    //alert("Anuncio de Adcash cargado correctamente.");
  </script>
  

