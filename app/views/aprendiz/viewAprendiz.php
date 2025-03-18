<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aprendices</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <header>
    <h1>PROYECTO FORMATIVO - SENNOVA</h1>
  </header>
  <div class="btn-create">
    <a href="new">+</a>
  </div>
  <div class="container">
    <div class="data-container">
      <?php
        if(empty($aprendices)){
          echo "<br>No se encontraron aprendices en la base de datos";
        }else{
          foreach ($aprendices as $key => $value) {
            echo "<div class='record'>
                    <span>ID: $value->id_aprendiz - $value->nombre</span>
                    <div class='buttons'>
                      <a href='/aprendiz/view/$value->id_aprendiz'>Consultar</a>
                      <a href='/aprendiz/edit/$value->id_aprendiz'>Editar</a>
                      <a href='/aprendiz/delete/$value->id_aprendiz'>Eliminar</a>
                    </div>
                  </div>";
          }
        }
      ?>
    </div>
  </div>
  <footer>
    <p>Desarrollo ADSO 2873711</p>
  </footer>
</body>
</html>
