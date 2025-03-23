<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/proyecto/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
    <?php
        if($proyecto && is_object($proyecto)){
            echo "
                <div class='record-one'>
                    <span>ID: $proyecto->id_proyecto</span>
                    <span>Nombre: $proyecto->nombre</span>
                </div>
            ";      
        }
    ?>
    </div>
</div>