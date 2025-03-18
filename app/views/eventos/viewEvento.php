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
  <div class="btn-create">
    <a href="new">+</a>
  </div>
  <div class="container">
    <div class="data-container">
      <?php
        if(empty($eventos)){
          echo"<br>No se encontraron eventos en la base de datos";
        }else{
          foreach ($eventos as $key => $value) {
            echo  "<div class='record'>
            <span>ID: $value->id_evento - $value->nombre</span>
            <div class='buttons'>
            <a href='/evento/view/$value->id_evento'>Consultar</a>
            <a href='/evento/edit/$value->id_evento'>Editar</a>
            <a href='/evento/delete/$value->id_evento'>Eliminar</a>
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
