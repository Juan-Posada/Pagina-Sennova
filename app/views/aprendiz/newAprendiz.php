<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuevo Aprendiz</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <header>
    <h1>PROYECTO FORMATIVO - SENNOVA</h1>
  </header>
  <div class="container">
    <div class="data-container">
      <form action="/aprendiz/create" method="post">
        <div class="form-group">
          <label for="">Nombre del Aprendiz</label>
          <input type="text" name="txtNombre" id="txtNombre" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Programa</label>
          <input type="text" name="txtPrograma" id="txtPrograma" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit">Guardar</button>
        </div>
      </form>
    </div>
  </div>
  <footer>
    <p>Desarrollo ADSO 2873711</p>
  </footer>
</body>
</html>
