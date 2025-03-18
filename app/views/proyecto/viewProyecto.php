<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyectos</title>
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
        if(empty($proyectos)){
          echo "<br>No se encontraron proyectos en la base de datos";
        }else{
          foreach ($proyectos as $key => $value) {
            echo "<div class='record'>
                    <span>ID: $value->id_proyecto - $value->nombre</span>
                    <div class='buttons'>
                      <a href='/proyecto/view/$value->id_proyecto'>Consultar</a>
                      <a href='/proyecto/edit/$value->id_proyecto'>Editar</a>
                      <a href='/proyecto/delete/$value->id_proyecto'>Eliminar</a>
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
