<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/tipoAsesoria/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
    <?php
        if($tipoAsesoria && is_object($tipoAsesoria)){
            echo "
                <div class='record-one'>
                    <span>ID: $tipoAsesoria->id_tipo_asesoria</span>
                    <span>Nombre: $tipoAsesoria->linea_sennova</span>
                </div>
            ";      
        }
    ?>
    </div>
</div>