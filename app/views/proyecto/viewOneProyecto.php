<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyecto</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <header>
    <h1>PROYECTO FORMATIVO - SENNOVA</h1>
  </header>
  <div class="container">
    <div class="data-container">
      <?php
        if($proyecto && is_object($proyecto)){
          echo "<div class='record'>
                  <span>ID: $proyecto->id_proyecto - </span>
                  <span>Nombre: $proyecto->nombre - </span>
                  <span>Descripción: $proyecto->descripcion</span>
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
