<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/personalTecnico/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
    <?php
        if($proyecto && is_object($proyecto)){
            echo "
                <div class='record-one'>
                    <span>ID: $personalTecnico->id_personal_tecnico</span>
                    <span>Nombre: $personalTecnico->nombre</span>
                </div>
            ";      
        }
    ?>
    </div>
</div>