<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/login/init"><img src="/img/back.svg"></a>
        </div>
        <div class="create">
            <a href="/eventos/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
    <?php
    if (empty($eventos)) {
        echo '<br>No se encuentran eventos en la base de datos';
    } else {
        foreach ($eventos as $key => $value) {
            echo
            "<div class='record'>
                <span> ID: $value->id_servicio - $value->nombre</span>
                <div class='buttons'>
                    <a href='/eventos/view/$value->id_servicio'> <button>Consultar</button> </a> 
                    <a href='/eventos/edit/$value->id_servicio'> <button>Editar</button> </a> 
                    <a href='/eventos/delete/$value->id_servicio'> <button>Eliminar</button> </a> 
                </div>
            </div>";
        }
    }
    ?>
    </div>
</div>