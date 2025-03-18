<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aprendiz</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <header>
    <h1>PROYECTO FORMATIVO - SENNOVA</h1>
  </header>
  <div class="container">
    <div class="data-container">
      <?php
        if($aprendiz && is_object($aprendiz)){
          echo "<div class='record'>
                  <span>ID: $aprendiz->id_aprendiz - </span>
                  <span>Nombre: $aprendiz->nombre - </span>
                  <span>Programa: $aprendiz->programa</span>
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
