<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/eventos/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/eventos/update" method="post">
            <div class="form-group">
                <label for="">ID del Evento:</label>
                <input type="text" readonly value="<?php echo $evento->id_servicio ?>" name="txtId" id="txtId" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Nombre del Evento:</label>
                <input type="text" value="<?php echo $evento->nombre ?>" name="txtNombre" id="txtNombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Descripción del Evento:</label>
                <input type="text" value="<?php echo $evento->descripcion ?>" name="txtDescripcion" id="txtDescripcion" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Fecha del Evento:</label>
                <input type="datetime-local" value="<?php echo date('Y-m-d\TH:i', strtotime($evento->fecha_evento)) ?>" name="txtFechaEvento" id="txtFechaEvento" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Proyecto:</label>
                <select name="fkIdProyecto" id="fkIdProyecto" class="form-control" required>
                    <option value="">Seleccione un Proyecto</option>
                    <?php
                        // Aquí se debe cargar la lista de proyectos desde la base de datos
                        foreach ($proyectos as $proyecto) {
                            $selected = $evento->fk_id_proyecto == $proyecto->id_proyecto ? 'selected' : '';
                            echo "<option value='$proyecto->id_proyecto' $selected>$proyecto->nombre</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Editar</button>
            </div>
        </form>
    </div>
</div>