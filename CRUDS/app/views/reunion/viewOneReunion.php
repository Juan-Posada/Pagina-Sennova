<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/reunion/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
    <?php
        if($reunion && is_object($reunion)){
            echo "
                <div class='record-one'>
                    <span>ID: $reunion->id_reunion</span>
                    <span>Fecha: $reunion->fecha</span>
                    <span>Lugar: $reunion->lugar</span>
                    <span>Hora de Inicio: $reunion->hora_inicio</span>
                    <span>Hora de Fin: $reunion->hora_fin</span>
                    <span>Proyecto: $reunion->fk_id_proyecto</span>
                    <span>Tipo de Asesoría: $reunion->fk_id_tipo_asesoria</span>
                </div>
            ";      
        }
    ?>
    </div>
</div>