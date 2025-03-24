<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/login/init"><img src="/img/back.svg"></a>
        </div>
        <div class="create">
            <a href="/reunion/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
    <?php
    if (empty($reuniones)) {
        echo '<br>No se encuentran reuniones en la base de datos';
    } else {
        foreach ($reuniones as $key => $value) {
            echo
            "<div class='record'>
                <span> ID: $value->id_reunion - Fecha: $value->fecha</span>
                <div class='buttons'>
                    <a href='/reunion/view/$value->id_reunion'> <button>Consultar</button> </a> 
                    <a href='/reunion/edit/$value->id_reunion'> <button>Editar</button> </a> 
                    <a href='/reunion/delete/$value->id_reunion'> <button>Eliminar</button> </a> 
                </div>
            </div>";
        }
    }
    ?>
    </div>
</div>