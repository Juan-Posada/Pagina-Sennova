<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eventos</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <header>
    <h1>PROYECTO FORMATIVO - SENNOVA</h1>
  </header>
  <div class="container">
    <div class="data-container">
      <?php
       if($evento && is_object($evento)){
            echo "<div class='record'>
              <span>ID: $evento->id_evento - </span>
              <span>Nombre: $evento->nombre - </span>
              <span>Descripción: $evento->descripcion - </span>
              <span>Fecha: $evento->fecha_evento - </span>
              <span>ID Proyecto: $evento->fk_id_proyecto</span>
              </div>";
        }
      ?>
    </div>
  </div>
  <footer>
    <p>Desarrollo ADSO 2873711</p>
  </footer>
</body>
</html>
