<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Leer CSV y mostrar imágenes</title>
<style>
  #imagePopup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 90vw;
    max-height: 80vh;
    background: white;
    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0,0,0,0.5);
    z-index: 9999;
    padding: 20px;
    overflow-y: auto;
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
  .col {
    float: left;
    width: 33.33%;
    padding: 5px;
  }
  .clearfix::after {
    content: "";
    clear: both;
    display: table;
  }
</style>
</head>
<body>

<h2>Selecciona un archivo CSV con las imágenes</h2>
<input type="file" id="csvFile" accept=".csv" />

<!-- Popup Modal -->
<div id="imagePopup" aria-modal="true" role="dialog">
  <span class="closeBtn" title="Cerrar">&times;</span>
  <div id="popupImagesContainer" class="clearfix"></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/papaparse@5.4.1/papaparse.min.js"></script>
<script>
  const popup = document.getElementById('imagePopup');
  const container = document.getElementById('popupImagesContainer');
  const closeBtn = popup.querySelector('.closeBtn');
  let imageSets = [];
  let currentSet = 0;
  let intervalId;

  document.getElementById('csvFile').addEventListener('change', e => {
    const file = e.target.files[0];
    if (!file) return alert("No seleccionaste ningún archivo");

    Papa.parse(file, {
      header: true,
      skipEmptyLines: true,
      complete: function(results) {
        // Organizar datos en grupos según columna 'group'
        imageSets = [];
        results.data.forEach(({ group, src, link }) => {
          const idx = parseInt(group) - 1;
          if (!imageSets[idx]) imageSets[idx] = [];
          imageSets[idx].push({ src, link });
        });

        currentSet = 0;
        showPopup();
        if(intervalId) clearInterval(intervalId);
        intervalId = setInterval(showPopup, 5000);
      },
      error: function(err) {
        alert("Error al leer CSV: " + err);
      }
    });
  });

  function showPopup() {
    container.innerHTML = '';
    if(!imageSets.length) return;

    imageSets[currentSet].forEach(({ src, link }) => {
      const div = document.createElement('div');
      div.className = 'col';

      const a = document.createElement('a');
      a.href = link;
      a.target = '_blank';

      const img = document.createElement('img');
      img.src = src;
      img.alt = "Publicidad";

      a.appendChild(img);
      div.appendChild(a);
      container.appendChild(div);
    });

    popup.style.display = 'block';
    currentSet = (currentSet + 1) % imageSets.length;
  }

  closeBtn.onclick = () => {
    popup.style.display = 'none';
    if(intervalId) clearInterval(intervalId);
  }
</script>

</body>
</html>