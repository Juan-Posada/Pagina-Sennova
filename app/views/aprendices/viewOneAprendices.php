<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/aprendices/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
    <?php
        if($aprendiz && is_object($aprendiz)){
            echo "
                <div class='record-one'>
                    <span>ID: $aprendiz->id_aprendices</span>
                    <span>Nombre: $aprendiz->nombre</span>
                    <span>Email: $aprendiz->email</span>
                    <span>Apellidos: $aprendiz->apellidos</span>
                    <span>Teléfono: $aprendiz->telefono</span>
                </div>
            ";      
        }
    ?>
    </div>
</div>