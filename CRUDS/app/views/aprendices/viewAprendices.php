<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/login/init"><img src="/img/back.svg"></a>
        </div>
        <div class="create">
            <a href="/aprendices/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
    <?php
    if (empty($aprendices)) {
        echo '<br>No se encuentran aprendices en la base de datos';
    } else {
        foreach ($aprendices as $key => $value) {
            echo
            "<div class='record'>
                <span> ID: $value->id_aprendices - $value->nombre</span>
                <div class='buttons'>
                    <a href='/aprendices/view/$value->id_aprendices'> <button>Consultar</button> </a> 
                    <a href='/aprendices/edit/$value->id_aprendices'> <button>Editar</button> </a> 
                    <a href='/aprendices/delete/$value->id_aprendices'> <button>Eliminar</button> </a> 
                </div>
            </div>";
        }
    }
    ?>
    </div>
</div>