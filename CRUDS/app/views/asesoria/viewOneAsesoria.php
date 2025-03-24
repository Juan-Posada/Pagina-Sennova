<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/asesoria/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
    <?php
        if($asesoria && is_object($asesoria)){
            echo "
                <div class='record-one'>
                <span>Nombre: $asesoria->nombre</span>
                <span>Descripcion: $asesoria->description</span>
                </div>
            ";      
        }
    ?>
    </div>
</div>