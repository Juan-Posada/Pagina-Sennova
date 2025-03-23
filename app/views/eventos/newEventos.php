<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/eventos/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/eventos/create" method="post">
            <div class="form-group">
                <label for="">Nombre del Evento:</label>
                <input type="text" name="txtNombre" id="txtNombre" class="form-control" required>
                
                <label for="">Descripción del Evento:</label>
                <input type="text" name="txtDescripcion" id="txtDescripcion" class="form-control" required>
                
                <label for="">Fecha del Evento:</label>
                <input type="datetime-local" name="txtFechaEvento" id="txtFechaEvento" class="form-control" required>
                
                <label for="">Proyecto:</label>
                <select name="fkIdProyecto" id="fkIdProyecto" class="form-control" required>
                    <option value="">Seleccione un Proyecto</option>
                    <?php
                        foreach ($proyectos as $proyecto) {
                            echo "<option value='$proyecto->id_proyecto'>$proyecto->nombre</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>