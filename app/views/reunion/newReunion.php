<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/reunion/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/reunion/create" method="post">
            <div class="form-group">
                <label for="">Fecha:</label>
                <input type="date" name="txtFecha" id="txtFecha" class="form-control" required>
                
                <label for="">Lugar:</label>
                <input type="text" name="txtLugar" id="txtLugar" class="form-control">
                
                <label for="">Hora de Inicio:</label>
                <input type="time" name="txtHoraInicio" id="txtHoraInicio" class="form-control" required>
                
                <label for="">Hora de Fin:</label>
                <input type="time" name="txtHoraFin" id="txtHoraFin" class="form-control" required>
                
                <label for="">Proyecto:</label>
                <select name="fkIdProyecto" id="fkIdProyecto" class="form-control" required>
                    <option value="">Seleccione un Proyecto</option>
                    <?php
                        foreach ($proyectos as $proyecto) {
                            echo "<option value='$proyecto->id_proyecto'>$proyecto->nombre</option>";
                        }
                    ?>
                </select>

                <label for="">Tipo de Asesoría:</label>
                <select name="fkIdTipoAsesoria" id="fkIdTipoAsesoria" class="form-control" required>
                    <option value="">Seleccione un Tipo de Asesoría</option>
                    <?php
                        foreach ($tiposAsesoria as $tipoAsesoria) {
                            echo "<option value='$tipoAsesoria->id_tipo_asesoria'>$tipoAsesoria->linea_sennova</option>";
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