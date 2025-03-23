<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/login/init"><img src="/img/back.svg"></a>
        </div>
        <div class="create">
            <a href="/tipoAsesoria/new"><button>+</button></a>
        </div>
    </div>
    <div class="info">
    <?php
    if (empty($tipoAsesoria)) {
        echo '<br>No se encuentran proyectos en la base de datos';
    } else {
        foreach ($tipoAsesoria as $key => $value) {
            echo
            "<div class='record'>
                <span> Linea Sennova: $value->linea_sennova</span>
                <div class='buttons'>
                    <a href='/tipoAsesoria/view/$value->id_tipo_asesoria'> <button>Consultar</button> </a> 
                    <a href='/tipoAsesoria/edit/$value->id_tipo_asesoria'> <button>Editar</button> </a> 
                    <a href='/tipoAsesoria/delete/$value->id_tipo_asesoria'> <button>Eliminar</button> </a> 
                </div>
            </div>";
        }
    }
    ?>
    </div>
</div>