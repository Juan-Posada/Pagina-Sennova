<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/aprendices/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/aprendices/create" method="post">
            <div class="form-group">
                <label for="">Nombre:</label>
                <input type="text" name="txtNombre" id="txtNombre" class="form-control" required>
                
                <label for="">Email:</label>
                <input type="email" name="txtEmail" id="txtEmail" class="form-control" required>
                
                <label for="">Apellidos:</label>
                <input type="text" name="txtApellidos" id="txtApellidos" class="form-control" required>
                
                <label for="">Teléfono:</label>
                <input type="text" name="txtTelefono" id="txtTelefono" class="form-control">
                
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