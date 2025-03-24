<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/reunion/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/reunion/update" method="post">
            <div class="form-group">
                <label for="">ID de la Reunión:</label>
                <input type="text" readonly value="<?php echo $reunion->id_reunion ?>" name="txtId" id="txtId" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Fecha:</label>
                <input type="date" value="<?php echo $reunion->fecha ?>" name="txtFecha" id="txtFecha" class="form-control" required>
                
                <label for="">Lugar:</label>
                <input type="text" value="<?php echo $reunion->lugar ?>" name="txtLugar" id="txtLugar" class="form-control">
                
                <label for="">Hora de Inicio:</label>
                <input type="time" value="<?php echo $reunion->hora_inicio ?>" name="txtHoraInicio" id="txtHoraInicio" class="form-control" required>
                
                <label for="">Hora de Fin:</label>
                <input type="time" value="<?php echo $reunion->hora_fin ?>" name="txtHoraFin" id="txtHoraFin" class="form-control" required>
                
                <label for="">Proyecto:</label>
                <select name="fkIdProyecto" id="fkIdProyecto" class="form-control" required>
                    <option value="">Seleccione un Proyecto</option>
                    <?php
                        foreach ($proyectos as $proyecto) {
                            $selected = $reunion->fk_id_proyecto == $proyecto->id_proyecto ? 'selected' : '';
                            echo "<option value='$proyecto->id_proyecto' $selected>$proyecto->nombre</option>";
                        }
                    ?>
                </select>

                <label for="">Tipo de Asesoría:</label>
                <select name="fkIdTipoAsesoria" id="fkIdTipoAsesoria" class="form-control" required>
                    <option value="">Seleccione un Tipo de Asesoría</option>
                    <?php
                        foreach ($tiposAsesoria as $tipoAsesoria) {
                            $selected = $reunion->fk_id_tipo_asesoria == $tipoAsesoria->id_tipo_asesoria ? 'selected' : '';
                            echo "<option value='$tipoAsesoria->id_tipo_asesoria' $selected>$tipoAsesoria->linea_sennova</option>";
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