<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/aprendices/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/aprendices/update" method="post">
            <div class="form-group">
                <label for="">ID del Aprendiz:</label>
                <input type="text" readonly value="<?php echo $aprendiz->id_aprendices ?>" name="txtId" id="txtId" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Nombre:</label>
                <input type="text" value="<?php echo $aprendiz->nombre ?>" name="txtNombre" id="txtNombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Email:</label>
                <input type="email" value="<?php echo $aprendiz->email ?>" name="txtEmail" id="txtEmail" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Apellidos:</label>
                <input type="text" value="<?php echo $aprendiz->apellidos ?>" name="txtApellidos" id="txtApellidos" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Teléfono:</label>
                <input type="text" value="<?php echo $aprendiz->telefono ?>" name="txtTelefono" id="txtTelefono" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Proyecto:</label>
                <select name="fkIdProyecto" id="fkIdProyecto" class="form-control" required>
                    <option value="">Seleccione un Proyecto</option>
                    <?php
                        foreach ($proyectos as $proyecto) {
                            $selected = $aprendiz->fk_id_proyecto == $proyecto->id_proyecto ? 'selected' : '';
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