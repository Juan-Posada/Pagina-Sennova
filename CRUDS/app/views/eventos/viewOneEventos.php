<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/eventos/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
    <?php
        if($evento && is_object($evento)){
            echo "
                <div class='record-one'>
                    <span>ID: $evento->id_servicio</span>
                    <span>Nombre: $evento->nombre</span>
                    <span>Descripción: $evento->descripcion</span>
                    <span>Fecha del Evento: $evento->fecha_evento</span>
                </div>
            ";      
        }
    ?>
    </div>
</div>